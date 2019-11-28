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
                        <div class="box">
                            <img src="<?= $dir ?>/img/1.png" class="responsive-img">
                        </div>
                        <div class="caja-palabra">
                            <span class="span-before">La</span>
                            <div id="1" class="vocal"></div>
                            <span class="span-after">tella</span>
                        </div>

                    </li>
                    <li>
                        <div class="box">
                            <img src="<?= $dir ?>/img/2.png" class="responsive-img">
                        </div>
                        <div class="caja-palabra">
                            <span class="span-before">La vi</span>
                            <div id="2" class="vocal"></div>
                            <span class="span-after">ra</span>
                        </div>

                    </li>
                    <li>
                        <div class="box">
                            <img src="<?= $dir ?>/img/3.png" class="responsive-img">
                        </div>
                        <div class="caja-palabra">
                            <span class="span-before">La nu</span>
                            <div id="3" class="vocal"></div>
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img src="<?= $dir ?>/img/4.png" class="responsive-img">
                        </div>
                        <div class="caja-palabra">
                            <span class="span-before">Los rá</span>
                            <div id="4" class="vocal"></div>
                            <span class="span-after">nos</span>
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img src="<?= $dir ?>/img/5.png" class="responsive-img">
                        </div>
                        <div class="caja-palabra">
                            <span class="span-before">El ti</span>
                            <div id="5" class="vocal"></div>
                            <span class="span-after">rón</span>
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img src="<?= $dir ?>/img/6.png" class="responsive-img">
                        </div>
                        <div class="caja-palabra">
                            <span class="span-before">El lo</span>
                            <div id="6" class="vocal"></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="contenedor-silabas">
                <div class="silaba pieza" alt="ba">
                    <h4>ba</h4>
                </div>
                <div class="silaba pieza" alt="bu">
                    <h4>bu</h4>
                </div>
                <div class="silaba pieza" alt="bo">
                    <h4>bo</h4>
                </div>
                <div class="silaba pieza" alt="bo">
                    <h4>bo</h4>
                </div>
                <div class="silaba pieza" alt="be">
                    <h4>be</h4>
                </div>
                <div class="silaba pieza" alt="bo">
                    <h4>bo</h4>
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


<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_1_3_20() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (ba == 1 && bu == 1 && bo == 3 && be == 1) {
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