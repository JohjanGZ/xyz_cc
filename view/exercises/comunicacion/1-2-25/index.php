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
                                <span>pia</span>
                                <div class="contenedor-faltante" id="noo">

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
                                <span>ena</span>
                                <div class="contenedor-faltante" id="noo2">

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
                                <span>lu</span>
                                <div class="contenedor-faltante" id="naa">

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
                                <div class="contenedor-faltante mr" id="naa2">

                                </div>
                                <span class="span-after">dar</span>
                            </div>
                            
                        </div>
                    </div>
                    <div class="contenedor-element">
                        <div class="imagen">
                            <img src="<?= $dir ?>/img/5.png" class="img-responsive" alt="">
                        </div>
                        <div class="contenedor-silaba">
                            <div class="silaba">
                                <span>la</span>
                                <div class="contenedor-faltante" id="naa3">

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
                                <span class="moli">moli</span>
                                <div class="contenedor-faltante" id="noo3">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="contenedor-silabas">
                <div class="silabas">
                    <h4 class="pieza" id="na">na</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" id="na2">na</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" id="na3">na</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" id="no">no</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" id="no2">no</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" id="no3">no</h4>
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
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript">

</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script>

// Validar

function result_tipo_1_2_25() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

console.log(r);


    if (r == 6) {
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