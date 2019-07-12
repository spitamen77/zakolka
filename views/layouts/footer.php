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
<script>
window.replainSettings = { id: 'b1762da7-3971-4abb-9c06-47d880cbe836' };
(function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
})('https://widget.replain.cc/dist/client.js');
</script>