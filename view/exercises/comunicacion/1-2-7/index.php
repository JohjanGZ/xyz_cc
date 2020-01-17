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
    <div class="row center">
    <div class="row" id="recibidor">
                <div class="contenedor-elementos">
                    <div class="contenedor-element">
                        <div class="imagen">
                            <img src="<?= $dir ?>/img/1.png" class="img-responsive" alt="">
                        </div>
                        <div class="contenedor-silaba">
                            <div class="silaba">
                                <span class="span-before">le</span>
                                <div class="contenedor-faltante" id="1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="contenedor-element">
                        <div class="imagen">
                            <img src="<?= $dir ?>/img/2.png" class="img-responsive" alt="">
                        </div>
                        <div class="contenedor-silaba">
                            <div class="silaba">
                                <span class="span-before">mo</span>
                                <div class="contenedor-faltante" id="2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="contenedor-element">
                        <div class="imagen">
                            <img src="<?= $dir ?>/img/3.png" class="img-responsive" alt="">
                        </div>
                        <div class="contenedor-silaba">
                            <div class="silaba">
                                <span class="span-before">do</span>
                                <div class="contenedor-faltante" id="3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="contenedor-element">
                        <div class="imagen">
                            <img src="<?= $dir ?>/img/4.png" class="img-responsive" alt="">
                        </div>
                        <div class="contenedor-silaba">
                            <div class="silaba">
                                <span class="span-before">ma</span>
                                <div class="contenedor-faltante mr" id="4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="contenedor-element">
                        <div class="imagen">
                            <img src="<?= $dir ?>/img/5.png" class="img-responsive" alt="">
                        </div>
                        <div class="contenedor-silaba">
                            <div class="silaba">
                                <span class="span-before">lu</span>
                                <div class="contenedor-faltante" id="5"></div>
                            </div>
                        </div>
                    </div>
                    <div class="contenedor-element">
                        <div class="imagen">
                            <img src="<?= $dir ?>/img/6.png" class="img-responsive" alt="">
                        </div>
                        <div class="contenedor-silaba">
                            <div class="silaba">
                                <span class="span-before">p</span>
                                <div class="contenedor-faltante" id="6"></div>
                            </div>
                        </div>
                    </div>
                    <div class="contenedor-element">
                        <div class="imagen">
                            <img src="<?= $dir ?>/img/7.png" class="img-responsive" alt="">
                        </div>
                        <div class="contenedor-silaba">
                            <div class="silaba">
                                <div class="contenedor-faltante" id="7"></div>
                                <span class="span-after">do</span>
                            </div>
                        </div>
                    </div>
                    <div class="contenedor-element">
                        <div class="imagen">
                            <img src="<?= $dir ?>/img/8.png" class="img-responsive" alt="">
                        </div>
                        <div class="contenedor-silaba">
                            <div class="silaba">
                                <span class="span-before">la</span>
                                <div class="contenedor-faltante" id="8"></div>
                            </div>
                        </div>
                    </div>
                    <div class="contenedor-element">
                        <div class="imagen">
                            <img src="<?= $dir ?>/img/9.png" class="img-responsive" alt="">
                        </div>
                        <div class="contenedor-silaba">
                            <div class="silaba">
                                <span class="span-before">pia</span>
                                <div class="contenedor-faltante" id="9"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="contenedor-silabas">
                <div class="silabas">
                    <h4 class="pieza" alt="on">ón</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" alt="no">no</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" alt="na">na</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" alt="no">no</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" alt="na">na</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" alt="an">an</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" alt="na">na</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" alt="no">no</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" alt="ni">ni</h4>
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
<script type="text/javascript">

</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script>

// Validar

function result_tipo_1_2_7() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

console.log(r);


    if (r == 9) {
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

};
</script>