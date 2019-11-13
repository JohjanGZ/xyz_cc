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
            <div class="campo" id="palabras">
                <ul id="listA">
                    <li>
                        <div class="box" alt="n">
                            <img src="<?= $dir ?>/img/1.png" class="responsive-img">
                        </div>
                        <div class="caja-palabra">
                            <div id="ta" class="vocal">

                            </div>
                            <span class="span-after">za</span>
                        </div>

                    </li>
                    <li>
                        <div class="box" alt="">
                            <img src="<?= $dir ?>/img/2.png" class="responsive-img">
                        </div>
                        <div class="caja-palabra">

                            <div id="te" class="vocal">

                            </div>
                            <span class="span-after">éfono</span>
                        </div>

                    </li>
                    <li>
                        <div class="box" alt="n">
                            <img src="<?= $dir ?>/img/3.png" class="responsive-img">
                        </div>
                        <div class="caja-palabra">
                            <div id="ti" class="vocal">

                            </div>
                            <span class="span-after">jera</span>
                        </div>

                    </li>
                    <li>
                        <div class="box" alt="n">
                            <img src="<?= $dir ?>/img/4.png" class="responsive-img">
                        </div>
                        <div class="caja-palabra">
                            <span class="span-before">Pi</span>
                            <div id="to" class="vocal">

                            </div>
                        </div>

                    </li>
                    <li>
                        <div class="box" alt="n">
                            <img src="<?= $dir ?>/img/5.png" class="responsive-img">
                        </div>
                        <div class="caja-palabra">

                            <div id="to2" class="vocal">

                            </div>
                            <span class="span-after">alla</span>
                        </div>
                    </li>
                    <li>
                        <div class="box" alt="n">
                            <img src="<?= $dir ?>/img/6.png" class="responsive-img">
                        </div>
                        <div class="caja-palabra">
                            <span class="span-before">Car</span>

                            <div id="tu" class="vocal">

                            </div>
                            <span class="span-after">chera</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="contenedor-silabas">
                <div class="silaba pieza" id="taa">
                    <h4>ta</h4>
                </div>
                <div class="silaba pieza" id="tee">
                    <h4>te</h4>
                </div>
                <div class="silaba pieza" id="tii">
                    <h4>ti</h4>
                </div>
                <div class="silaba pieza" id="too">
                    <h4>to</h4>
                </div>
                <div class="silaba pieza" id="too2">
                    <h4>to</h4>
                </div>
                <div class="silaba pieza" id="tuu">
                    <h4>tu</h4>
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
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_1_2_11() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (ta == 1 && te == 1 && ti == 1 && to == 1 && to2 == 1) {
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