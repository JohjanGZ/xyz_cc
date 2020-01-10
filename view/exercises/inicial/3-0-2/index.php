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
        <div class="row">
            <div class="col l5">
                <center>
                    <img src="<?= $dir ?>/img/1.png" class="img materialboxed">
                </center>
            </div>
            <div class="col l7">
                <div class="grid-container">
                    <div class="grid-item">
                        <div class="flex-box">
                            <div class="s">1)</div>
                            <span class="span-after">¿Cuántos burros observas?</span>
                            <div class="contenedor" alt="1"></div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="flex-box">
                            <div class="s">2)</div>
                        <span class="span-after">¿Cuántas llamas observas?</span>
                            <div class="contenedor" alt="4"></div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="flex-box">
                            <div class="s">3)</div>
                        <span class="span-after">¿Cuántas ovejas observas?</span>
                            <div class="contenedor" alt="7"></div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="flex-box">
                            <div class="s">4)</div>
                        <span class="span-after">¿Cuántos cóndores observas?</span>
                            <div class="contenedor" alt="3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contenedor-silabas">
            <ul class="opciones">
                <li alt="5" class="pieza">
                    <span>5</span>
                </li>
                <li alt="4" class="pieza">
                    <span>4</span>
                </li>
                <li alt="2" class="pieza">
                    <span>2</span>
                </li>
                <li alt="3" class="pieza">
                    <span>3</span>
                </li>
                <li alt="1" class="pieza">
                    <span>1</span>
                </li>
                <li alt="5" class="pieza">
                    <span>5</span>
                </li>
                <li alt="6" class="pieza">
                    <span>6</span>
                </li>
                <li alt="7" class="pieza">
                    <span>7</span>
                </li>
                <li alt="8" class="pieza">
                    <span>8</span>
                </li>
                <li alt="9" class="pieza">
                    <span>9</span>
                </li>
                <li alt="10" class="pieza">
                    <span>10</span>
                </li>
            </ul>
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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_3_0_2() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 4) {
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