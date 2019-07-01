<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Lang;

/* @var $this yii\web\View */
/* @var $model app\models\dilshod\Menu */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="col-md-8">
    <div class="menu-form">




    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
<!--        --><?// var_dump($model->image); die;?>
    <img width="100px" src="/web/<?=$model->image?>"

    <?= $form->field($model,'image')->fileInput()->label(false);?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>


</div>
</div>
