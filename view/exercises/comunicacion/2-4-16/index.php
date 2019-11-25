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
                    <div class="contenedor-top">
                        <img src="<?= $dir ?>/img/1.png" alt="">
                        <span>
                            El público aplaudió mucho al ____________ payaso.
                        </span>
                    </div>

                    <div class="contenedor-check">
                        <div class="respuesta">
                            <span>Aburrido</span>
                        </div>
                        <div class="respuesta" alt="n">
                            <span>Entretenido</span>
                        </div>
                    </div>

                </div>

                <div class="oracion">
                    <div class="contenedor-top">
                        <img src="<?= $dir ?>/img/2.png" alt="">
                        <span>
                            El ____________ lloró todo el día.
                        </span>
                    </div>

                    <div class="contenedor-check">
                        <div class="respuesta" alt="n">
                            <span>Pequeño</span>
                        </div>
                        <div class="respuesta">
                            <span>Grande</span>
                        </div>
                    </div>

                </div>
                <div class="oracion">
                    <div class="contenedor-top">
                        <img src="<?= $dir ?>/img/3.png" alt="">
                        <span>
                            La ____________ ballena pasea por el océano.
                        </span>
                    </div>

                    <div class="contenedor-check">
                        <div class="respuesta">
                            <span>Pequeña</span>
                        </div>
                        <div class="respuesta" alt="n">
                            <span>Enorme</span>
                        </div>
                    </div>

                </div>
                <div class="oracion">
                    <div class="contenedor-top">
                        <img src="<?= $dir ?>/img/4.png" alt="">
                        <span>
                            El ____________ monstruo asustó a los niños.
                        </span>
                    </div>

                    <div class="contenedor-check">
                        <div class="respuesta" alt="n">
                            <span>Malvado</span>
                        </div>
                        <div class="respuesta">
                            <span>Cariñoso</span>
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
<?php require('../../../tools/botones/botones.php');?>
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




function result_tipo_2_4_16() {
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