<?php

use yii\helpers\Url;
use yii\helpers\Html;
use app\models\maxpirali\Menu;
use app\models\Lang;
use yii\widgets\LinkPager;


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
   	<? foreach($model as $value): ?>
      <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-12">
         <div class="product-thumb transition">
            <div class="image"><a href="https://lafrance-accessories.ru/zakolka-avtomat/zakolka-avtomat-lakres-8751gm-confetti"><img src="image/cache/catalog/IMG_4996-300x300.jpg" alt="Заколка-автомат ЛАКРЕС" title="Заколка-автомат ЛАКРЕС" class="img-responsive"></a></div>
            <div class="caption">
               <a href="https://lafrance-accessories.ru/zakolka-avtomat/zakolka-avtomat-lakres-8751gm-confetti" class="prd-name">Заколка-автомат ЛАКРЕС</a>        
               <p class="sku"><strong>Артикул:</strong>8751GM-CONFETTI</p>
               <div class="price-container-c">
                  <div>
                     <span class="rozn-price-name">Розница:</span>
                     <span class="price-new">0р.</span>
                  </div>
                  <div>
                     <span class="opt-price-name">Опт:</span><span class="opt-price-null">--</span>
                  </div>
               </div>
               &#65279;
               <button type="button" class="cart-button cart-button-krl " enabled="enabled" onclick="cart.add('4959'); yaCounter48531482.reachGoal('zvonok1'); return true;">Купить</button>
               <!-- Button fastorder -->
               <div class="button-gruop">
                  <!-- Button fastorder -->
                  <button type="button" id="btn-formcall4959" class="btn btn-danger btn-lg btn-block btn-fastorder">
                  Купить в один клик</button>
                  <div id="fastorder-form-container4959"></div>
                  <script type="text/javascript">
                     $('#btn-formcall4959').on('click', function() {
                       var data = [];
                     
                       data['product_name']    = 'Заколка-автомат ЛАКРЕС';
                       data['price']           = '0';
                       data['product_id']      = '4959';
                       data['product_link']    = 'https://lafrance-accessories.ru/zakolka-avtomat/zakolka-avtomat-lakres-8751gm-confetti';
                     
                       showForm(data);
                     });
                  </script>              
               </div>
               <!-- END :  button fastorder -->
            </div>
         </div>
      </div>
    <? endforeach; ?>
   </div>
   <div class="row mb30 mt20">
      <div class="col-sm-6 text-left">
         <ul class="pagination">
            <li class="active"><span>1</span></li>
            <li><a href="https://lafrance-accessories.ru/zakolka-avtomat?page=2">2</a></li>
            <li><a href="https://lafrance-accessories.ru/zakolka-avtomat?page=3">3</a></li>
            <li><a href="https://lafrance-accessories.ru/zakolka-avtomat?page=4">4</a></li>
            <li><a href="https://lafrance-accessories.ru/zakolka-avtomat?page=5">5</a></li>
            <li><a href="https://lafrance-accessories.ru/zakolka-avtomat?page=6">6</a></li>
            <li><a href="https://lafrance-accessories.ru/zakolka-avtomat?page=7">7</a></li>
            <li><a href="https://lafrance-accessories.ru/zakolka-avtomat?page=8">8</a></li>
            <li><a href="https://lafrance-accessories.ru/zakolka-avtomat?page=2">&gt;</a></li>
            <li><a href="https://lafrance-accessories.ru/zakolka-avtomat?page=8">&gt;|</a></li>
         </ul>
      </div>
      <div class="col-sm-6 text-right">Показано с 1 по 30 из 211 (всего 8 страниц)</div>
   </div>
   <p class="row-heading as_h2" style="font-weight: 600; font-size: 17px!important; text-transform: uppercase; border-bottom: 2px solid #000;">Хит продаж</p>
   <div class="row">
      <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-12">
         <div class="product-thumb transition">
            <div class="image"><a href="https://lafrance-accessories.ru/shushu-tkanevaja-bolshaja-ch150-blmotifs"><img src="image/cache/catalog/CHou/CH150-BL_motifs-200x200.jpg" alt="ШУШУ ТКАНЕВАЯ БОЛЬШАЯ" title="ШУШУ ТКАНЕВАЯ БОЛЬШАЯ" class="img-responsive"></a></div>
            <div class="caption prikh_caption">
               <a href="https://lafrance-accessories.ru/shushu-tkanevaja-bolshaja-ch150-blmotifs" class="prd-name">ШУШУ ТКАНЕВАЯ БОЛЬШАЯ</a>        
               <p class="sku"><strong>Артикул:</strong>CH150-BL motifs</p>
               <div class="price-container-c">
                  <div>
                     <span class="rozn-price-name">Розница:</span>
                     <span class="price-new">360р.</span>
                  </div>
                  <div>
                     <span class="opt-price-name">Опт:</span><span class="opt-price-null">--</span>
                  </div>
               </div>
               <button type="button" class="cart-button cart-button-krl " enabled="enabled" onclick="cart.add('5034'); yaCounter48531482.reachGoal('zvonok1'); return true;">Купить</button>
               <!-- Button fastorder -->
               <div class="button-gruop">
                  <!-- Button fastorder -->
                  <button type="button" id="btn-formcall5034" class="btn btn-danger btn-lg btn-block btn-fastorder">
                  Купить в один клик</button>
                  <div id="fastorder-form-container5034"></div>
                  <script type="text/javascript">
                     $('#btn-formcall5034').on('click', function() {
                       var data = [];
                     
                       data['product_name']    = 'ШУШУ ТКАНЕВАЯ БОЛЬШАЯ';
                       data['price']           = '360';
                       data['product_id']      = '5034';
                       data['product_link']    = 'https://lafrance-accessories.ru/zakolka-avtomat/shushu-tkanevaja-bolshaja-ch150-blmotifs';
                     
                       showForm(data);
                     });
                  </script>              
               </div>
               <!-- END :  button fastorder -->
            </div>
         </div>
      </div>
      <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-12">
         <div class="product-thumb transition">
            <div class="image"><a href="https://lafrance-accessories.ru/zakolka-avtomat-duga-6067-01"><img src="image/cache/catalog/-barrettes-Guillot/IMG_1565-200x200.JPG" alt="Заколка-автомат ДУГА" title="Заколка-автомат ДУГА" class="img-responsive"></a></div>
            <div class="caption prikh_caption">
               <a href="https://lafrance-accessories.ru/zakolka-avtomat-duga-6067-01" class="prd-name">Заколка-автомат ДУГА</a>        
               <p class="sku"><strong>Артикул:</strong>6067-01</p>
               <button type="button" id="button-ne-cart" data-loading-text="<b>Notice</b>: Undefined variable: text_loading in <b>/home/l/lafine/lafrance-accessories.ru/public_html/catalog/view/theme/default/template/module/bestseller.tpl</b> on line <b>12</b>" class="btn btn-primary btn-lg btn-block" style="background-color: black;">Нет в наличии</button>
            </div>
         </div>
      </div>
      <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-12">
         <div class="product-thumb transition">
            <div class="image"><a href="https://lafrance-accessories.ru/zakolka-krab-bolshoj-meduza-01910-chch"><img src="image/cache/catalog/-clips-Guillot/01910/01910-CHCH_2-200x200.jpg" alt="Заколка-краб большой МЕДУЗА" title="Заколка-краб большой МЕДУЗА" class="img-responsive"></a></div>
            <div class="caption prikh_caption">
               <a href="https://lafrance-accessories.ru/zakolka-krab-bolshoj-meduza-01910-chch" class="prd-name">Заколка-краб большой МЕДУЗА</a>        
               <p class="sku"><strong>Артикул:</strong>01910-CHCH</p>
               <div class="price-container-c">
                  <div>
                     <span class="rozn-price-name">Розница:</span>
                     <span class="price-new">780р.</span>
                  </div>
                  <div>
                     <span class="opt-price-name">Опт:</span><span class="opt-price-null">--</span>
                  </div>
               </div>
               <button type="button" class="cart-button cart-button-krl " enabled="enabled" onclick="cart.add('5233'); yaCounter48531482.reachGoal('zvonok1'); return true;">Купить</button>
               <!-- Button fastorder -->
               <div class="button-gruop">
                  <!-- Button fastorder -->
                  <button type="button" id="btn-formcall5233" class="btn btn-danger btn-lg btn-block btn-fastorder">
                  Купить в один клик</button>
                  <div id="fastorder-form-container5233"></div>
                  <script type="text/javascript">
                     $('#btn-formcall5233').on('click', function() {
                       var data = [];
                     
                       data['product_name']    = 'Заколка-краб большой МЕДУЗА';
                       data['price']           = '780';
                       data['product_id']      = '5233';
                       data['product_link']    = 'https://lafrance-accessories.ru/zakolka-avtomat/zakolka-krab-bolshoj-meduza-01910-chch';
                     
                       showForm(data);
                     });
                  </script>              
               </div>
               <!-- END :  button fastorder -->
            </div>
         </div>
      </div>
   </div>

<?= LinkPager::widget([
    'pagination' => $pages,
]);?>