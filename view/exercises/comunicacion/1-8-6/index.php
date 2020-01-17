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
                        <div class="palabra" alt="can">
                        
                        </div>
                        <div class="palabra" alt="tim">
                        
                        </div>
                        <div class="palabra" alt="plo">
                        
                        </div>
                        <div class="palabra" alt="ra">
                        
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/2.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="plan">

                        </div>
                        <div class="palabra" alt="ta">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/3.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="plu">
                        
                        </div>
                        <div class="palabra" alt="ma">
                        
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/4.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="pla">
                        
                        </div>
                        <div class="palabra" alt="ta">
                        
                        </div>
                        <div class="palabra" alt="no">
                        
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/5.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="a">
                        
                        </div>
                        <div class="palabra" alt="plau">
                        
                        </div>
                        <div class="palabra" alt="dir">
                        
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/6.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="di">
                        
                        </div>
                        <div class="palabra" alt="plo">
                        
                        </div>
                        <div class="palabra" alt="ma">
                        
                        </div>
                    </div>
                </div>
                
                
           </div>
           <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="can">can</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="tim">tim</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="plo">plo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ra">ra</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="plan">plan</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ta">ta</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="plu">plu</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ma">ma</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="pla">pla</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ta">ta</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="no">no</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="a">a</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="plau">plau</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="dir">dir</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="di">di</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="plo">plo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ma">ma</h4>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_1_8_6() {
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