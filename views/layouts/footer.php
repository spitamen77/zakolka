<?
use app\models\Lang;
use app\models\maxpirali\Menu;
use yii\helpers\Url;
use yii\helpers\Html;
?>
<style type="text/css">
    footer {
        background:  #545455;

    }
    .pad{
        padding-top: 20px
    }
     .p{
        color: white;
    }
    .foot{
        background-color: #545455;
        height: 100%
    }
    ul li a i.bold {
    width: 25px;
    height: 25px;
    background-color: #636363;
    color: #fff;
    border-radius: 3px;
    text-align: center;
    line-height: 25px;
    margin-right: 10px
    }
    li{
        padding-bottom: 10px
    }
    div .like{
        margin: 20px
    }
    .mar{
        margin: 10px
    }
    div ul {
        font-size: 15px;
        padding: 0;
    }
    li  .white{
        color: white
    }

</style>
<footer>
    <div class="container pad">
         <section>
            <img style="background: white; height: 50px" src="/img/logo.png">
        </section>
         <div class="row">
            <div class="col-md-4">
                   <ul >
                        <li ><a class="white" href="<?=Url::to('/')?>"><span ><i class="mar fa fa-home"></i></span>Bosh sahifa</a></li><li ><a class="white" href="<?=Url::to('site/about')?>"><span ><i class="mar fa fa-home"></i></span>Biz haqimizda</a></li>
                        <li><a class="white" href="<?=Url::to('site/pricelist')?>"><span ><i class="mar fa fa-check-square"></i></span>Narxlar ro'yxati</a></li>
                        <li><a class="white" href="<?=Url::to('site/contact')?>"><span ><i class="mar fa fa-file"></i></span>Contact</a></li>
                    </ul>
            </div>
                <div class="col-md-4">
                    <ul>
                        <?php PrintMenuFoot(Menu::menus()); ?>
                    </ul>              
                </div>
             <div class="col-md-4">
                    <ul >
                        <li > <a class="white" href="#"><span><i class="mar fa fa-map-marker"></i></span>Farģona, Qòqon shahar Navbaxor 26-uy</a></li>
                        <li> <a class="white" href="#"><span ><i class="mar fa fa-envelope"></i></span>Sardor88.88@mail.ru</a></li>
                        <li> <a class="white" href="#"><span ><i class="mar fa fa-phone"></i></span>+998 93 3826003</a></li>
                        <li> <a class="white" href="#"><span ><i class="mar fa fa-send bold"></i></span>@Sh_M_Aripov</a></li>
                    </ul>  
            </div>
        </div>
        
   
    </div>
</footer>


<?php $i=0; function PrintMenuFoot($menu){ ?>
    <? foreach ($menu as $value) {
        $i++; 
        if ($i==5) break;
        // var_dump($key2); die;
        ?>

        <li ><a  href="<?=Url::to(['site/index', 'slug' => $value['slug']])?>" class="white parent-a"><i class="mar fa fa-play"></i><?=$value['title']?></a>
            <? if ($value['children']) { ?>
               
            <?} ?>
        </li>
        <? }  
    }

    
?>
<?php
$this->registerJs('
    $(".cart-button-krl").click(function(e){
        // e.preventDefault();
        var items = $(this).attr("data-id");
        // console.log(items);
        $.get("/site/sale",{item: items},function(response){
            
                if(response.result=="success"){
                     // window.location.reload();
                    //console.log(response.result);
                } else console.log(response.result);
            });
    });
');

?>