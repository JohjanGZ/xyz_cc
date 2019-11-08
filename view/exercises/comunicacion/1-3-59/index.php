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
                                        <h4>Camila</h4>
                                    </div>
                                    <div class="silaba pieza" alt="p2">
                                        <h4>come</h4>
                                    </div>
                                    <div class="silaba pieza" alt="p3">
                                        <h4>queso</h4>
                                    </div>
                                    <div class="silaba pieza" alt="p4">
                                        <h4>con</h4>
                                    </div>
                                    <div class="silaba pieza" alt="p5">
                                        <h4>cancha</h4>
                                    </div>
                                </div>
                                <div class="caja-palabra">
                                    <div id="1" class="vocal caramelo"></div>
                                    <div id="2" class="vocal"></div>
                                    <div id="3" class="vocal"></div>
                                    <div id="4" class="vocal"></div>
                                    <div id="5" class="vocal caramelo"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <div class="contenido-formar">
                                <div class="contenedor-silabas Ejemplo2">
                                    <div class="silaba pieza" alt="p6">
                                        <h4>Enrique</h4>
                                    </div>
                                    <div class="silaba pieza" alt="p7">
                                        <h4>y</h4>
                                    </div>
                                    <div class="silaba pieza" alt="p6">
                                        <h4>Carlos</h4>
                                    </div>
                                    <div class="silaba pieza" alt="p9">
                                        <h4>compran</h4>
                                    </div>
                                    <div class="silaba pieza" alt="p10">
                                        <h4>carne,</h4>
                                    </div>
                                    <div class="silaba pieza" alt="p11">
                                        <h4>quinua</h4>
                                    </div>
                                    <div class="silaba pieza" alt="p7">
                                        <h4>y</h4>
                                    </div>
                                    <div class="silaba pieza" alt="p13">
                                        <h4>coco</h4>
                                    </div>
                                </div>
                                <div class="caja-palabra">
                                    <div id="6" class="vocal caramelo"></div>
                                    <div id="7" class="vocal"></div>
                                    <div id="6" class="vocal caramelo"></div>
                                    <div id="9" class="vocal caramelo"></div>
                                    <div id="10" class="vocal"></div>
                                    <div id="11" class="vocal caramelo"></div>
                                    <div id="7" class="vocal"></div>
                                    <div id="13" class="vocal"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <div class="contenido-formar">
                                <div class="contenedor-silabas Ejemplo3">
                                    <div class="silaba pieza" alt="p14">
                                        <h4>Cornelio</h4>
                                    </div>
                                    <div class="silaba pieza" alt="p15">
                                        <h4>caminó</h4>
                                    </div>
                                    <div class="silaba pieza" alt="p16">
                                        <h4>tres</h4>
                                    </div>
                                    <div class="silaba pieza" alt="p17">
                                        <h4>cuadras</h4>
                                    </div>
                                    <div class="silaba pieza" alt="p18">
                                        <h4>a</h4>
                                    </div>
                                    <div class="silaba pieza" alt="p19">
                                        <h4>la</h4>
                                    </div>
                                    <div class="silaba pieza" alt="p20">
                                        <h4>redonda</h4>
                                    </div>
                                </div>
                                <div class="caja-palabra">
                                    <div id="14" class="vocal caramelo"></div>
                                    <div id="15" class="vocal caramelo"></div>
                                    <div id="16" class="vocal"></div>
                                    <div id="17" class="vocal caramelo"></div>
                                    <div id="18" class="vocal"></div>
                                    <div id="19" class="vocal"></div>
                                    <div id="20" class="vocal caramelo"></div>
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


<script src="../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_1_3_59() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (p1 == 1 && p2 == 1 && p3 == 1 && p4 == 1 && p5 == 1 && p6 == 1 && p7 == 1 && p9 == 1 && p10 == 1 && p11 == 1
            && p13 == 1 && p14 == 1 && p15 == 1 && p16 == 1 && p17 == 1 && p18 == 1 && p19 == 1 && p20 == 1) {
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