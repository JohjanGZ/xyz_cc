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
            <div class="contenedor-ejemplo">
                   <div class="contenedor-oracion">
                       <span class="span-before">Mi</span>
                       <img src="<?= $dir ?>/img/1.png" alt="">
                       <span class="span-after">toma el tomate</span>
                   </div>
                   <div class="contenedor-palabras-e">
                       <div>
                            <h4>tío</h4>
                       </div>
                       <div>
                            <h4>Daniel</h4>
                       </div>
                   </div>
            </div>
            <div class="contenedor-ejemplo contenedor-oraciones">
                   <div class="contenedor-oracion">
                       <span class="span-before">Mi</span>
                       <img src="<?= $dir ?>/img/2.png" alt="">
                       <span class="span-after">tenía una sandalia.</span>
                   </div>
                   <div class="contenedor-palabras">
                       <div class="contenedor-faltante" alt="abuela">
                           
                       </div>
                       <div class="contenedor-faltante" alt="rosa">

                       </div>
                   </div>
            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="abuela">abuela</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="rosa">Rosa</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="">primo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="">Juan</h4>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_1_2_42() {
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

    }
</script>