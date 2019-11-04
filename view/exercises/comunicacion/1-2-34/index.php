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
                                <div class="contenedor-faltante" id="enn3" alt="paneton">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contenedor-element">
                        <div class="imagen">
                            <img src="<?= $dir ?>/img/2.png" class="img-responsive" alt="">
                        </div>
                        <div class="contenedor-silaba">
                            <div class="silaba">
                                <div class="contenedor-faltante" id="ann2" alt="empanadilla">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contenedor-element">
                        <div class="imagen">
                            <img src="<?= $dir ?>/img/3.png" class="img-responsive" alt="">
                        </div>
                        <div class="contenedor-silaba">
                            <div class="silaba">
                                <div class="contenedor-faltante" id="ann3" alt="panecillo">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contenedor-element">
                        <div class="imagen">
                            <img src="<?= $dir ?>/img/4.png" class="img-responsive" alt="">
                        </div>
                        <div class="contenedor-silaba">
                            <div class="silaba">
                                <div class="contenedor-faltante mr" id="ann4" alt="panaderia">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contenedor-element">
                        <div class="imagen">
                            <img src="<?= $dir ?>/img/5.png" class="img-responsive" alt="">
                        </div>
                        <div class="contenedor-silaba">
                            <div class="silaba">
                                <div class="contenedor-faltante" id="enn" alt="empanadas">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contenedor-element">
                        <div class="imagen">
                            <img src="<?= $dir ?>/img/6.png" class="img-responsive" alt="">
                        </div>
                        <div class="contenedor-silaba">
                            <div class="silaba">
                                <div class="contenedor-faltante" id="enn2" alt="panadero">

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="contenedor-element">
                        <div class="imagen">
                            <img src="<?= $dir ?>/img/7.png" class="img-responsive" alt="">
                        </div>
                        <div class="contenedor-silaba">
                            <div class="silaba">
                                <div class="contenedor-faltante" id="inn" alt="panera">

                                </div>

                            </div>
                        </div>
                    </div>
                   
                </div>

            </div>

        </div>

        <div class="contenedor-silabas">
                <div class="silabas">
                    <h4 class="pieza" id="en3" alt="paneton">Panetón</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" id="an2" alt="empanadilla">Empanadilla</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" id="an3" alt="panecillo">Panecillo</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" id="an4" alt="panaderia">Panadería</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" id="en" alt="empanadas">Empanadas</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" id="en2" alt="panadero">Panadero</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" id="in" alt="panera">Panera</h4>
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
<script type="text/javascript">

</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script>

// Validar

function result_tipo_1_2_34() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

        console.log(r);


    if (r == 7) {
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