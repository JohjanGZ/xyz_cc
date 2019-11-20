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
        <div class="row">
           
           <div class="contenedor-ejercicios">
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/1.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="feliz">

                        </div>
                        <div class="palabra" alt="triste">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/2.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="alto">

                        </div>
                        <div class="palabra" alt="bajo">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/3.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="sucia">

                        </div>
                        <div class="palabra" alt="limpia">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/4.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="frio">

                        </div>
                        <div class="palabra" alt="caliente">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/5.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="joven">
                        
                        </div>
                        <div class="palabra" alt="anciano">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/6.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="arriba">
                        
                        </div>
                        <div class="palabra" alt="abajo">

                        </div>
                    </div>
                </div>
           </div>
           <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="alto">alto</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="bajo">bajo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="sucia">sucia</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="limpia">limpia</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="frio">frío</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="caliente">caliente</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="joven">joven</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="anciano">anciano</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="arriba">arriba</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="abajo">abajo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="feliz">feliz</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="triste">triste</h4>
                </li>
            </ul>
        </div>
    </div>


    <!-- Respuesta -->
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
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_2_3_1() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 12) {
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