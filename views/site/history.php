<?php
use app\models\Lang;
use yii\widgets\DetailView;
use yii\helpers\Html;

$this->title = Lang::t('history');
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- <pre> -->
    <? //var_dump($history); die; ?>

<div>
    <h1><?= Html::encode($this->title) ?></h1>
    
  <table style="width: 100%" class="customers">     
   <th colspan="7">
     <a style="color: white" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">sardor</a>
   </th>
  </table>  


   <table style="width: 100%" id="collapseTwo1" class ="collapse customers">
  <tr>
    <th>Nomi</th>
    <th>Narxi</th>
    <th>Chegirma</th>
    <th>pachkadagi soni</th>
    <th>sotib olingan soni</th>
    <th>Sotib olingan sana</th>
    <th>Jami summa</th>
  </tr>
  <? foreach ($history as $value):  ?>
  <tr>
    <td><?=$value->name?></td>
    <td>2500</td>
    <td>10</td>
    <td>20</td>
    <td>10</td>
    <td><?=$value->time?></td>
    <td>2500000</td>
  </tr>
<? endforeach; ?>
 
</table>
<br>

<table style="width: 100%" class="customers">     
   <th colspan="7">
     <a style="color: white" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo2">maxprali</a>
   </th>
  </table>  


   <table style="width: 100%" id="collapseTwo2" class ="collapse customers">
  <tr>
    <th>Nomi</th>
    <th>Narxi</th>
    <th>Chegirma</th>
    <th>pachkadagi soni</th>
    <th>sotib olingan soni</th>
    <th>Sotib olingan sana</th>
    <th>Jami summa</th>
  </tr>
  <? foreach ($history as $value):  ?>
  <tr>
    <td><?=$value->name?></td>
    <td>2500</td>
    <td>10</td>
    <td>20</td>
    <td>10</td>
    <td><?=$value->time?></td>
    <td>2500000</td>
  </tr>
<? endforeach; ?>
 
</table>



</div>
