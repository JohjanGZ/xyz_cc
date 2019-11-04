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

            <div class="contenedor-silabas">
                <div class="silabas">
                    <h4 class="pieza" alt="a"><span>a.</span>Ana juega con su mascota.</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" alt="b"><span>b.</span> Linda está desayunando.</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" alt="c"><span>c.</span> Renzo riega el jardín</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" alt="d"><span>d.</span>Subí a la montaña.</h4>
                </div>
                <div class="silabas">
                    <h4 class="pieza" alt="e"><span>e.</span>Amanda está lavando.</h4>
                </div>
            </div>

            <div class="row" id="recibidor">
                <div class="contenedor-elementos">
                    <div class="contenedor-element">
                        <div class="imagen">
                            <img src="<?= $dir ?>/img/1.png" class="img-responsive" alt="">
                        </div>
                        <div class="contenedor-silaba">
                            <div class="contenedor-faltante" id="uno"></div>
                        </div>
                    </div>
                    <div class="contenedor-element">
                        <div class="imagen">
                            <img src="<?= $dir ?>/img/2.png" class="img-responsive" alt="">
                        </div>
                        <div class="contenedor-silaba">
                            <div class="contenedor-faltante" id="dos"></div>
                        </div>
                    </div>
                    <div class="contenedor-element">
                        <div class="imagen">
                            <img src="<?= $dir ?>/img/3.png" class="img-responsive" alt="">
                        </div>
                        <div class="contenedor-silaba">
                            <div class="contenedor-faltante" id="tres"></div>
                        </div>
                    </div>
                    <div class="contenedor-element">
                        <div class="imagen">
                            <img src="<?= $dir ?>/img/4.png" class="img-responsive" alt="">
                        </div>
                        <div class="contenedor-silaba">
                            <div class="contenedor-faltante" id="cuatro"></div>
                        </div>
                    </div>
                    <div class="contenedor-element">
                        <div class="imagen">
                            <img src="<?= $dir ?>/img/5.png" class="img-responsive" alt="">
                        </div>
                        <div class="contenedor-silaba">
                            <div class="contenedor-faltante" id="cinco"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


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
  
<script src="../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript">

</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script>

// Validar

function result_tipo_1_2_30() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 5) {
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