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
                        <div class="caja-palabra">
                            <span class="span-before">ca</span>
                            <div id="1" class="vocal"></div>
                            <span class="span-after">e</span>
                            <div id="2" class="vocal"></div>
                            <span class="span-after">a</span>
                        </div>
                    </li>
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">to</span>
                            <div id="3" class="vocal"></div>
                            <span class="span-after">e</span>
                            <div id="4" class="vocal"></div>
                            <span class="span-after">o</span>
                        </div>
                    </li>
                    <li>
                        <div class="caja-palabra">
                            <div id="5" class="vocal"></div>
                            <span class="span-after">obot</span>
                        </div>
                    </li>
        
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">ma</span>
                            <div id="6" class="vocal"></div>
                            <span class="span-after">ido</span>
                        </div>
                    </li>
                    <li>
                        <div class="caja-palabra">
                            <div id="7" class="vocal"></div>
                            <span class="span-after">opa</span>
                        </div>
                    </li>
                    <li>
                        <div class="caja-palabra">
                            <div id="8" class="vocal"></div>
                            <span class="span-after">oto</span>
                        </div>
                    </li>

                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">bu</span>
                            <div id="9" class="vocal"></div>
                            <span class="span-after">o</span>
                        </div>
                    </li>
                    <li>
                        <div class="caja-palabra">
                            <div id="10" class="vocal"></div>
                            <span class="span-after">ío</span>
                        </div>
                    </li>
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">ca</span>
                            <div id="11" class="vocal"></div>
                            <span class="span-after">acol</span>
                        </div>
                    </li>

                    <li>
                        <div class="caja-palabra">
                            <div id="12" class="vocal"></div>
                            <span class="span-after">amón</span>
                        </div>
                    </li>
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">ma</span>
                            <div id="13" class="vocal"></div>
                            <span class="span-after">ine</span>
                            <div id="14" class="vocal"></div>
                            <span class="span-after">a</span>
                        </div>
                    </li>
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">soco</span>
                            <div id="15" class="vocal"></div>
                            <span class="span-after">o</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="contenedor-silabas">
                <div class="silaba pieza" alt="rr">
                    <h4>rr</h4>
                </div>
                <div class="silaba pieza" alt="r">
                    <h4>r</h4>
                </div>
                <div class="silaba pieza" alt="r">
                    <h4>r</h4>
                </div>
                <div class="silaba pieza" alt="r">
                    <h4>r</h4>
                </div>
                <div class="silaba pieza" alt="r">
                    <h4>r</h4>
                </div>
                <div class="silaba pieza" alt="r">
                    <h4>r</h4>
                </div>
                <div class="silaba pieza" alt="r">
                    <h4>r</h4>
                </div>
                <div class="silaba pieza" alt="r">
                    <h4>r</h4>
                </div>
                <div class="silaba pieza" alt="rr">
                    <h4>rr</h4>
                </div>
                <div class="silaba pieza" alt="r">
                    <h4>r</h4>
                </div>
                <div class="silaba pieza" alt="r">
                    <h4>r</h4>
                </div>
                <div class="silaba pieza" alt="rm">
                    <h4>R</h4>
                </div>
                <div class="silaba pieza" alt="r">
                    <h4>r</h4>
                </div>
                <div class="silaba pieza" alt="r">
                    <h4>r</h4>
                </div>
                <div class="silaba pieza" alt="rr">
                    <h4>rr</h4>
                </div>
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
    function result_tipo_1_3_42() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (rr == 3 && r == 11 && rm == 1) {
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