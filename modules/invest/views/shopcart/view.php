<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ShopcartOrders */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Shopcart Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

// var_dump($model);exit;
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
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <table id="w0" class="table table-striped table-bordered detail-view">
        <tbody>
            <tr><th>Order ID</th><td>8</td>
                <th>Name</th><td><span class="not-set">(qiymatlanmagan)</span></td>
            </tr>

<tr><th>Address</th><td><span class="not-set">(qiymatlanmagan)</span></td>
<th>Phone</th><td><span class="not-set">(qiymatlanmagan)</span></td>
</tr>

<tr><th>Email</th><td><a href="mailto:"></a></td>
<th>Comment</th><td></td>
</tr>

<tr><th>Ip</th><td>127.0.0.1</td>
<th>Time</th><td>Jul 10, 2019 7:49:04 PM</td>
</tr>

<tr><th>Status</th><td>Tanlangan</td></tr>

</tbody>
</table>
                </div>
            </div>
            
        </div>

<p>aslkjdnf ksldj nfgsldkjfg n</p>
<div class="container">
            <div class="row">
                <div class="col-md-10">        
    <table id="w0" class="table table-striped table-bordered detail-view">
        <tbody>
            <?php 
                foreach ($model->goods as $key => $item) : ?>
            <tr>
                <td><?= $item->item->title ?></td>
                <td><?= $item->item->price ?></td>
                <td><?= $item->item->sale ?></td>
                <td><?= $item->count ?></td>
                <td><?= $item->cost ?></td>
                <td>Tanlangan</td></tr>
            </tr>
        <?php endforeach; ?>

</tbody>
</table>
</div>
</div>
</div>

    <?//= DetailView::widget([
        // 'model' => $model,
        // 'attributes' => [
        //     'order_id',
        //     // 'auth_user',
        //     'name',
        //     'address',
        //     'phone',
        //     'email:email',
        //     'comment',
        //     // 'remark',
        //     // 'access_token',
        //     'ip',
        //     // 'payment',
        //     'time:datetime',
        //     // 'new',
        //     // 'status',
        //     [
        //       'attribute' => 'status',
        //       'filter' => false,
        //       // 'format' => 'raw',
        //        'value' => function ($model) {
        //            return  $model->getStatus()[$model->status];
        //        },
        //     ],
        //     // 'type',
        // ],
    // ])
     ?>

</div>
