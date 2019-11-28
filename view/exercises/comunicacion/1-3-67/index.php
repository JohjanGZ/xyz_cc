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
            
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="a" alt="n">bonito</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="n">rápido</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="">niña</h4>
                </li>
                
            </ul>
            <ul class="contenedor-silabas">
            <li class="silabas">
                    <h4 class="a" alt="n">alto</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="">verde</h4>
                </li>
                <li class="silabas">
                    <h4 class="a" alt="">animales</h4>
                </li>
            </ul>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="a" alt="">cielo</h4>
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
    function result_tipo_1_3_67() {
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