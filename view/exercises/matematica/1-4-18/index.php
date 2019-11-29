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
                <li id="1" alt="21" class="pieza pur">
                    <span>21</span>
                </li>
                <li id="2" alt="26" class="pieza pur">
                    <span>26</span>
                </li>
                <li id="3" alt="14" class="pieza pur">
                    <span>14</span>
                </li>
                <li id="4" alt="47" class="pieza pur">
                    <span>47</span>
                </li>
                <li id="5" alt="17" class="pieza pur">
                    <span>17</span>
                </li>
            </ul>
        </div>
        <div class="grid-container">
            <div class="grid-item">
                <div class="flex-box">
                    <div class="caja bpur" alt="14"></div>
                    <div class="caja bpur" alt="17"></div>
                    <div class="caja bpur" alt="21"></div>
                    <div class="caja bpur" alt="26"></div>
                    <div class="caja bpur" alt="47"></div>
                </div>
            </div>
        </div>

        <div class="contenedor-silabas">
            <ul class="opciones">
                <li id="1" alt="52" class="pieza gr">
                    <span>52</span>
                </li>
                <li id="2" alt="35" class="pieza gr">
                    <span>35</span>
                </li>
                <li id="3" alt="85" class="pieza gr">
                    <span>85</span>
                </li>
                <li id="4" alt="48" class="pieza gr">
                    <span>48</span>
                </li>
                <li id="5" alt="61" class="pieza gr">
                    <span>61</span>
                </li>
            </ul>
        </div>
        <div class="grid-container">
            <div class="grid-item">
                <div class="flex-box">
                    <div class="caja bgr" alt="35"></div>
                    <div class="caja bgr" alt="48"></div>
                    <div class="caja bgr" alt="52"></div>
                    <div class="caja bgr" alt="61"></div>
                    <div class="caja bgr" alt="85"></div>
                </div>
            </div>
        </div>

        <div class="contenedor-silabas">
            <ul class="opciones">
                <li id="1" alt="76" class="pieza or">
                    <span>76</span>
                </li>
                <li id="2" alt="90" class="pieza or">
                    <span>90</span>
                </li>
                <li id="3" alt="54" class="pieza or">
                    <span>54</span>
                </li>
                <li id="4" alt="57" class="pieza or">
                    <span>57</span>
                </li>
                <li id="5" alt="63" class="pieza or">
                    <span>63</span>
                </li>
            </ul>
        </div>
        <div class="grid-container">
            <div class="grid-item">
                <div class="flex-box">
                    <div class="caja bor" alt="54"></div>
                    <div class="caja bor" alt="57"></div>
                    <div class="caja bor" alt="63"></div>
                    <div class="caja bor" alt="76"></div>
                    <div class="caja bor" alt="90"></div>
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
function result_tipo_1_4_18() {
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