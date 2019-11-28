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
            <div class="col l12">
                <div class="principal">
                    <img src="<?= $dir?>/img/1.png" alt="">
                    <img src="<?= $dir?>/img/2.png" alt="">
                    <img src="<?= $dir?>/img/3.png" alt="">
                    <img src="<?= $dir?>/img/4.png" alt="">
                    <img src="<?= $dir?>/img/5.png" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="campo" id="palabras">
                
                <ul id="listA">
                    <li>
                        <div class="box">
                            <div class="contenedor-silabas">
                                <div class="silaba pieza" alt="1">
                                    <h4>no</h4>
                                </div>
                                <div class="silaba pieza" alt="2">
                                    <h4>pi</h4>
                                </div>
                                <div class="silaba pieza" alt="3">
                                    <h4>cho</h4>
                                </div>
                            </div>
                        </div>
                        <div class="flecha">
                            <span class="arrow arrow-right"></span>
                        </div>
                        <div class="caja-palabra">
                            <div id="1" class="vocal"></div>
                            <div id="2" class="vocal"></div>
                            <div id="3" class="vocal"></div>
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <div class="contenedor-silabas">
                                <div class="silaba pieza" alt="4">
                                    <h4>ta</h4>
                                </div>
                                <div class="silaba pieza" alt="5">
                                    <h4>le</h4>
                                </div>
                                <div class="silaba pieza" alt="6">
                                    <h4>chu</h4>
                                </div>
                            </div>
                        </div>
                        <div class="flecha">
                            <span class="arrow arrow-right"></span>
                        </div>
                        <div class="caja-palabra">
                            <div id="4" class="vocal"></div>
                            <div id="5" class="vocal"></div>
                            <div id="6" class="vocal"></div>
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <div class="contenedor-silabas">
                                <div class="silaba pieza" alt="7">
                                    <h4>che</h4>
                                </div>
                                <div class="silaba pieza" alt="8">
                                    <h4>le</h4>
                                </div>
                            </div>
                        </div>
                        <div class="flecha">
                            <span class="arrow arrow-right"></span>
                        </div>
                        <div class="caja-palabra">
                            <div id="7" class="vocal"></div>
                            <div id="8" class="vocal"></div>
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <div class="contenedor-silabas">
                                <div class="silaba pieza" alt="9">
                                    <h4>mo</h4>
                                </div>
                                <div class="silaba pieza" alt="10">
                                    <h4>la</h4>
                                </div>
                                <div class="silaba pieza" alt="11">
                                    <h4>chi</h4>
                                </div>
                            </div>
                        </div>
                        <div class="flecha">
                            <span class="arrow arrow-right"></span>
                        </div>
                        <div class="caja-palabra">
                            <div id="9" class="vocal"></div>
                            <div id="10" class="vocal"></div>
                            <div id="11" class="vocal"></div>
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <div class="contenedor-silabas">
                                <div class="silaba pieza" alt="12">
                                    <h4>pa</h4>
                                </div>
                                <div class="silaba pieza" alt="13">
                                    <h4>cha</h4>
                                </div>
                            </div>
                        </div>
                        <div class="flecha">
                            <span class="arrow arrow-right"></span>
                        </div>
                        <div class="caja-palabra">
                            <div id="12" class="vocal"></div>
                            <div id="13" class="vocal"></div>
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
    function result_tipo_1_6_12() {
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