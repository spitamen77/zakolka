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
    <? foreach ($history as $key => $value): ?>
    
  <table style="width: 100%" class="customers"> 

  <thead> 
      <tr>
    <th colspan="2">
     <a style="color: white" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo<?=$key?>">
      <?=date('d / m / Y',$value->time)?>
   </a>
      </th>
    <th colspan="2"><?=$value->getCount()?></th>
    <th colspan="2"><?=$value->getCost()?></th>
    </tr>
   </thead>
    


   <tbody style="width: 100%" id="collapseTwo<?=$key?>" class ="collapse customers">
  <tr>
    <td>Nomi</td>
    <td>Narxi</td>
    <td>Chegirma</td>
    <td>pachkadagi soni</td>
    <td>sotib olingan soni</td>
    <td>Jami summa</td>
  </tr>
  <? foreach ($value->goods as $k => $item): ?>
  <tr>
    <td><?=$item->item->title?></td>
    <td><?=($item->sale)?$item->price* (1 - $item->sale / 100):$item->price?></td>
    <td><?=$item->sale?> %</td>
    <td><?=$item->pieces?></td>
    <td><?=$item->count?></td>
    <td><?=$item->getCost()?></td>
  </tr>
  <? endforeach ?>
</tbody> 
</table>
<? endforeach ?>
<br>





</div>
