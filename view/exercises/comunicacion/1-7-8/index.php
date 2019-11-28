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
           
           <img src="<?= $dir ?>/img/1.jpg" alt="">

           <div class="contenedor-x">

                <div class="oracion">
                    <span>Hay</span>
                    <div class="palabra" alt="cuatro">

                    </div>
                    <span>pies izquierdos y</span>
                    <div class="palabra" alt="once">
                        
                    </div>
                    <span>pies derechos.</span>
                </div>

                <ul class="contenedor-silabas">
                    <li class="silabas">
                        <h4 class="pieza" alt="cuatro">4</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="once">11</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="">5</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="">8</h4>
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
    function result_tipo_1_7_8() {
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