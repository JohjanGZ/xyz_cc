<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">
.st0 {
    font-family: 'ArialMT';
}

.st1 {
    font-size: 22.3859px;
}

.st2 {
    fill: #F9B800;
}

.st3 {
    fill: #002FF4;
}

.st4 {
    fill: #F70000;
}

.st5 {
    fill: none;
    stroke: #F9B800;
    stroke-width: 2;
    stroke-miterlimit: 10;
}

.st6 {
    fill: none;
    stroke: #0C00F7;
    stroke-width: 2;
    stroke-miterlimit: 10;
}

.st7 {
    fill: none;
}

svg {
    width: 500px;
    max-height: 60vh;
    margin: auto;
    z-index: 1;

}

.circulo {

    position: absolute;
    fill: transparent;
    z-index: 2;
}
</style>
<?=$titulo?>

<body>

    <div class="container">
        <div class="row">

            <div class="contenedor-ejercicios">

                <div class="contenedor">


                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 458.4 218.4"
                        style="enable-background:new 0 0 458.4 218.4;" xml:space="preserve">

                        <text transform="matrix(1 0 0 1 54.795 32.3036)" class="st0 st1">A</text>
                        <text transform="matrix(1 0 0 1 221.2751 25.8036)" class="st0 st1">B</text>
                        <text transform="matrix(1 0 0 1 391.275 56.8036)" class="st0 st1">C</text>
                        <text transform="matrix(1 0 0 1 214.295 96.3999)" class="st0 st1">7</text>
                        <text transform="matrix(1 0 0 1 137.295 123.8829)" class="st0 st1">13</text>
                        <text transform="matrix(1 0 0 1 363.295 96.3997)" class="st0 st1">1</text>
                        <text transform="matrix(1 0 0 1 77.7949 182.2334)" class="st0 st1">17</text>
                        <text transform="matrix(1 0 0 1 50.6284 133.2334)" class="st0 st1">9</text>
                        <text transform="matrix(1 0 0 1 75.7948 81.7336)" class="st0 st1">5</text>
                        <text transform="matrix(1 0 0 1 304.6284 128.3833)" class="st0 st1">11</text>
                        <text transform="matrix(1 0 0 1 215.295 173.9328)" class="st0 st1">15</text>
                        <text transform="matrix(1 0 0 1 385.1284 164.0666)" class="st0 st1">3</text>
                        <circle class="st2" cx="45.5" cy="128.4" r="2.7" />
                        <circle class="st3" cx="206.3" cy="169.1" r="2.7" />
                        <circle class="st3" cx="209" cy="91.1" r="2.7" />
                        <circle class="st2" cx="357.2" cy="91.1" r="2.7" />
                        <circle class="st2" cx="377.5" cy="159.1" r="2.7" />
                        <circle class="st2" cx="68.2" cy="75.6" r="2.7" />
                        <circle class="st2" cx="70.9" cy="176.6" r="2.7" />
                        <circle class="st4" cx="298.3" cy="123.9" r="2.7" />
                        <circle class="st4" cx="124.5" cy="121.2" r="2.7" />
                        <polygon class="st5" points="60.5,49.9 132.6,49.9 190,107.2 155,192.4 43.5,192.4 8.5,109.2 " />
                        <ellipse class="st6 circulo" cx="221.3" cy="116.8" rx="124.2" ry="79.1" />
                        <polygon class="st5" points="368.5,41.4 454,209.9 255,127.9 " />
                        <path class="st7"
                            d="M139.8,57.1l50.2,50.1c0,0-29.2,76.8-31.9,77.7C151.3,187.1,35.3,123.9,139.8,57.1z" />
                        <path class="st7" d="M325.7,74L255,127.9l72.5,29.9C327.5,157.8,366.5,121.5,325.7,74z" />
                    </svg>
                    <p>
                    (B – C) ∪ (B – A)
                    </p>

                </div>


            </div>
        </div>
    </div>


    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Respuesta correcta</h4>
            <center>
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
function result_tipo_5_0_10() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r >= 1) {
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        incorrecto();
        console.log(r);

        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>