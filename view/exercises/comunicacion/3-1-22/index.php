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
                    <h5>
                        <span>•</span> ¿Qué vió cuando llegó al colegio?
                    </h5>
                    <div class="contenedor-check">
                        <div class="respuesta" alt="n">
                            <span>Un coche de la policia</span>
                        </div>
                        <div class="respuesta">
                            <span>Un carro de bomberos</span>
                        </div>
                        <div class="respuesta">
                            <span>Un circo</span>
                        </div>
                    </div>

                </div>
                <div class="oracion">
                    <h5>
                        <span>•</span> ¿Quién le contó lo ocurrido?
                    </h5>
                    <div class="contenedor-check">
                        <div class="respuesta">
                            <span>El policía</span>
                        </div>
                        <div class="respuesta" alt="n">
                            <span>Felipe</span>
                        </div>
                        <div class="respuesta">
                            <span>El director</span>
                        </div>
                        <div class="respuesta">
                            <span>El ladrón</span>
                        </div>
                    </div>

                </div>
                <div class="oracion">
                    <h5>
                        <span>•</span> ¿Cuántos ladrones fueron?
                    </h5>
                    <div class="contenedor-check">
                        <div class="respuesta">
                            <span>Uno</span>
                        </div>
                        <div class="respuesta" alt="n">
                            <span>Tres</span>
                        </div>
                        <div class="respuesta">
                            <span>Cuatro</span>
                        </div>
                        <div class="respuesta">
                            <span>Cinco</span>
                        </div>
                    </div>

                </div>
                <div class="oracion">
                    <h5>
                        <span>•</span> ¿A qué hora entraron?
                    </h5>
                    <div class="contenedor-check">
                        <div class="respuesta">
                            <span>1 a.m.</span>
                        </div>
                        <div class="respuesta" alt="n">
                            <span>2 a.m.</span>
                        </div>
                        <div class="respuesta">
                            <span>3 a.m.</span>
                        </div>
                        <div class="respuesta">
                            <span>4 p.m.</span>
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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar

var r = 0;
var v = 1;


var ul = document.querySelector('.contenedor-oraciones');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}

var cols = document.querySelectorAll('.contenedor-check');

[].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});

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




function result_tipo_3_1_22() {
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