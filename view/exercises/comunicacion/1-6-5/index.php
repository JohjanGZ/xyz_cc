<?php require('../../../tools/var/variables.php'); ?>
  <head>     
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
  </head>
  <style type="text/css">

  </style>
  <?=$titulo?>
  <body>
    <div class="caja-principal">
        <div class="center">
            <div id="contenedorPiezas">
                <ul id="listA">
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" id="v1" src="<?= $dir ?>/img/1.png" alt="pieza1">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" id="v2" src="<?= $dir ?>/img/2.png" alt="pieza2">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" id="v3" src="<?= $dir ?>/img/3.png" alt="pieza3">
                        </div>
                    </li>

                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" id="v4" src="<?= $dir ?>/img/4.png" alt="pieza1">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" id="v5" src="<?= $dir ?>/img/5.png" alt="pieza2">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" id="v6" src="<?= $dir ?>/img/6.png" alt="pieza3">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="row recibidor" id="recibidor">
                <div class="caja-flex">
                    <div class="contenedorPieza" id="1">
                        <label class="title">ña</label>
                    </div>
                    <div class="contenedorPieza" id="2">
                        <label class="title">ñon</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4 class="center">Respuesta correcta</h4>
            <center>
              <img class="materialboxed"  width="80%" src="<?= $dir ?>/img/respuesta.jpg">
            </center>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
        </div>
    </div>
  </body>
  
<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">

    // Validar

    function result_tipo_1_6_5() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (n1 == 4 && n2 == 2) {
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