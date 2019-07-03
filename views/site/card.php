<?


use app\models\ShopcartOrders;
use app\models\Lang;

$this->title = Lang::t('Shopping cart');


?>


<form action="checkout" method="post">
    <section class="ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cart-item-table commun-table">
                        <div class="table-responsive">
                            <table class="table-style2">
                                <tbody>
                                <tr>
                                    <th class="left-text" colspan="2"><?= Lang::t('Product Name') ?></th>
                                    <th class="width-150 center"><?= Lang::t('Price') ?></th>
                                    <th class="width-10"><?= Lang::t('Delete') ?></th>

                                </tr>
                                <?php if ($items->goods) :?>
                                <?php foreach ($items->goods as $item) : ?>
                                <tr>
                                    <td class="width-150 center"><a href="#" src="<?= $item->item->photo ?>"></a></td>
                                    <td><a href="#">&nbsp;<h3><?= $item->item->title ?></h3></a></td>
                                    <td class="center"><h3><?= $item->item->price ?></h3> UZS</td>

                                    <td class="width-10 center"><a class="remove-item remove" href="#" data-id="<?=$item->good_id?>" data-value="<?= $item->price ?>" title="<?= Lang::t('Remove Item From Cart') ?>">
                                            <i class="fa fa-times-circle"></i></a></td>
                                </tr>
                                <?php endforeach; ?>
                            <?php endif;?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="3"><h4><?= Lang::t('Total Cost') ?></h4></td>
                                    <td class="width-90 summa"><h4><b><?= $items->cost ?></b></h4></td>
                                </tr>
                                </tfoot>
                            </table>
                            <div class="block shop-bottom-btns"><a class="btn btn-large left" href="<?//= $this->to('catalog/books') ?>"><?= Lang::t('Continue Shopping') ?></a>
                                <?php if (Yii::$app->user->isGuest){ ?>
                                <a class="btn btn-large main-bg right" href="<?//= $this->to('shopcart/check-out') ?>"><?= Lang::t('Proceed to Checkout') ?></a></div>
                                <?php } else { ?>
                                <a class="btn btn-large main-bg right" href="<?//= $this->to('users/login') ?>"><?= Lang::t('Proceed to Checkout') ?></a></div>
                                <?php } ?>
                        </div>
                    </div>
                </div>
            </div>


    </section>
</form>
<p></p>
<?php

$this->registerJs('
    $(".remove").click(function(e){
        e.preventDefault();
        var data = $(this).attr("data-id");
        // var value = $(this).attr("data-value");
        // var summa = $(".summa b").html();
        // value = Number(value);
        // summa = Number(summa);
        console.log(data);
        $.get("/site/delete",{good_id: data},function(response){
            if(response.result=="success") {console.log("success");
            window.location.reload();}
            else console.log(response.result);
            //$(".summa b").html(summa-value);
        });
        
    });
');

?>
