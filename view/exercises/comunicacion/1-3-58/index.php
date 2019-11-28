<?php require('../../../tools/var/variables.php'); ?>
  <head>     
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
  </head>
  <style type="text/css">

  </style>
  <?=$titulo?>
  <body>
  <div class="container-two">
        <div class="row">
            <div class="campo" id="palabras">
                <ul id="listA">
                    <li>
                        <div class="box">
                            <div class="contenido-formar">
                                <div class="contenedor-silabas Ejemplo1">
                                    <div class="silaba pieza" alt="p1">
                                        <h4>Maica</h4>
                                    </div>
                                    <div class="silaba pieza" alt="p2">
                                        <h4>tiene</h4>
                                    </div>
                                    <div class="silaba pieza" alt="p3">
                                        <h4>una</h4>
                                    </div>
                                    <div class="silaba pieza" alt="p4">
                                        <h4>muñeca</h4>
                                    </div>
                                </div>
                                <div class="caja-palabra">
                                    <div id="1" class="vocal"></div>
                                    <div id="2" class="vocal"></div>
                                    <div id="3" class="vocal"></div>
                                    <div id="4" class="vocal caramelo"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <div class="contenido-formar">
                                <div class="contenedor-silabas Ejemplo2">
                                    <div class="silaba pieza" alt="p5">
                                        <h4>Aquel</h4>
                                    </div>
                                    <div class="silaba pieza" alt="p6">
                                        <h4>coco</h4>
                                    </div>
                                    <div class="silaba pieza" alt="p7">
                                        <h4>está</h4>
                                    </div>
                                    <div class="silaba pieza" alt="p8">
                                        <h4>seco</h4>
                                    </div>
                                </div>
                                <div class="caja-palabra">
                                    <div id="5" class="vocal"></div>
                                    <div id="6" class="vocal"></div>
                                    <div id="7" class="vocal"></div>
                                    <div id="8" class="vocal"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <div class="contenido-formar">
                                <div class="contenedor-silabas Ejemplo3">
                                    <div class="silaba pieza" alt="p9">
                                        <h4>las</h4>
                                    </div>
                                    <div class="silaba pieza" alt="p10">
                                        <h4>castañas</h4>
                                    </div>
                                    <div class="silaba pieza" alt="p11">
                                        <h4>se</h4>
                                    </div>
                                    <div class="silaba pieza" alt="p12">
                                        <h4>queman</h4>
                                    </div>
                                </div>
                                <div class="caja-palabra">
                                    <div id="9" class="vocal"></div>
                                    <div id="10" class="vocal caramelo"></div>
                                    <div id="11" class="vocal"></div>
                                    <div id="12" class="vocal caramelo"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            
        </div>
    </div>



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
    function result_tipo_1_3_58() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (p1 == 1 && p2 == 1 && p3 == 1 && p4 == 1 && p5 == 1 && p6 == 1 && p7 == 1 && p8 == 1 && p9 == 1 && p10 == 1 && p11 == 1 && p12 == 1) {
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