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
                <li id="1" alt="31" class="pieza gr">
                    <span>31</span>
                </li>
                <li id="2" alt="15" class="pieza gr">
                    <span>15</span>
                </li>
                <li id="3" alt="43" class="pieza gr">
                    <span>43</span>
                </li>
                <li id="4" alt="9" class="pieza gr">
                    <span>9</span>
                </li>
                <li id="5" alt="27" class="pieza gr">
                    <span>27</span>
                </li>
            </ul>
        </div>
        <div class="grid-container">
            <div class="grid-item">
                <div class="flex-box">
                    <div class="caja bgr" alt="43"></div>
                    <div class="caja bgr" alt="31"></div>
                    <div class="caja bgr" alt="27"></div>
                    <div class="caja bgr" alt="15"></div>
                    <div class="caja bgr" alt="9"></div>
                </div>
            </div>
        </div>

        <div class="contenedor-silabas">
            <ul class="opciones">
                <li id="1" alt="17" class="pieza or">
                    <span>17</span>
                </li>
                <li id="2" alt="38" class="pieza or">
                    <span>38</span>
                </li>
                <li id="3" alt="47" class="pieza or">
                    <span>47</span>
                </li>
                <li id="4" alt="8" class="pieza or">
                    <span>8</span>
                </li>
                <li id="5" alt="24" class="pieza or">
                    <span>24</span>
                </li>
            </ul>
        </div>
        <div class="grid-container">
            <div class="grid-item">
                <div class="flex-box">
                    <div class="caja bor" alt="47"></div>
                    <div class="caja bor" alt="38"></div>
                    <div class="caja bor" alt="24"></div>
                    <div class="caja bor" alt="17"></div>
                    <div class="caja bor" alt="8"></div>
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
function result_tipo_1_3_19() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 10) {
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