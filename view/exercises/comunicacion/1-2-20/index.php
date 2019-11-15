<?php require('../../../tools/var/variables.php'); ?>
  <head>     
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
  </head>
  <style type="text/css">

  </style>
  <?=$titulo?>
  <body>
    
    <div class="container">
        <div class="box-img">
            <img src="<?= $dir ?>/img/1.jpg" class="responsive-img materialboxed">
        </div>
    </div>
  </body>


<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
  $(".btn-intentos").hide();
  $(".btnEnviar").hide();
  $(".btnCorregir").hide();
  $(".btnSiguiente").removeClass( "disabled" );
</script>