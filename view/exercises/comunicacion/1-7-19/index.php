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
                            
                            <div class="palabra" alt="los">
                            
                            </div>
                            <div class="palabra" alt="bloques">
                            
                            </div>
                            <div class="palabra" alt="son">
                            
                            </div>
                            <div class="palabra" alt="encajables">
                            
                            </div>
                        </div>
                        <ul class="contenedor-silabas">
                            <li class="silabas">
                                <h4 class="pieza" alt="los">los</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="encajables">encajables</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="son">son</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="bloques">bloques</h4>
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
                            <div class="palabra" alt="blanca">
                            
                            </div>
                            <div class="palabra" alt="habla">
                            
                            </div>
                            <div class="palabra" alt="mucho">
                            
                            </div>
                            <div class="palabra" alt="por">
                            
                            </div>
                            <div class="palabra" alt="telefono">
                            
                            </div>
                           
                        </div>
                        <ul class="contenedor-silabas cs2">
                            <li class="silabas">
                                <h4 class="pieza" alt="blanca">Blanca</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="telefono">teléfono</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="mucho">mucho</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="por">por</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="habla">habla</h4>
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
                            <div class="palabra" alt="los">
                            
                            </div>
                            <div class="palabra" alt="panes">
                            
                            </div>
                            <div class="palabra" alt="blancos">
                            
                            </div>
                            <div class="palabra" alt="son">
                            
                            </div>
                            <div class="palabra" alt="rebanados">
                            
                            </div>
                           
                        </div>
                        <ul class="contenedor-silabas cs3">
                            <li class="silabas">
                                <h4 class="pieza" alt="rebanados">rebanados</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="panes">panes</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="los">los</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="blancos">blancos</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="son">son</h4>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_1_7_19() {
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