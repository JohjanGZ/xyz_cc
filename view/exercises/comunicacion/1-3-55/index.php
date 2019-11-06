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
                       <span class="span-before">Un</span>
                       <img src="<?= $dir ?>/img/1.png" alt="">
                       <span class="span-after"> de vela.</span>
                   </div>
                   <div class="contenedor-palabras">
                       <span class="span-before">Un</span>
                       <div class="contenedor-faltante" alt="barco">
                           
                       </div>
                       <span class="span-after"> de vela.</span>
                   </div>
            </div>
            <div class="contenedor-ejemplo contenedor-oraciones">
                   <div class="contenedor-oracion">
                       <span class="span-before">El</span>
                       <img src="<?= $dir ?>/img/2.png" alt="">
                       <span class="span-after"> de aire.</span>
                   </div>
                   <div class="contenedor-palabras">
                       <span class="span-before">El</span>
                       <div class="contenedor-faltante" alt="ventilador">

                       </div>
                       <span class="span-after"> de aire.</span>

                   </div>
            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="">carro</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="">casa</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="barco">barco</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ventilador">ventilador</h4>
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


<script src="../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_1_3_55() {
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