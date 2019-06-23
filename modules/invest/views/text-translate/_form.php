<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Lang;
/* @var $this yii\web\View */
/* @var $model app\models\dilshod\TextTranslate */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="col-md-6">

<div class="text-translate-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    <?//= $form->field($model, 'lang')->textInput(['maxlength' => true]) ?>-->

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([
        '1' => Lang::t('Aktiv'),
        '0' => Lang::t('Nofaol'),
    ]); ?>

<!--    <?//= $form->field($model, 'updated_date')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>