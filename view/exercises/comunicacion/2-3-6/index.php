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

            <div class="contenedor-imagen">
                <img src="<?= $dir ?>/img/1.png" alt="">
            </div>

            <div class="contenedor-oraciones">


                <div class="oracion">
                    <h5>
                        <span>a.</span> ¿Quién aparece en la imagen?
                    </h5>
                    <div class="contenedor-check">

                        <div class="respuesta">
                            <span>Una señora en el mercado.</span>
                        </div>
                        <div class="respuesta" alt="n">
                            <span>Una niña oliendo las flores.</span>
                        </div>
                    </div>

                </div>
                <div class="oracion">
                    <h5>
                        <span>b.</span> ¿De qué color son las flores?
                    </h5>
                    <div class="contenedor-check">
                        <div class="respuesta" alt="n">
                            <span>Rojas con amarillo</span>
                        </div>
                        <div class="respuesta">
                            <span>Celeste con naranja</span>
                        </div>
                    </div>

                </div>
                <div class="oracion">
                    <h5>
                        <span>c.</span> ¿Cómo está vestida la niña?
                    </h5>
                    <div class="contenedor-check">
                        <div class="respuesta" alt="n">
                            <span>Short y blusa</span>
                        </div>
                        <div class="respuesta">
                            <span>Chompa y buso</span>
                        </div>
                    </div>

                </div>
                <div class="oracion">
                    <h5>
                        <span>d.</span> ¿De qué color es el cabello de la niña?
                    </h5>
                    <div class="contenedor-check">
                        <div class="respuesta">
                            <span>Negro</span>
                        </div>
                        <div class="respuesta" alt="n">
                            <span>Marrón</span>
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
var v = 1;

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