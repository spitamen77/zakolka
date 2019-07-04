<?php

use yii\helpers\Url;
use yii\helpers\Html;
use app\models\maxpirali\Menu;
use app\models\maxpirali\MenuItem;
use app\models\Lang;
use yii\widgets\LinkPager;

// var_dump(Yii::$app->request->userIP);exit;
$this->title = $menu->title;
?>
   <div class="col-xs-12 nopads">
      <ul class="breadcrumb">
         <li itemprop="itemListElement">
            <a href="<?=Url::to('/')?>">
            <span itemprop="name">
            <?=Lang::t('bosh sahifa')?>
            </span>
            </a>
            <meta itemprop="position" content="1">
         </li>
         <li>
            <span itemprop="name">
            <?=$menu->title?>
            </span>
            <meta itemprop="position" content="2">
         </li>
      </ul>
   </div>
   <div class="clearfix"></div>
   <h1><?=$menu->title?></h1>

   <div class="row">
   	<?php foreach($model as $value): ?>
      <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-12">
         <div class="product-thumb transition">
            <div class="image">
            	<a href="<?=Url::to('/?slug='.$menu->slug.'&item_slug='.$value->slug)?>">
            		<img src="<?=$value->photo?>" alt="<?=$value->translate->title?>" title="<?=$value->translate->title?>" class="img-responsive">
            	</a>
            </div><br><br>
            <div class="caption">
               <a href="<?=Url::to('/?slug='.$menu->slug.'&item_slug='.$value->slug)?>" class="prd-name"><?=$value->translate->title?></a>        
               <div class="price-container-c">
                  <div>
                     <span class="rozn-price-name"><?=Lang::t('price')?>:</span>
                     <? if($value->sale): ?>
                     <span class="price-new"><?=$value->price * (1 - $value->sale/100)?>   &nbsp;&nbsp;&nbsp;<span class="price-old"><?=$value->price?></span></span>
                     <? else: ?>
                     <span class="price-new"><?=$value->price?></span>
                     <? endif; ?>
                  </div>
                  <div>
                     <? if($value->sale): ?><span class="action-spec test3"></span><? endif; ?>
                  </div>
               </div>
               &#65279;
               <button type="button" class="cart-button cart-button-krl" data-id="<?=$value->id?>"><?=Lang::t("Sotib olish")?></button>
               <!-- Button fastorder -->
               <!-- <div class="button-gruop"> -->
                  <!-- Button fastorder -->
                 <!--  <button type="button" id="btn-formcall4959" class="btn btn-danger btn-lg btn-block btn-fastorder"><?=Lang::t("Hoziroq sotib olish")?></button>
                  <div id="fastorder-form-container4959"></div>
                  <script type="text/javascript">
                     $('#btn-formcall4959').on('click', function() {
                       var data = [];
                     
                       data['product_name']    = 'Заколка-автомат ЛАКРЕС';
                       data['price']           = '0';
                       data['product_id']      = '4959';
                       // data['product_link']    = 'https://lafrance-accessories.ru/zakolka-avtomat/zakolka-avtomat-lakres-8751gm-confetti';
                     
                       showForm(data);
                     });
                  </script>   -->            
               <!-- </div> -->
               <!-- END :  button fastorder -->
            </div>
         </div>
      </div>
    <? endforeach; ?>
   </div>
   <div class="row mb30 mt20">
      <div class="col-sm-6 text-left">
        <?= LinkPager::widget([
            'pagination' => $pages,
        ]);?>
         <!-- <ul class="pagination">
            <li class="active"><span>1</span></li>
            <li><a href="https://lafrance-accessories.ru/zakolka-avtomat?page=2">2</a></li>
            <li><a href="https://lafrance-accessories.ru/zakolka-avtomat?page=8">&gt;|</a></li>
         </ul> -->
<!--       </div>
      <div class="col-sm-6 text-right">Показано с 1 по 30 из 211 (всего 8 страниц)</div>
 -->   </div>
   <p class="row-heading as_h2" style="font-weight: 600; font-size: 17px!important; text-transform: uppercase; border-bottom: 2px solid #000;">Хит продаж</p>
   <div class="row">
      <?php foreach (MenuItem::getXit($menu->id) as $item) :?>
      <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-12">
         <div class="product-thumb transition">
            <div class="image">
              <a href="<?=Url::to('/?slug='.$menu->slug.'&item_slug='.$item->slug)?>">
                <img src="<?=$item->photo?>" alt="<?=$item->translate->title?>" title="<?=$item->translate->title?>" class="img-responsive">
              </a>
            </div><br><br>
            <div class="caption">
               <a href="<?=Url::to('/?slug='.$menu->slug.'&item_slug='.$item->slug)?>" class="prd-name"><?=$item->translate->title?></a>        
               <div class="price-container-c">
                  <div>
                     <span class="rozn-price-name"><?=Lang::t('price')?>:</span>
                     <? if($item->sale): ?>
                     <span class="price-new"><?=$item->price * (1 - $item->sale/100)?>   &nbsp;&nbsp;&nbsp;<span class="price-old"><?=$item->price?></span></span>
                     <? else: ?>
                     <span class="price-new"><?=$item->price?></span>
                     <? endif; ?>
                  </div>
                  <div>
                     <? if($item->sale): ?><span class="action-spec test3"></span><? endif; ?>
                  </div>
               </div>
               &#65279;
               <button type="button" class="cart-button cart-button-krl" data-id="<?=$item->id?>"><?=Lang::t("Sotib olish")?></button>
               <!-- Button fastorder -->
               <!-- <div class="button-gruop"> -->
                  <!-- Button fastorder -->
                 <!--  <button type="button" id="btn-formcall4959" class="btn btn-danger btn-lg btn-block btn-fastorder"><?=Lang::t("Hoziroq sotib olish")?></button>
                  <div id="fastorder-form-container4959"></div>
                  <script type="text/javascript">
                     $('#btn-formcall4959').on('click', function() {
                       var data = [];
                     
                       data['product_name']    = 'Заколка-автомат ЛАКРЕС';
                       data['price']           = '0';
                       data['product_id']      = '4959';
                       // data['product_link']    = 'https://lafrance-accessories.ru/zakolka-avtomat/zakolka-avtomat-lakres-8751gm-confetti';
                     
                       showForm(data);
                     });
                  </script>   -->            
               <!-- </div> -->
               <!-- END :  button fastorder -->
            </div>
         </div>
      </div>
      <?php endforeach; ?>
   </div>

<?php
$this->registerJs('
    $(".cart-button-krl").click(function(e){
        // e.preventDefault();
        var items = $(this).attr("data-id");
        console.log(items);
        $.get("/site/sale",{item: items},function(response){
            
                if(response.result=="success"){
                    window.location.reload();
                    
                    console.log(response.result);
                } else console.log(response.result);
            });
    });
');

?>