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
                        Envudo
                    </h4>

                    <div class="contenedor-check">
                        <div class="respuesta">
                            <span>Enbudo</span>
                        </div>
                        <div class="respuesta">
                            <span>Hembudo</span>
                        </div>
                        <div class="respuesta" alt="n">
                            <span>Embudo</span>
                        </div>
                        <div class="respuesta">
                            <span>Empudo</span>
                        </div>
                    </div>

                </div>

                <div class="oracion">

                    <h4>
                        Conprar
                    </h4>

                    <div class="contenedor-check">
                        <div class="respuesta">
                            <span>Commprar</span>
                        </div>
                        <div class="respuesta" alt="n">
                            <span>Comprar</span>
                        </div>
                        <div class="respuesta">
                            <span>Cohmprar</span>
                        </div>
                        <div class="respuesta">
                            <span>Combrar</span>
                        </div>
                    </div>

                </div>


                <div class="oracion">

                    <h4>
                        Camvio
                    </h4>

                    <div class="contenedor-check">
                        <div class="respuesta">
                            <span>Canvio</span>
                        </div>
                        <div class="respuesta" alt="n">
                            <span>Cambio</span>
                        </div>
                        <div class="respuesta">
                            <span>Campio</span>
                        </div>
                        <div class="respuesta">
                            <span>Cambiho</span>
                        </div>
                    </div>

                </div>

                <div class="oracion">

                    <h4>
                        Tenprano
                    </h4>

                    <div class="contenedor-check">
                        <div class="respuesta" alt="n">
                            <span>Temprano</span>
                        </div>
                        <div class="respuesta">
                            <span>Tenpano</span>
                        </div>
                        <div class="respuesta">
                            <span>Tampreno</span>
                        </div>
                        <div class="respuesta">
                            <span>Tompreno</span>
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


var ul = document.querySelector('.contenedor-oraciones');
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




function result_tipo_2_1_9() {
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