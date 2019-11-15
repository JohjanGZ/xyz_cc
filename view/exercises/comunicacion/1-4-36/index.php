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
                    
                    <div class="contenedor-respuesta">
                        <span class="span-before">Pies es a calcetín como mano es a</span>
                        <div class="palabra" alt="guante">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span class="span-before">Pies es a planta como mano es a</span>
                        <div class="palabra" alt="palma">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                   
                    <div class="contenedor-respuesta">
                        <span class="span-before">Mano es a muñeca como pie es a</span>
                        <div class="palabra" alt="tobillo">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                   
                    <div class="contenedor-respuesta">
                        <span class="span-before">Enero es a verano como julio es a</span>
                        <div class="palabra" alt="invierno">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                   
                    <div class="contenedor-respuesta">
                        <span class="span-before">Tractor es a agricultor como carta es a</span>
                        <div class="palabra" alt="cartero">

                        </div>
                    </div>
                </div>
           </div>
           <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="guante">guante</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="palma">palma</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="tobillo">tobillo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="invierno">invierno</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="cartero">cartero</h4>
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
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_1_4_36() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 5) {
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