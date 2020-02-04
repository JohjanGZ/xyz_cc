<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">
.st0 {
    fill: none;
    stroke: #B51212;
    stroke-miterlimit: 10;
}

.st1 {
    fill: none;
    stroke: #070799;
    stroke-miterlimit: 10;
}

.st2 {
    fill: none;
}

.st3 {
    font-family: 'ArialMT';
}

.st4 {
    font-size: 26px;
}

svg{
    width: 500px;
    max-height: 60vh;
    margin: auto;
    z-index: 1;
    
}
.rex{
    
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
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 301.9 294.9"
                        style="enable-background:new 0 0 301.9 294.9;" xml:space="preserve">
                        <polygon class="st0" points="115,10.4 17,81.4 54,194.4 174,194.4 210,83.4 " />
                        <circle class="st1" cx="205.6" cy="192.3" r="84.2" />
                        <rect x="259" y="97.4" class="st2" width="35" height="38" />
                        <text transform="matrix(1 0 0 1 259 115.893)" class="st3 st4">B</text>
                        <rect x="48.6" y="23.4" class="st2" width="35" height="38" />
                        <text transform="matrix(1 0 0 1 48.5561 41.893)" class="st3 st4">A</text>
                        <path class="st2 rex" d="M202,108.2l-28,86.2h-52.6C121.4,194.4,116.9,117.9,202,108.2z" />
                    </svg>

                    <p>
                    A ∩ B
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
function result_tipo_5_0_8() {
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