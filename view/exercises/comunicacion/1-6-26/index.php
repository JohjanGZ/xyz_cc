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
                        <div class="flecha">
                            <span class="arrow arrow-right"></span>
                        </div>
                        <div class="box">
                            <img src="<?= $dir?>/img/2.png" class="aguilita">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                           águila
                        </div>
                        <div class="flecha">
                            <span class="arrow arrow-left"></span>
                        </div>
                        <div class="box">
                           aguilita
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
                            <span class="span-before">lengua</span>
                            <div class="palabra" alt="lenguita"></div>
                        </div>
                    </div>
                    <div class="ejercicio">
                        <div class="contenedor-respuesta">
                            <span class="span-before">agua</span>
                            <div class="palabra" alt="aguita"></div>
                        </div>
                    </div>
                    <div class="ejercicio">
                        <div class="contenedor-respuesta">
                            <span class="span-before">piragua</span>
                            <div class="palabra" alt="piraguita"></div>
                        </div>
                    </div>
                    <div class="ejercicio">
                        <div class="contenedor-respuesta">
                            <span class="span-before">yegua</span>
                            <div class="palabra" alt="yeguita"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="lenguita">lengüita</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="lenguitita">lengüitita</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="aguita">agüita</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="aguitita">agüitita</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="piraguita">piragüita</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="piraguitita">piragüitita</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="yeguita">yegüita</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="yeguitita">yegüitita</h4>
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


<script src="../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_1_6_26() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 4) {
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