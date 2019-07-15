<?php
use app\models\Lang;


use yii\helpers\Html;

$this->title = Lang::t('about');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
   <p>
       XUrmatli midoz Siz bilan o'zimiz bo'glanamiz, Agar bo'glanmasak, +998 XX XXX-XX-XX raqamiga o'ng'iroq qiling!
   </p>
</div>
