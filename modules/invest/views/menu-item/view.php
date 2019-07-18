<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Lang;

/* @var $this yii\web\View */
/* @var $model app\models\dilshod\MenuItem */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Menu Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="menu-item-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <a href='javascript:history.back()' class='btn btn-danger'>ortga</a>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            // 'menu_id',
            [
              'attribute' => 'menu_id',
               'value' => function ($model) {
                   return  $model->getMenuTitle($model->menu_id);
               },
            ],
            'title',
            // 'photo',
            'short',
            'text:ntext',
            'slug',
            'views',
            // 'status',
            [
              'attribute' => 'status',
               'value' => function ($model) {
                   return  $model->getStatus()[$model->status];
               },
            ],
            // 'price',
            [
              'attribute' => 'price',
               'value' => function ($model) {
                   return  $model->price;
               },
            ],
            'sale',
             'pieces',
            [
             'attribute' =>  Lang::t("Rasm"),
             'format' => 'raw',
             'value' => function ($model) {   
                if (!empty($model->photo))
                  return '<img src="/web/'.$model->photo.'" width="320px" height="auto">'; 
                else return Lang::t('Rasm yuklanmagan');
             },
            ],
            // 'user_id',
            // 'created_date',
            // 'updated_date',
        ],
    ]) ?>

</div>
