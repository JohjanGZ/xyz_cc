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
                <div class="contenedor-oracion">
                    <div class="oracion">
                        <h4>¿Por qué Lula pasó la noche bajo la estantería?</h4>
                    </div>
                    <div class="contenedor-respuesta" alt="uno">

                    </div>
                </div>
                <div class="contenedor-oracion">
                    <div class="oracion">
                        <h4>¿Por qué Lila estaba apenada?</h4>
                    </div>
                    <div class="contenedor-respuesta" alt="dos">
                        
                    </div>
                </div>
                <div class="contenedor-oracion">
                    <div class="oracion">
                        <h4>¿Qué hizo Lila en un momento de locura y amistad?</h4>
                    </div>
                    <div class="contenedor-respuesta" alt="tres">
                        
                    </div>
                </div>
           </div>

           <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="uno">Porque cayó al suelo de casualidad.</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="dos">Por la mala suerte de su amiga.</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="tres">Se dejó caer del estante</h4>
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


<script src="../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_1_3_15() {
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