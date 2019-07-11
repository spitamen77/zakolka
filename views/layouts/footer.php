<?
use app\models\Lang;
?>
<style type="text/css">
    .p{
        color: white;
    }
    .foot{
        background-color: #545455;
        height: 30%
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
</style>


<footer class="footer foot">
    <div class="container p">
        <div class="row">
            <div class="col-md-4">                
                <div class="footer-title">
                    <img style="width: 150px; background: white" src="/img/logo.png">
                </div>
               
                    <ul style="font-size: 20px">
                        <li ><span class="sp-ic icon-home"><i class="mar fa fa-home"></i></span>Farģona viloyati, Qòqon shaxri Navbaxor kòchasi 26-uy</li>
                        <li><span class="sp-ic icon-envelope"><i class="mar fa fa-envelope"></i></span>Sardor88.88@mail.ru</li>
                        <li><span class="sp-ic icon-phone"><i class="mar fa fa-phone"></i></span>+998 93 3826003</li>
                    </ul>
              
                           
            </div>
            <div class="col-md-4">
               
               
                    <ul style="font-size: 20px">
                        <li ><span class="sp-ic icon-home"><i class="mar fa fa-home"></i></span>Farģona viloyati, Qòqon shaxri Navbaxor kòchasi 26-uy</li>
                        <li><span class="sp-ic icon-envelope"><i class="mar fa fa-envelope"></i></span>Sardor88.88@mail.ru</li>
                        <li><span class="sp-ic icon-phone"><i class="mar fa fa-phone"></i></span>+998 93 3826003</li>
                    </ul>
              
            </div>
             <div class="col-md-4">
               
               
                    <ul style="font-size: 20px">
                        <li ><span class="sp-ic icon-home"><i class="mar fa fa-home"></i></span>Farģona viloyati, Qòqon shaxri Navbaxor kòchasi 26-uy</li>
                        <li><span class="sp-ic icon-envelope"><i class="mar fa fa-envelope"></i></span>Sardor88.88@mail.ru</li>
                        <li><span class="sp-ic icon-phone"><i class="mar fa fa-phone"></i></span>+998 93 3826003</li>
                    </ul>
              
            </div>
        </div>
        <div class="like">            
            <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </div>
</footer>
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
<script>
window.replainSettings = { id: '0a09140a-6481-4f7e-9ff9-7ddb25d1d079' };
(function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
})('https://widget.replain.cc/dist/client.js');
</script>