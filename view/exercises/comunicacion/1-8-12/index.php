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
                        <div class="palabra" alt="clase">
                        
                        </div>
                        
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/2.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="ancla">

                        </div>

                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/3.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="clavos">
                        
                        </div>
                        
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/4.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="bicicleta">
                        
                        </div>
                        
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/5.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="chancla">

                        </div>

                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/6.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="triciclo">
                        
                        </div>
                        
                    </div>
                </div>
                
                
           </div>
           <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="clase">clase</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ancla">ancla</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="clavos">clavos</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="bicicleta">bicicleta</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="chancla">chancla</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="triciclo">triciclo</h4>
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
    function result_tipo_1_8_12() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 6) {
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