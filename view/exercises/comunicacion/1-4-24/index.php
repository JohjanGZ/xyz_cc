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
      
        <div class="row center">

            <div class="row" id="recibidor">
                <div class="contenedor-elementos">
                    <div class="contenedor-element">
                        <div class="imagen-nube">
                            <img src="<?= $dir ?>/img/1-1.png" class="img-responsive">
                        </div>
                        <div class="contenedor-silaba">
                            <div class="contenedor-faltante" id="1"></div>
                        </div>
                        <div class="imagen">
                            <img src="<?= $dir ?>/img/1.png" class="img-responsive">
                        </div>
                    </div>
                    <div class="contenedor-element">
                        <div class="imagen-nube">
                            <img src="<?= $dir ?>/img/2-2.png" class="img-responsive">
                        </div>
                        <div class="contenedor-silaba">
                            <div class="contenedor-faltante" id="2"></div>
                        </div>
                        <div class="imagen">
                            <img src="<?= $dir ?>/img/2.png" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
            <div class="contenedor-silabas">
                <div class="silabas">
                    <h4 class="pieza" alt="1">hebilla</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" alt="2">hielo</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" alt="3">humo</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" alt="4">hongo</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" alt="5">huellas</h4>
                </div>
            </div>
        </div>


    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Respuesta correcta</h4>
            <center>
              <img class="materialboxed"  width="80%" src="<?= $dir ?>/img/respuesta.png">
            </center>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
        </div>
    </div>
  </body>
  
<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript">

</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script>

// Validar

function result_tipo_1_4_24() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 2) {
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

};
</script>