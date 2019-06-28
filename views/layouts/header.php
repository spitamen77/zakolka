<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\models\maxpirali\Menu;


?>


<div class="modal fade" id="callback" role="dialog">
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Обратный звонок</h4>
         </div>
         <div class="modal-body">
            <p>Введите свои контактные данные и мы Вам <strong>обязательно</strong> перезвоним</p>
            <input type="text" class="form-control" placeholder="Введите Ваше имя" id="callback-input-name"/>
            <input type="tel" class="form-control" placeholder="Введите Ваш номер телефона" id="callback-input-name"/>
            <p class="confidenc-politik">Нажимая кнопку, я принимаю <a href="/privacy-policy">соглашение о конфиденциальности</a> и соглашаюсь с обработкой персональных данных</p>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-primary">Перезвоните мне</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть окно</button>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="download_after_register" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Уведомление</h4>
         </div>
         <div class="modal-body">
            <p>
               Прайслист доступен только 
               <strong>
                  <a href="/login">
                     оптовым
                 </a>
               </strong>
               покупателям
            </p>
         </div>
         <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть окно </button>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="buy" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Уведомление</h4>
            </div>
            <div class="modal-body">
                <p>Товар добавлен в корзину</p>
                <table>
                    <tr>
                        <td><img alt="Изображение товара" src="" id="buy-tovar-img"/></td>
                    </tr>
                    <tr>
                        <td><span id="buy-tovar-name"></span></td>
                    </tr>
                    <tr>
                        <td><span id="buy-tovar-sku"></span></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Оформить заказ</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
            </div>
        </div>
    </div>
