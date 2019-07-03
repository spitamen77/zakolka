<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ShopcartOrders */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Shopcart Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="shopcart-orders-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->order_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->order_id], [
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
            'order_id',
            // 'auth_user',
            'name',
            'address',
            'phone',
            'email:email',
            'comment',
            'remark',
            // 'access_token',
            'ip',
            // 'payment',
            'time:datetime',
            // 'new',
            // 'status',
            [
              'attribute' => 'status',
              'filter' => false,
              // 'format' => 'raw',
               'value' => function ($model) {
                   return  $model->getStatus()[$model->status];
               },
            ],
            // 'type',
        ],
    ]) ?>

</div>
