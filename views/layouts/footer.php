<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
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
