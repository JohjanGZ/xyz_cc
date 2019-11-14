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
                        <div class="palabra" alt="so">
                        
                        </div>
                        <div class="palabra" alt="bre">
                        
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/2.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="som">

                        </div>
                        <div class="palabra" alt="bre">

                        </div>
                        <div class="palabra" alt="ro">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/3.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="li">
                        
                        </div>
                        <div class="palabra" alt="bro">
                        
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/4.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="bro">
                        
                        </div>
                        <div class="palabra" alt="cha">
                        
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/5.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="fa">
                        
                        </div>
                        <div class="palabra" alt="bri">
                        
                        </div>
                        <div class="palabra" alt="ca">
                        
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/6.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="ca">
                        
                        </div>
                        <div class="palabra" alt="bra">
                        
                        </div>
                    </div>
                </div>
                
                
           </div>
           <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="so">so</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="bre">bre</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="som">som</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="bre">bre</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ro">ro</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="li">li</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="bro">bro</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="bro">bro</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="cha">cha</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="fa">fa</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="bri">bri</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ca">ca</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ca">ca</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="bra">bra</h4>
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


<script src="../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_1_7_17() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 14) {
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