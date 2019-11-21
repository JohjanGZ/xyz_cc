<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>
    <div class="container-two">
        <div class="row">
            <ul id="tabs-swipe-demo" class="tabs tabs-fixed-width tab-demo z-depth-1">
                <li class="tab col s3"><a href="#lectura1">Lectura 1</a></li>
                <li class="tab col s3"><a href="#lectura2">Lectura 2</a></li>
                <li class="tab col s3"><a href="#lectura3">Lectura 3</a></li>
                <li class="tab col s3"><a href="#lectura4">Lectura 4</a></li>
                <li class="tab col s3"><a href="#lectura5">Lectura 5</a></li>
                <li class="tab col s3"><a href="#lectura6">Lectura 6</a></li>
            </ul>
            <div id="lectura1" class="col s12">
                <div class="box-img">
                    <img src="<?= $dir ?>/img/1.png" class="responsive-img materialboxed">
                </div>
            </div>
            <div id="lectura2" class="col s12">
                <div class="box-img">
                    <img src="<?= $dir ?>/img/2.png" class="responsive-img materialboxed">
                </div>
            </div>
            <div id="lectura3" class="col s12">
                <div class="box-img">
                    <img src="<?= $dir ?>/img/3.png" class="responsive-img materialboxed">
                </div>
            </div>
            <div id="lectura4" class="col s12">
                <div class="box-img">
                    <img src="<?= $dir ?>/img/4.png" class="responsive-img materialboxed">
                </div>
            </div>
            <div id="lectura5" class="col s12">
                <div class="box-img">
                    <img src="<?= $dir ?>/img/5.png" class="responsive-img materialboxed">
                </div>
            </div>
            <div id="lectura6" class="col s12">
                <div class="box-img">
                    <img src="<?= $dir ?>/img/6.png" class="responsive-img materialboxed">
                </div>
            </div>
        </div>
    </div>
</body>


<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript">
$(function() {
    // elementos de la lista
    var tabs = $(".tab");
    // manejador de click sobre todos los elementos
    tabs.click(function() {
        // eliminamos active de todos los elementos
        tabs.removeClass("active");
        // activamos el elemento clicado.
        $(this).addClass("active");
        $(this).css({
            "background": "rgba(0, 149, 218, 0.2)"
        });
    });
});

$('.tabs').tabs();
$(".btn-intentos").hide();
$(".btnEnviar").hide();
$(".btnCorregir").hide();
$(".btnSiguiente").removeClass("disabled");
</script>