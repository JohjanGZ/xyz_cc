<?php require('../../../tools/var/variables.php'); ?>
  <head>     
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
  </head>
  <style type="text/css">

  </style>
  <?=$titulo?>
  <body>
    <div class="container-two">
        <div class="box-principal" style="background-image: url('<?= $dir ?>/img/principal.png'); width: 50%; height: 50%; background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div class="box-mallas">
                <div class="malla1">
                    <img class="responsive-img" id="uno" src="<?= $dir ?>/img/red.png">
                </div>
                <div class="malla2">
                    <img class="responsive-img" id="dos" src="<?= $dir ?>/img/red.png">
                </div>
            </div>
        </div>

        <div id="contenedorPiezas">
            <ul id="listA">
                <li>
                    <div class="box">
                        <img class="pieza responsive-img" src="<?= $dir ?>/img/1.png" alt="D">
                    </div>
                </li>
                <li>
                    <div class="box">
                        <img class="pieza responsive-img" src="<?= $dir ?>/img/2.png" alt="d">
                    </div>
                </li>
                <li>
                    <div class="box">
                        <img class="pieza responsive-img"  src="<?= $dir ?>/img/3.png" alt="d">
                    </div>
                </li>
                <li>
                    <div class="box">
                        <img class="pieza responsive-img"  src="<?= $dir ?>/img/4.png" alt="D">
                    </div>
                </li>
                <li>
                    <div class="box">
                        <img class="pieza responsive-img"  src="<?= $dir ?>/img/5.png" alt="d">
                    </div>
                </li>
                <li>
                    <div class="box">
                        <img class="pieza responsive-img"  src="<?= $dir ?>/img/6.png" alt="d">
                    </div>
                </li>
                <li>
                    <div class="box">
                        <img class="pieza responsive-img"  src="<?= $dir ?>/img/7.png" alt="D">
                    </div>
                </li>
                <li>
                    <div class="box">
                        <img class="pieza responsive-img"  src="<?= $dir ?>/img/8.png" alt="d">
                    </div>
                </li>
                <li>
                    <div class="box">
                        <img class="pieza responsive-img"  src="<?= $dir ?>/img/9.png" alt="">
                    </div>
                </li>
                <li>
                    <div class="box">
                        <img class="caballo pieza responsive-img"  src="<?= $dir ?>/img/10.png" alt="">
                    </div>
                </li>
            </ul>
        </div>

    </div>
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4 class="center">Respuesta correcta</h4>
            <center>
              <img class="materialboxed"  width="80%" src="<?= $dir ?>/img/respuesta.png">
            </center>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
        </div>
    </div>
  </body>
  
<script src="../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">

    // Validar

    function result_tipo_1_2_3() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;



    if (nU == 5 && nD == 3) {
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}

</script>