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
                            <div id="pa" class="vocal">

                            </div>
                        </div>

                    </li>
                    <li>
                        <div class="box" alt="">
                            <img src="<?= $dir ?>/img/2.png" class="responsive-img">
                        </div>
                        <div class="caja-palabra">

                            <div id="te" class="vocal">

                            </div>
                            <div id="le" class="vocal">

                            </div>
                            <div id="vi" class="vocal">

                            </div>
                            <div id="sor" class="vocal">

                            </div>

                        </div>

                    </li>
                    <li>
                        <div class="box" alt="n">
                            <img src="<?= $dir ?>/img/3.png" class="responsive-img">
                        </div>
                        <div class="caja-palabra">
                            <div id="ti" class="vocal">

                            </div>
                            <div id="zas" class="vocal">

                            </div>
                        </div>

                    </li>
                    <li>
                        <div class="box" alt="n">
                            <img src="<?= $dir ?>/img/4.png" class="responsive-img">
                        </div>
                        <div class="caja-palabra">
                            <div id="te2" class="vocal">

                            </div>
                            <div id="ne" class="vocal">

                            </div>
                            <div id="dor" class="vocal">

                            </div>
                        </div>

                    </li>
                    <li>
                        <div class="box" alt="n">
                            <img src="<?= $dir ?>/img/5.png" class="responsive-img">
                        </div>
                        <div class="caja-palabra">

                            <div id="ti2" class="vocal">

                            </div>
                            <div id="na" class="vocal">

                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box" alt="n">
                            <img src="<?= $dir ?>/img/6.png" class="responsive-img">
                        </div>
                        <div class="caja-palabra">

                            <div id="ta2" class="vocal">

                            </div>
                            <div id="za" class="vocal">

                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="contenedor-silabas">
                <div class="silaba pieza" id="taa">
                    <h4>ta</h4>
                </div>
                <div class="silaba pieza" id="taa2">
                    <h4>ta</h4>
                </div>
                <div class="silaba pieza" id="tee">
                    <h4>te</h4>
                </div>
                <div class="silaba pieza" id="tee2">
                    <h4>te</h4>
                </div>
                <div class="silaba pieza" id="tii">
                    <h4>ti</h4>
                </div>
                <div class="silaba pieza" id="tii2">
                    <h4>ti</h4>
                </div>
                <div class="silaba pieza" id="paa">
                    <h4>pa</h4>
                </div>
                <div class="silaba pieza" id="lee">
                    <h4>le</h4>
                </div>
                <div class="silaba pieza" id="vii">
                    <h4>vi</h4>
                </div>
                <div class="silaba pieza" id="sorr">
                    <h4>sor</h4>
                </div>
                <div class="silaba pieza" id="zass">
                    <h4>zas</h4>
                </div>
                <div class="silaba pieza" id="nee">
                    <h4>ne</h4>
                </div> 
                <div class="silaba pieza" id="dorr">
                    <h4>dor</h4>
                </div>
                <div class="silaba pieza" id="naa">
                    <h4>na</h4>
                </div>
                <div class="silaba pieza" id="zaa">
                    <h4>za</h4>
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


<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_1_2_12() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 15) {
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