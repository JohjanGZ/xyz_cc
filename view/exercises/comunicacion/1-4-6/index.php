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
           
            <div class="contenedor-ejercicio">
                <div class="contenedor-oracion">
                    <span>Mi</span>
                    <div class="palabra" alt="mama">

                    </div>
                    <img src="<?= $dir ?>/img/1.png" alt="">
                    <span>tiene unas</span>
                    <div class="palabra" alt="blusas">

                    </div>
                    <img src="<?= $dir ?>/img/2.png" alt="">                
                </div>
                <div class="contenedor-oracion">
                    <span>Los</span>
                    <div class="palabra" alt="bebes">

                    </div>
                    <img src="<?= $dir ?>/img/3.png" alt="">
                    <img src="<?= $dir ?>/img/3.png" alt="">
                    <img src="<?= $dir ?>/img/3.png" alt="">
                    <span>están dormidos.</span>               
                </div>
                <div class="contenedor-oracion">
                    <span>El</span>
                    <div class="palabra" alt="barco">

                    </div>
                    <img src="<?= $dir ?>/img/4.png" alt="">
                    <span>pasa por el mar.</span>             
                </div>
                <div class="contenedor-oracion">
                    <span>Las</span>
                    <div class="palabra" alt="balanzas">

                    </div>
                    <img src="<?= $dir ?>/img/5.png" alt="">
                    <span>están en mi</span>
                    <div class="palabra" alt="casa">

                    </div>
                    <img src="<?= $dir ?>/img/6.png" alt="">                
                </div>
                <div class="contenedor-oracion">
                    <span>El</span>
                    <div class="palabra" alt="avion">

                    </div>
                    <img src="<?= $dir ?>/img/7.png" alt="">
                    <span>vuela alto.</span>             
                </div>
            </div>

            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="mama">mamá</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="blusas">blusas</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="bebes">bebés</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="barco">barco</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="balanzas">balanzas</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="casa">casa</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="avion">avión</h4>
                </li>
            </ul>
        </div>
    </div>


    <!-- Respuesta -->
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
    function result_tipo_1_4_6() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 7) {
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