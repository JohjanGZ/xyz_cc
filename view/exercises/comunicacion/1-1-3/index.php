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
        <div class="grid-layout">
            <div class="grid-item">
                <div class="box-img-b">
                    <div class="box-img">
                        <img src="<?= $dir ?>/img/1.png" class="responsive-img">
                    </div>
                </div>
                <div class="borde">
                    <div class="cT izquierda" id="uno"></div>
                    <span class="te">loma</span>
                </div>
            </div>
            <div class="grid-item">
                <div class="box-img-b">
                    <div class="box-img">
                        <img src="<?= $dir ?>/img/2.png" class="responsive-img">
                    </div>
                </div>
                <div class="borde">
                    <div class="cT izquierda" id="dos"></div>
                    <span class="te">lota</span>
                </div>
            </div>
            <div class="grid-item">
                <div class="box-img-b">
                    <div class="box-img">
                        <img src="<?= $dir ?>/img/3.png" class="responsive-img">
                    </div>
                </div>
                <div class="borde">
                    <div class="cT izquierda" id="tres"></div>
                    <span class="te">mo</span>
                </div>
            </div>
            <div class="grid-item">
                <div class="box-img-b">
                    <div class="box-img">
                        <img src="<?= $dir ?>/img/4.png" class="responsive-img">
                    </div>
                </div>
                <div class="borde">
                    <div class="cT izquierda" id="cuatro"></div>
                    <span class="te">pa</span>
                </div>
            </div>
            <div class="grid-item">
                <div class="box-img-b">
                    <div class="box-img">
                        <img src="<?= $dir ?>/img/5.png" class="responsive-img">
                    </div>
                </div>
                <div class="borde">
                    <div class="cT izquierda" id="cinco"></div>
                    <span class="te">ma</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div id="contenedorPiezas">
            <ul id="listB">
                <li>
                    <div class="box pieza" id="pa">pa</div>
                </li>
                <li>
                    <div class="box pieza" id="pe">pe</div>
                </li>
                <li>
                    <div class="box pieza" id="pi">pi</div>
                </li>
                <li>
                    <div class="box pieza" id="po">po</div>
                </li>
                <li>
                    <div class="box pieza" id="pu">pu</div>
                </li>
            </ul>
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
    function result_tipo_1_1_3() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (Npa == 1 && Npe == 1 && Npi == 1 && Npo == 1 && Npu == 1) {
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