</div>
<nav id="top ">
    <div itemscope itemtype="http://schema.org/Organization">
        <meta itemprop="name" content="Аксессуары для волос в розницу - La France"/>
        <meta itemprop="telephone" content="+79067097977"/>
        <meta itemprop="fax" content="+79067097977"/>
        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <meta itemprop="streetAddress" content="г. Москва, улица Шарикоподшипниковская, 13 строение 3,офис 24"/>
        </div>
        <meta itemprop="email" content="info@la-finesse.ru"/>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3 logo-container">
                <div class="logo">
                <img src="img/logo.png" alt="Amina taqinchoqlari"/>
                </div>
            </div>
            <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Меню<span class="caret"></span></button>

                    <ul class="dropdown-menu">
                        <? PrintMenu(Menu::menus()); ?>
                        <li><a href="https://lafrance-accessories.ru/greben">Гребень</a></li>
                        <li><a href="https://lafrance-accessories.ru/kitajskie-palochki">Китайские Палочки</a></li>
                        <li><a href="https://lafrance-accessories.ru/nabory-aksessuarov">Наборы аксессуаров</a></li>
                        <li><a href="https://lafrance-accessories.ru/shpilki">Шпильки для волос</a></li>
                        <li><a href="https://lafrance-accessories.ru/avtorskij-dizajn-roznitsa">Авторский дизайн-РОЗНИЦА</a></li>
                        <li><a href="https://lafrance-accessories.ru/zakolka-klik-klak">Заколка клик-клак</a></li>
                        <li><a href="https://lafrance-accessories.ru/zakolka-krab">Заколка – Краб для волос</a></li>
                        <li><a href="https://lafrance-accessories.ru/zakolka-avtomat">Заколка-автомат</a></li>
                        <li><a href="https://lafrance-accessories.ru/zakolka-banan">Заколка-банан</a></li>
                        <li><a href="https://lafrance-accessories.ru/zakolka-bulavka">Заколка-булавка, заколка на пучок</a></li>
                        <li><a href="https://lafrance-accessories.ru/zakolki-dlya-volos">Заколки для волос</a></li>
                        <li><a href="https://lafrance-accessories.ru/francuzskie-zakolki">Французские заколки для волос</a></li>
                        <li><a href="https://lafrance-accessories.ru/nevidimka">Невидимка, приколка</a></li>
                        <li><a href="https://lafrance-accessories.ru/obodok">ОБОДКИ ДЛЯ ВОЛОС</a></li>
                        <li><a href="https://lafrance-accessories.ru/povjazki-vjazanye">Повязки вязаные</a></li>
                        <li><a href="https://lafrance-accessories.ru/rezinka">Резинки для волос</a></li>
                        <li><a href="https://lafrance-accessories.ru/shushu">Шушу</a></li>

                        <li class="divider"></li>
                        <li><a class="signup" href="/my-account">Зарегистрируйся и узнай о подарке</a>
                        <li class="divider"></li>
                        <li><a class="signup" href="https://lafrance-accessories.ru/login">Войти(для оптовых клиентов)</a>
                        <li class="divider"></li>
                        <li class="dropphone">+7(906) 709-79-77</li>
                        <li class="dropphone"><a href="&#109;&#097;&#105;&#108;&#116;&#111;:&#105;&#110;&#102;&#111;&#064;&#108;&#097;&#045;&#102;&#105;&#110;&#101;&#115;&#115;&#101;&#046;&#114;&#117;" title="Отправить нам письмо на электронную почту">&#105;&#110;&#102;&#111;&#064;&#108;&#097;&#045;&#102;&#105;&#110;&#101;&#115;&#115;&#101;&#046;&#114;&#117;</a></li>
                        <li class="divider"></li>
                        <!--<li><a class="callback-a btn btn-primary" data-toggle="modal" data-target="#callback">Обратный звонок</a></li>-->
                        <a class="exformCallback btn btn-primary" data-toggle="modal" data-target="#callback">Обратный звонок</a>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9">
                <div class="header-row-1  hidden-xs visible-sm visible-md visible-lg">
                    <div class="prikh_header">
                        <div class="prikh_header__text">
                            <p>Безупречные заколки высочайшего класса, созданные<br>французскими дизайнерами.</p>
                        </div>
                        <div class="prikh_header__contacts">
                            <span class="mail-sp"><a href="mailto:091118.zakolki@gmail.com" title="Отправить нам письмо на электронную почту">091118.zakolki@gmail.com</a></span>
                            <span class="phone-sp"><span class="ya-phone">+7(906) 709-79-77</span></span>
                        </div>
                        <div class="prikh_header__right">
                            <div class="prikh_btns">
                                <a class="signup" href="https://lafrance-accessories.ru/login">Войти</a>
                                <span> | </span>
                                <a class="signup" href="/create-account">Зарегистрироваться</a>
                            </div>
                            <a class="exformCallback callback-a btn btn-primary" data-toggle="modal" data-target="#callback">Обратный звонок</a>
                            <!--<a class="callback-a btn btn-primary" data-toggle="modal" data-target="#callback">Обратный звонок</a>-->
                        </div>
                    </div>
                </div>
                <div class="header-row-2 hidden-xs visible-sm visible-md visible-lg">
                    <ul class="links">
                        <li><a href="/about-us" class="active">О нас</a></li>
                        <li><a href="/dostavka" class="">Доставка и оплата</a></li>
                        <li><a href="/uslovija-sotrudnichestva" class="">Условия сотрудничества</a></li>
                        <li><a href="/garantiy" class="">Гарантии </a></li>
                        <li><a href="/pricelist" class="">Прайс-лист</a></li>
                        <li><a href="/kontakty" class="">Контакты</a></li>
                        <!-- <li><a href="#" class="prc">Прайслист</a></li> -->
                    </ul>
                </div>
                <div class="header-row-3">
                    <div class="col-xs-12 col-sm-8 nopads">
                        <div id="search">
                            <div class="inner">
                                <button type="button" class="" id="button-search"><i class="fa fa-search"></i></button>
                                <input type="text" name="search" value="" placeholder="Поиск" id="search-field"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="cart">
                            <a class="cart-link dropdown" href="/cart">
                                <span class="cart-title">Корзина:</span>
                                <span id="cart-total">0 товаров на сумму 0р.</span>
                                <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <p class="text-center">Ваша корзина пуста!</p>
                                    </li>
                                </ul>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<? function PrintMenu($menu){ ?>
    <?="pre"; var_dump($menu); die;?>
        <? foreach ($menu as $key => $value) { ?>
           <li><a href="<?=Url::to(['', 'id' => $value['id']]);?>"><?=$value['title']?></a></li>
           <? if ($menu['children']) { ?>
               
           <? } ?>
        <? } ?>
   
<? } ?>