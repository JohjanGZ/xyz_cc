<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>

    <div class="container">
        <div class="row">

            <div class="contenedor-oraciones">


                <div class="oracion">

                    <h4>
                        Moto
                    </h4>

                    <div class="contenedor-check">
                        <div class="respuesta">
                            <span>Motorizado</span>
                        </div>
                        <div class="respuesta">
                            <span>Motocicleta</span>
                        </div>
                        <div class="respuesta" alt="n">
                            <span>Bicicleta</span>
                        </div>
                        <div class="respuesta">
                            <span>Locomotor</span>
                        </div>
                    </div>

                </div>

                <div class="oracion">

                    <h4>
                        Botella
                    </h4>

                    <div class="contenedor-check">
                        <div class="respuesta">
                            <span>Botellita</span>
                        </div>
                        <div class="respuesta" alt="n">
                            <span>Luna</span>
                        </div>
                        <div class="respuesta">
                            <span>Botellón</span>
                        </div>
                        <div class="respuesta">
                            <span>Embotellar</span>
                        </div>
                    </div>

                </div>


                <div class="oracion">

                    <h4>
                        Nube
                    </h4>

                    <div class="contenedor-check">
                        <div class="respuesta">
                            <span>Nublado</span>
                        </div>
                        <div class="respuesta" alt="n">
                            <span>Lluvia</span>
                        </div>
                        <div class="respuesta">
                            <span>Nuboso</span>
                        </div>
                        <div class="respuesta">
                            <span>Nublar</span>
                        </div>
                    </div>

                </div>

                <div class="oracion">

                    <h4>
                        Boca
                    </h4>

                    <div class="contenedor-check">
                        <div class="respuesta" alt="n">
                            <span>Nariz</span>
                        </div>
                        <div class="respuesta">
                            <span>Bocadillo</span>
                        </div>
                        <div class="respuesta">
                            <span>Boquita</span>
                        </div>
                        <div class="respuesta">
                            <span>Bocado</span>
                        </div>
                    </div>

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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar

var r = 0;


var ul = document.querySelector('.contenedor-check');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}

$(".respuesta").click(function() {
    $(this).css({
        "border": "solid",
        "border-color": "#37D3F7",
        "background": "#B6ECFF"
    });
    var element = $(this).attr("alt");
    var select = $(this).attr("value");
    if (select != "seleccionado") {

        if (element == "n") {
            r++;
            $(this).attr("value", "seleccionado");
        } else {
            r--;
            $(this).attr("value", "seleccionado");
        }
    }
});




function result_tipo_2_3_6() {
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