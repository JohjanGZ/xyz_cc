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
                        <span>c</span>
                        <div class="palabra" alt="d">

                        </div>
                        <span>e</span>
                        <div class="palabra" alt="f">

                        </div>
                        <span>g</span>
                    </div>
                </div>
                <div class="ejercicio">
                   
                    <div class="contenedor-respuesta">
                        <span>l</span>
                        <div class="palabra" alt="m">

                        </div>
                        <span>n</span>
                        <div class="palabra" alt="ñ">

                        </div>
                        <span>o</span>
                    </div>
                </div>
                <div class="ejercicio">
                   
                    <div class="contenedor-respuesta">
                        <span>a</span>
                        <div class="palabra" alt="b">

                        </div>
                        <span>c</span>
                        <div class="palabra" alt="d">

                        </div>
                        <span>e</span>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        
                        <div class="palabra" alt="e">

                        </div>
                        <span>f</span>
                        <span>g</span>
                        <div class="palabra" alt="h">

                        </div>
                        <div class="palabra" alt="i">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="q">

                        </div>
                        <span>r</span>
                        <span>s</span>

                        <div class="palabra" alt="t">

                        </div>
                        <span>u</span>
                    </div>
                </div>
                <div class="ejercicio">
                   
                    <div class="contenedor-respuesta">
                        <span>d</span>
                        <div class="palabra" alt="e">

                        </div>
                        <span>f</span>
                        <div class="palabra" alt="g">

                        </div>
                        <span>h</span>
                    </div>
                </div>
                
           </div>
           <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="d">d</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="f">f</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="b">b</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="d">d</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="q">q</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="t">t</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="m">m</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ñ">ñ</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="e">e</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="h">h</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="i">i</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="e">e</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="g">g</h4>
                </li>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_2_1_9() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 13) {
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