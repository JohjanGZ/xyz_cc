<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>
    <div class="container-two">
        <div class="contenedor-silabas">
            <ul class="opciones">
                <li id="1" alt="32" class="pieza pur">
                    <span>32</span>
                </li>
                <li id="2" alt="63" class="pieza pur">
                    <span>63</span>
                </li>
                <li id="3" alt="17" class="pieza pur">
                    <span>17</span>
                </li>
                <li id="4" alt="58" class="pieza pur">
                    <span>58</span>
                </li>
                <li id="5" alt="28" class="pieza pur">
                    <span>28</span>
                </li>
            </ul>
        </div>
        <div class="grid-container">
            <div class="grid-item">
                <div class="flex-box">
                    <div class="caja bpur" alt="63"></div>
                    <div class="caja bpur" alt="58"></div>
                    <div class="caja bpur" alt="32"></div>
                    <div class="caja bpur" alt="28"></div>
                    <div class="caja bpur" alt="17"></div>
                </div>
            </div>
        </div>

        <div class="contenedor-silabas">
            <ul class="opciones">
                <li id="1" alt="72" class="pieza gr">
                    <span>72</span>
                </li>
                <li id="2" alt="32" class="pieza gr">
                    <span>32</span>
                </li>
                <li id="3" alt="21" class="pieza gr">
                    <span>21</span>
                </li>
                <li id="4" alt="96" class="pieza gr">
                    <span>96</span>
                </li>
                <li id="5" alt="65" class="pieza gr">
                    <span>65</span>
                </li>
            </ul>
        </div>
        <div class="grid-container">
            <div class="grid-item">
                <div class="flex-box">
                    <div class="caja bgr" alt="96"></div>
                    <div class="caja bgr" alt="72"></div>
                    <div class="caja bgr" alt="65"></div>
                    <div class="caja bgr" alt="32"></div>
                    <div class="caja bgr" alt="21"></div>
                </div>
            </div>
        </div>

        <div class="contenedor-silabas">
            <ul class="opciones">
                <li id="1" alt="17" class="pieza or">
                    <span>17</span>
                </li>
                <li id="2" alt="28" class="pieza or">
                    <span>28</span>
                </li>
                <li id="3" alt="42" class="pieza or">
                    <span>42</span>
                </li>
                <li id="4" alt="13" class="pieza or">
                    <span>13</span>
                </li>
                <li id="5" alt="56" class="pieza or">
                    <span>56</span>
                </li>
            </ul>
        </div>
        <div class="grid-container">
            <div class="grid-item">
                <div class="flex-box">
                    <div class="caja bor" alt="56"></div>
                    <div class="caja bor" alt="42"></div>
                    <div class="caja bor" alt="28"></div>
                    <div class="caja bor" alt="17"></div>
                    <div class="caja bor" alt="13"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <center>
                <h4>Respuesta correcta</h4>
                <img class="materialboxed" width="80%" src="<?= $dir ?>/img/respuesta.png">
            </center>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
        </div>
    </div>
</body>


<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?><script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_4_17() {
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