<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ShopcartOrders */

$this->title = 'Create Shopcart Orders';
$this->params['breadcrumbs'][] = ['label' => 'Shopcart Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shopcart-orders-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
