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
            <div class="contenedor-ejemplo contenedor-oraciones">
                   <div class="contenedor-oracion">
                       <span class="span-before">El</span>
                       <img src="<?= $dir ?>/img/1.png" alt="">
                       <span class="span-after"> seca el pelo.</span>
                   </div>
                   <div class="contenedor-palabras">
                       <span class="span-before">El</span>
                       <div class="contenedor-faltante" alt="secador">
                           
                       </div>
                       <span class="span-after"> seca el pelo</span>
                   </div>
            </div>
            <div class="contenedor-ejemplo contenedor-oraciones">
                   <div class="contenedor-oracion">
                       <span class="span-before">Ramón se pone la</span>
                       <img src="<?= $dir ?>/img/2.png" alt="">
                   </div>
                   <div class="contenedor-palabras">
                       <span class="span-before">Ramón se pone la</span>
                       <div class="contenedor-faltante" alt="corbata">

                       </div>
                   </div>
            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="">plancha</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="">camisa</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="secador">secador</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="corbata">corbata</h4>
                </li>
            </ul>
        </div>
 
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
    function result_tipo_1_3_54() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;
        console.log(r);
        if (r == 2) {
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