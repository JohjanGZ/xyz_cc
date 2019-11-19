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
                    <div class="contenedor-oraciones">
                        <div class="contenedor-respuesta">
                            
                            <div class="palabra" alt="el">
                            
                            </div>
                            <div class="palabra" alt="niño">
                            
                            </div>
                            <div class="palabra" alt="lee">
                            
                            </div>
                            <div class="palabra" alt="su">
                            
                            </div>
                            <div class="palabra" alt="libro">
                            
                            </div>
                        </div>
                        <ul class="contenedor-silabas">
                            <li class="silabas">
                                <h4 class="pieza" alt="el">El</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="niño">niño</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="lee">lee</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="su">su</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="libro">libro.</h4>
                            </li>
                        </ul>
                    </div>
                    
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/2.png">
                    </div>
                    <div class="contenedor-oraciones">
                        <div class="contenedor-respuesta">
                            <div class="palabra" alt="ricardo">
                            
                            </div>
                            <div class="palabra" alt="nada">
                            
                            </div>
                            <div class="palabra" alt="en">
                            
                            </div>
                            <div class="palabra" alt="el">
                            
                            </div>
                            <div class="palabra" alt="mar">
                            
                            </div>
                           
                        </div>
                        <ul class="contenedor-silabas cs2">
                            <li class="silabas">
                                <h4 class="pieza" alt="ricardo">Ricardo</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="nada">nada</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="en">en</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="el">el</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="mar">mar.</h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/3.png">
                    </div>
                    <div class="contenedor-oraciones">
                        <div class="contenedor-respuesta">
                            <div class="palabra" alt="x">
                            
                            </div>
                            <div class="palabra" alt="y">
                            
                            </div>
                            <div class="palabra" alt="x">
                            
                            </div>
                            <div class="palabra" alt="juegan">
                            
                            </div>
                            <div class="palabra" alt="con">
                            
                            </div>
                            <div class="palabra" alt="la">
                            
                            </div>
                            <div class="palabra" alt="cometa">
                            
                            </div>
                        </div>
                        <ul class="contenedor-silabas cs3">
                            <li class="silabas">
                                <h4 class="pieza" alt="x">Luis</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="y">y</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="x">Arturo</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="juegan">juegan</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="con">con</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="la">la</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="cometa">cometa.</h4>
                            </li>
                        </ul>
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
    function result_tipo_2_1_16() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 17) {
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