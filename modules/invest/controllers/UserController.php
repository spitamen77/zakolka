<?
namespace app\modules\invest\controllers;
use Yii;
use yii\web\Controller;
use app\models\User;
use yii\web\UploadedFile;
/**
* 
*/
class UserController extends Controller
{
	public function actionUser(){

		return $this->render('user');
	}
	
	public function actionUzgariw(){ 
			$model = User::findOne(Yii::$app->user->identity->id);
			$model2 = clone $model;

		if (Yii::$app->request->isPost)  {

			$post = Yii::$app->request->post();
			$model->username = $post['User']['username'];
			$model->fio = $post['User']['fio'];
			$model->email = $post['User']['email'];
			$model->tel = $post['User']['tel'];
            $image=UploadedFile::getInstance($model,'image');
            if ($image==null) {
                $model->image = $model2->image;
            }

            else {
                $name = 'images/' . mt_rand() . "." . $image->extension;
                $image->saveAs($name);
                $model->image = $name;
                @unlink($model2->image);
            }
				$model->save();
				return $this->redirect(['user']);
			// echo '<pre>'; var_dump($model->getErrors()); die;
			// if ($model->load(Yii::$app->request->post()) )  {
			// echo '<pre>'; var_dump($model); exit;
			// }
			// else{
			// 	var_dump($model->getErrors());die;
			// }
		
		}
		else{

		return $this->render('uzgariw',['model'=>$model]);
		}

	}

	
//    public function actionUzgariw()
//    {
//        $model = User::findOne(Yii::$app->user->identity->id);
//        $model2 = clone $model;
//
//        if ($model->load(Yii::$app->request->post()) ) {
//            $image=UploadedFile::getInstance($model,'image');
////            var_dump($image); die;
//            if ($image==null) {
//                $model->image = $model2->image;
//            }
//
//            else {
//                $name = 'images/' . mt_rand() . "." . $image->extension;
//                $image->saveAs($name);
//                $model->image = $name;
//                @unlink($model2->image);
//            }
//            $model->save();
//            return $this->redirect(['user']);
//        } else {
//            return $this->render('_form', [
//                'model' => $model,
//            ]);
//        }
//    }
	
}


?>