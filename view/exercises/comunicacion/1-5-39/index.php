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
           
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="p">rábanos</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="s">vestido</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="s">ciudad</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="p">dedos</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="p">relojes</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="s">tijera</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="p">amigos</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="s">aceite</h4>
                </li>
            </ul>

           <div class="contenedor-contenedores">
           
                <div class="contenedor-x" alt="s">
                    <span>singular</span>
                </div>
                <div class="contenedor-x" alt="p">
                    <span>plural</span>

                </div>
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
    function result_tipo_1_5_39() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 8) {
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