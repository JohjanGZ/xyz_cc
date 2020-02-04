<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">
.st0 {
    fill: none;
    stroke: #F9B800;
    stroke-width: 2;
    stroke-miterlimit: 10;
}

.st1 {
    font-family: 'MyriadPro-Regular';
}

.st2 {
    font-size: 22.3859px;
}

.st3 {
    fill: #F7009F;
}

.st4 {
    fill: none;
    stroke: #F7009F;
    stroke-width: 2;
    stroke-miterlimit: 10;
}

.st5 {
    fill: #F9B800;
}

.st6 {
    fill: #F70000;
}

svg {
    width: 500px;
    max-height: 60vh;
    margin: auto;
    z-index: 1;

}

.rectangulo,
.triangulo {

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
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 448.4 220.4"
                        style="enable-background:new 0 0 448.4 220.4;" xml:space="preserve">

                        <ellipse class="st0" cx="260.5" cy="105.4" rx="178.5" ry="75" />
                        <polygon class="st0 rectangulo" alt="" points="135,26.4 30,90.8 10,208.4 177,208.4 " />
                        <text transform="matrix(1 0 0 1 51.0615 57.5036)" class="st1 st2">E</text>
                        <text transform="matrix(1 0 0 1 373.7282 32.4332)" class="st1 st2">F</text>
                        <text transform="matrix(1 0 0 1 199.0615 77.0999)" class="st1 st2">40</text>
                        <text transform="matrix(1 0 0 1 107.0615 102.4332)" class="st1 st2">13</text>
                        <text transform="matrix(1 0 0 1 51.0615 144.9332)" class="st1 st2">15</text>
                        <text transform="matrix(1 0 0 1 45.7393 196.9333)" class="st1 st2">36</text>
                        <text transform="matrix(1 0 0 1 124.3949 196.9334)" class="st1 st2">18</text>
                        <text transform="matrix(1 0 0 1 280.3952 103.9336)" class="st1 st2">7</text>
                        <text transform="matrix(1 0 0 1 280.3949 144.9335)" class="st1 st2">10</text>
                        <text transform="matrix(1 0 0 1 199.0615 142.7666)" class="st1 st2">20</text>
                        <text transform="matrix(1 0 0 1 124.3949 138.7666)" class="st1 st2">27</text>
                        <text transform="matrix(1 0 0 1 311.7282 65.0999)" class="st3 st1 st2">D</text>
                        <polygon class="st4 triangulo" alt="" points="286.3,51.4 228.3,161.4 345,161.4 " />
                        <circle class="st5" cx="38.8" cy="190.6" r="2.7" />
                        <circle class="st3" cx="274.3" cy="99.9" r="2.7" />
                        <circle class="st3" cx="274.3" cy="140.1" r="2.7" />
                        <circle class="st5" cx="192.4" cy="134.8" r="2.7" />
                        <circle class="st5" cx="192.4" cy="69.4" r="2.7" />
                        <circle class="st5" cx="45.7" cy="138.8" r="2.7" />
                        <circle class="st5" cx="117.6" cy="190.6" r="2.7" />
                        <circle class="st6" cx="117.6" cy="132.1" r="2.7" />
                        <circle class="st6" cx="103.2" cy="98.6" r="2.7" />
                    </svg>

                    <p>

                    </p>
                    <p class="centro">

                    E ∪ D = {

                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">7; 10; 40; 20</option>
                                <option value="x">7; 10; 13; 15; 18; 27; 36; 40; 20</option>
                                <option value="n">7; 10; 13; 15; 18; 27; 36</option>
                                <option value="x">40; 20</option>
                            </select>
                        </span>
                        }

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
function result_tipo_5_0_9() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    $('.seleccion').each(function() {
        if ($(this).attr('alt') == $(this).val()) {
            r++;
        }
    });
    if (r == 3) {
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