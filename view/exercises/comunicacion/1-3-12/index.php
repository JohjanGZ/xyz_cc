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
                            <span class="span-before">pe</span>
                            <div class="vocal"></div>
                            <span class="span-after">iodista</span>
                        </div>

                    </li>
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">guarde</span>
                            <div class="vocal"></div>
                            <span class="span-after">ía</span>
                        </div>

                    </li>
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">pi</span>
                            <div class="vocal"></div>
                            <span class="span-after">ata</span>
                        </div>
                    </li>
                    
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">neve</span>
                            <div class="vocal"></div>
                            <span class="span-after">a</span>
                        </div>

                    </li>
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">pe</span>
                            <div class="vocal"></div>
                            <span class="span-after">ejil</span>
                        </div>

                    </li>
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">acua</span>
                            <div class="vocal"></div>
                            <span class="span-after">io</span>
                        </div>
                    </li>

                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">Ca</span>
                            <div class="vocal"></div>
                            <span class="span-after">olina</span>
                        </div>

                    </li>
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">lavado</span>
                            <div class="vocal"></div>
                            <span class="span-after">a</span>
                        </div>

                    </li>
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">Ma</span>
                            <div class="vocal"></div>
                            <span class="span-after">io</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="contenedor-silabas">
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
                <div class="silaba pieza" alt="r">
                    <h4>r</h4>
                </div>
                <div class="silaba pieza" alt="r">
                    <h4>r</h4>
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
    function result_tipo_1_3_12() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 9) {
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