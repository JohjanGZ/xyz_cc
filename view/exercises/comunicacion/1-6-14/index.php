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
                    <div class="box">
                        <div class="contenedor-silabas">
                            <div class="silaba pieza" alt="1">
                                <h4>come</h4>
                            </div>
                            <div class="silaba pieza" alt="2">
                                <h4>Nacho</h4>
                            </div>
                            <div class="silaba pieza" alt="3">
                                <h4>una</h4>
                            </div>
                            <div class="silaba pieza" alt="4">
                                <h4>chuleta</h4>
                            </div>
                        </div>
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="palabra" id="1"></div>
                        <div class="palabra" id="2"></div>
                        <div class="palabra" id="3"></div>
                        <div class="palabra" id="4"></div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="box">
                        <div class="contenedor-silabas2">
                            <div class="silaba pieza" alt="5">
                                <h4>se</h4>
                            </div>
                            <div class="silaba pieza" alt="6">
                                <h4>ducha</h4>
                            </div>
                            <div class="silaba pieza" alt="7">
                                <h4>Pinocho</h4>
                            </div>
                        </div>
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="palabra" id="5"></div>
                        <div class="palabra" id="6"></div>
                        <div class="palabra" id="7"></div>
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
    function result_tipo_1_6_14() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 7) {
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