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
                        <div class="adivinanza" alt="n">
                          <img src="<?= $dir ?>/img/2.png">
                        </div>
                        <div class="adivinanza">
                          <img src="<?= $dir ?>/img/3.png">
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/4.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="adivinanza">
                          <img src="<?= $dir ?>/img/5.png">
                        </div>
                        <div class="adivinanza" alt="n">
                          <img src="<?= $dir ?>/img/6.png">
                        </div>
                    </div>
                </div>
                <div class="ejercicio ejercicio-x">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/7.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="adivinanza" alt="n">
                          <img src="<?= $dir ?>/img/8.png">
                        </div>
                        <div class="adivinanza">
                          <img src="<?= $dir ?>/img/9.png">
                        </div>
                    </div>
                </div>
           </div>
           
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
    function result_tipo_2_1_13() {
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