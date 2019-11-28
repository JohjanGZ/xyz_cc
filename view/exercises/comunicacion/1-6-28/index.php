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
        <div class="row">
            <div class="campo" id="palabras">
                <ul id="Muestra">
                    <li>
                        <div class="box">
                            <img src="<?= $dir?>/img/1.png" class="aguila">
                        </div>
                        <div class="box">
                            <img src="<?= $dir?>/img/2.png" class="aguilita">
                        </div>
                        <div class="box">
                            <img src="<?= $dir?>/img/3.png" class="aguilita">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col l12">
                <div class="contenedor-ejercicios">
                    <div class="ejercicio">
                        <div class="contenedor-respuesta">
                            <span class="span-before">A guillermo le da</span>
                            <div class="palabra" alt="verguenza"></div>
                            <span class="span-after">bailar.</span>
                        </div>
                    </div>
                    <div class="ejercicio">
                        <div class="contenedor-respuesta">
                            <span class="span-before">La</span>
                            <div class="palabra" alt="hormiga"></div>
                            <span class="span-after">es un insecto.</span>
                        </div>
                    </div>
                    <div class="ejercicio">
                        <div class="contenedor-respuesta">
                            <span class="span-before">Me gustan los</span>
                            <div class="palabra" alt="guisante"></div>
                            <span class="span-after">con jamón.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="verguenza">verguenza</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="hormiga">hormiga</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="guisante">guisante</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="guayaba">guayaba</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="gusano">gusano</h4>
                </li>
            </ul>
        </div>
    </div>



    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Respuesta correcta</h4>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_1_6_28() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 3) {
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