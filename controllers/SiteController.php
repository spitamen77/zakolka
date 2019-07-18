<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\SignupForm;
use app\models\ShopcartGoods;
use app\models\ShopcartOrders;
use yii\data\Pagination;
use app\models\maxpirali\Menu;
use app\models\maxpirali\MenuItem;
use app\models\maxpirali\MenuItemTrans;
use app\models\dilshod\MenuItemTransSearch as Trans;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function beforeAction($action)
    {
        $cookies = Yii::$app->request->cookies;
        if (($cookie = $cookies->get('language')) !== null) {
            Yii::$app->language = $cookie->value;
        }
        if (Yii::$app->user->isGuest) {
            if(Yii::$app->controller->action->id!='login'){
            $model = new LoginForm();
            return $this->redirect(['login', 'model' => $model]);
        }
        }
        return parent::beforeAction($action);
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex($slug = '', $item_slug = '')
    {
        // var_dump($item_slug); die;
        if ($slug) {
            $menu = Menu::find()->where(['slug' => $slug])->one();
            $items = MenuItem::find()->where(['menu_id'=>$menu->id])->orderBy(['id'=>SORT_DESC])->all();
            if ($item_slug) {
                $items = MenuItem::find()->where(['slug'=>$item_slug])->orderBy(['id'=>SORT_DESC])->all();
            }
            switch (count($items)) {
                case 0:
                    return $this->render('error');
                    break;

                case 1:
                    return $this->renderPage($items,$menu);
                    break;
                
                default:
                    return $this->renderPages($slug);
                    break;
            }
            return $this->render('/'.$menu->template().'/pages');
        }
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }



    public function actionAddress()
    {
        $id = ShopcartOrders::getId();
        $model=ShopcartOrders::find()->where(['order_id'=>$id])->one();

        if ($model->load(Yii::$app->request->post())) {   
        $model->status=1;  
        $model->address=$model->address." ,".$model->remark;
        $model->remark=NULL;

        if ($model->save())
            return $this->render('sucsess', [
            'model' => $model,
        ]);
        }
        return $this->render('address', [
            'model' => $model,
        ]);
    }





    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }



    


     public function actionSucsess(){

        return $this->render('sucsess');
    }




    public function actionSignup()
    {
        $model = new SignupForm(); // Не забываем добавить в начало файла: use app\models\SignupForm; или заменить 'new SignupForm()' на '\app\models\SignupForm()'

        if ($model->load(Yii::$app->request->post())) { // Если есть, загружаем post данные в модель через родительский метод load класса Model
            if ($user = $model->signup()) { // Регистрация
                // if (Yii::$app->getUser()->login($user)) { // Логиним пользователя если регистрация успешна
                    return $this->actionConfirm(); // Возвращаем на главную страницу
                // }
            }
        }

        return $this->render('signup', [ // Просто рендерим вид если один из if вернул false
            'model' => $model,
        ]);
    }
    public function renderPage($item, $menu)
    {
        $item = $item[0];
        $item->views += 1;
        $item->save(false);
        return $this->render('/'.$menu->template().'/page',['model'=>$item,'menu'=>$menu]);
    }
    public function renderPages($slug)
    {
        $menu = Menu::find()->where(['slug'=>$slug])->one();
        $query = MenuItem::find()->where(['menu_id'=>$menu->id])->andWhere(['status'=>MenuItem::STATUS_ACTIVE]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize' => 12 ]);
        $models = $query->offset($pages->offset)
            ->orderBy(['id'=>SORT_DESC])
            ->limit($pages->limit)
            ->all();
        // echo "<pre>";var_dump($models); die;
        return $this->render('/'.$menu->template().'/pages',[
            'model' => $models, 
            'pages' => $pages, 
            'menu' => $menu
        ]);
    }

    public function actionSale()
    {
        $item_id = $_GET['item'];
        $quantity = ($_GET['quantity'])?$_GET['quantity']:1;
        $good = ShopcartGoods::saved($item_id, $quantity);
        if ($good=="success") {
            $order = ShopcartOrders::find()->where(['access_token'=>Yii::$app->session->getId()])->one();
            Yii::$app->response->format='json';
            return ['result' => 'success','cost'=>$order->cost, 'count'=>$order->count];
        }
        else {
            Yii::$app->response->format='json';
            return ['result' => 'error'];
        }
    }

    public function actionCart()
    {
        $order = ShopcartOrders::goods();
        // return $this->render('card');
        return $this->render('card', [
            'items' => $order,
        ]);
    }
     public function actionPricelist(){

        $price = MenuItem::find()->all();

        return $this->render('pricelist',[
            'items'=>$price,
        ]);
    }



    public function actionDelete()
    {
        $good_id = $_GET['good_id'];
        $good = ShopcartGoods::find()->where(['good_id'=>$good_id])->one();
        $good->delete();
        Yii::$app->response->format='json';
        return ['result' => 'success'];
    }

    public function actionConfirm()
    {
        return $this->render('confirm');
    }

    public function actionSearch()
    {
        $new = Trans::find()->where(['status'=>1])
        ->andWhere(['like', 'title', Yii::$app->request->queryParams['search']])
        ->andWhere(['like', 'short', Yii::$app->request->queryParams['search']])
        ->andWhere(['like', 'text', Yii::$app->request->queryParams['search']])
        ->orderBy(["id" => SORT_DESC])
        ->all();
    // var_dump(Yii::$app->request->queryParams['search']);exit;
        // $data =$new->search(Yii::$app->request->queryParams);
        return $this->render('search', [
            'model' => $new,
        ]);
    }
    
    // public function actionLoogin()
    // {

    //     $model = new LoginForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->login()) {
    //         return $this->redirect(['index']);
    //     }
    //     return $this->render('loogin', [
    //         'model' => $model,
    //     ]);
    // }

    public function actionLang(){
        $get = Yii::$app->request->get();
        $cookies = Yii::$app->response->cookies;
        $cookies->add(new \yii\web\Cookie([
            'name' => 'language',
            'value' => $get[1]['id'],
        ]));
        // echo "<pre>"; var_dump($vaa); die;
        if($get){
            return $this->redirect($get[1]['url']);
        }else{
          return $this->goHome();
        }
    }
}
