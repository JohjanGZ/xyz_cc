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
                        <div class="pieza box" id="v1">
                            <span>guiño</span>
                        </div>
                    </li>
                    <li>
                        <div class="pieza box" id="v2">
                            <span>lengûita</span>
                        </div>
                    </li>
                    <li>
                        <div class="pieza box" id="v3">
                            <span>higuera</span>
                        </div>
                    </li>
                    <li>
                        <div class="pieza box" id="v4">
                            <span>paragûero</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="row recibidor" id="recibidor">
                <div class="caja-flex">
                    <div class="contenedorPieza" id="1">
                        <label class="title">gue - gui</label>
                    </div>
                    <div class="contenedorPieza" id="2">
                        <label class="title">gûe - gûi</label>
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
  
<script src="../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">

    // Validar

    function result_tipo_1_6_27() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (n1 == 2 && n2 == 2) {
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