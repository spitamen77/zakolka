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
use yii\data\Pagination;
use app\models\maxpirali\Menu;
use app\models\maxpirali\MenuItem;
use app\models\maxpirali\MenuItemTrans;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
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
    public function actionIndex($id = '')
    {
        // Yii::$app->language = 'ru-RU';
        if ($id) {
            $menu = Menu::findOne($id);
            $items = MenuItem::findAll(['menu_id'=>$id]);
            switch (count($items)) {
                case 0:
                    return $this->render('error');
                    break;

                case 1:
                    return $this->renderPage($items,$menu);
                    break;
                
                default:
                    return $this->renderPages($id);
                    break;
            }
            return $this->render('/'.$menu->template().'/pages');
        }
            // echo "<pre>"; var_dump(Yii::$app->language); die;
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

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionSignup()
    {
        $model = new SignupForm(); // Не забываем добавить в начало файла: use app\models\SignupForm; или заменить 'new SignupForm()' на '\app\models\SignupForm()'

        if ($model->load(Yii::$app->request->post())) { // Если есть, загружаем post данные в модель через родительский метод load класса Model
            if ($user = $model->signup()) { // Регистрация
                if (Yii::$app->getUser()->login($user)) { // Логиним пользователя если регистрация успешна
                    return $this->goHome(); // Возвращаем на главную страницу
                }
            }
        }

        return $this->render('signup', [ // Просто рендерим вид если один из if вернул false
            'model' => $model,
        ]);
    }
    public function renderPage($item,$menu)
    {
        $item = $item[0];
        return $this->render('/'.$menu->template().'/page',['model'=>$item,'menu'=>$menu]);
    }
    public function renderPages($id)
    {
        $menu = Menu::findOne($id);
        $query = MenuItem::find()->where(['menu_id'=>$id]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize' => 12 ]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        // echo "<pre>";var_dump($item); die;
        return $this->render('/'.$menu->template().'/pages',[
            'model' => $models, 
            'pages' => $pages, 
            'menu' => $menu
        ]);
    }
}
