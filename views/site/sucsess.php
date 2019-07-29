<?php
use app\models\Lang;


use yii\helpers\Html;

$this->title = Lang::t('The end');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
   <p>
       <?=Lang::t('text3')?>
   </p>
</div>
