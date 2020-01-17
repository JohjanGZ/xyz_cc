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
                        <img src="<?= $dir ?>/img/2.png">
                    </div>
                    <div class="contenedor-oraciones">
                        <div class="contenedor-respuesta">
                            
                            <div class="palabra" alt="me">
                            
                            </div>
                            <div class="palabra" alt="siento">
                            
                            </div>
                            <div class="palabra" alt="en">
                            
                            </div>
                            <div class="palabra" alt="el">
                            
                            </div>
                            <div class="palabra" alt="sillon">
                            
                            </div>
                        </div>
                        <ul class="contenedor-silabas">
                            <li class="silabas">
                                <h4 class="pieza" alt="sillon">sillón</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="me">me</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="el">el</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="siento">siento</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="en">en</h4>
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
                            <div class="palabra" alt="luisa">
                            
                            </div>
                            <div class="palabra" alt="se">
                            
                            </div>
                            <div class="palabra" alt="seca">
                            
                            </div>
                            <div class="palabra" alt="el">
                            
                            </div>
                            <div class="palabra" alt="cabello">
                            
                            </div>
                           
                        </div>
                        <ul class="contenedor-silabas cs2">
                            <li class="silabas">
                                <h4 class="pieza" alt="luisa">Luisa</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="se">se</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="el">el</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="cabello">cabello</h4>
                            </li>
                            <li class="silabas">
                                <h4 class="pieza" alt="seca">seca</h4>
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
    function result_tipo_1_5_9() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 10) {
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