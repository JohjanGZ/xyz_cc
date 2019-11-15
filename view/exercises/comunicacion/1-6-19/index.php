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
                        <img src="<?= $dir ?>/img/1.png">
                        <span>Ese reloj da la hora</span>
                        <div class="palabra" alt="exacta"></div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="contenedor-respuesta">
                        <img src="<?= $dir ?>/img/2.png">
                        <span>la bici vieja esta toda</span>
                        <div class="palabra" alt="oxidada"></div>
                    </div>
                </div>
           </div>
           <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="oxidada">oxidada</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="exquisito">exquisito</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="exacta">exacta</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="galaxia">galaxia</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="fax">fax</h4>
                </li>
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
    function result_tipo_1_6_19() {
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