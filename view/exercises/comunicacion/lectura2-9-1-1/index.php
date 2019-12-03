<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <ul id="tabs-swipe-demo" class="tabs">
                    <li class="tab col s4 activo"><a class="active" href="#test-swipe-1">Parte 1</a></li>
                    <li class="tab col s4"><a href="#test-swipe-2">Parte 2</a></li>
                    <li class="tab col s4"><a href="#test-swipe-3">Parte 3</a></li>
                </ul>
            </div>
            <div id="test-swipe-1" class="col s12 lectura-img">
                <h5 style="font-weight: bold; margin: 5px;">El oso perezoso</h5>
                <img src="<?= $dir ?>/img/1.png" class="materialboxed" alt="">
            </div>
            <div id="test-swipe-2" class="col s12 lectura-img">
                <img src="<?= $dir ?>/img/2.png" class="materialboxed" alt="">
            </div>
            <div id="test-swipe-3" class="col s12 lectura-img">
                <img src="<?= $dir ?>/img/3.png" class="materialboxed" alt="">
            </div>
        </div>
    </div>
</body>

<script>
  $(document).ready(function(){
    $('.tabs').tabs();
  });

  $(".tab").click(function(){
    $(this).addClass("activo");
  });

</script>

<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript">
$(".btn-intentos").hide();
$(".btnEnviar").hide();
$(".btnCorregir").hide();
$(".btnSiguiente").removeClass("disabled");
</script>