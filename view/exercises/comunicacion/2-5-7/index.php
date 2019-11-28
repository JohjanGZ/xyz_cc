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

                    <div class="contenedor-check">
                        <div class="respuesta">
                            <div class="img-rpst">
                                <img src="<?= $dir ?>/img/1.png">
                            </div>
                        </div>
                        <div class="respuesta">
                            <div class="img-rpst">
                                <img src="<?= $dir ?>/img/2.png">

                            </div>
                        </div>
                        <div class="respuesta">
                            <div class="img-rpst">
                                <img src="<?= $dir ?>/img/3.png">

                            </div>
                        </div>
                        <div class="respuesta">
                            <div class="img-rpst" alt="n">
                                <img src="<?= $dir ?>/img/4.png">

                            </div>
                        </div>
                    </div>

                </div>
                <div class="oracion">

                    <div class="contenedor-check chekc">
                        <div class="respuesta">
                            <div class="img-rpst">
                                <img src="<?= $dir ?>/img/5.png">
                            </div>
                        </div>
                        <div class="respuesta">
                            <div class="img-rpst">
                                <img src="<?= $dir ?>/img/6.png">

                            </div>
                        </div>
                        <div class="respuesta">
                            <div class="img-rpst" alt="n">
                                <img src="<?= $dir ?>/img/7.png">

                            </div>
                        </div>
                        <div class="respuesta">
                            <div class="img-rpst">
                                <img src="<?= $dir ?>/img/8.png">

                            </div>
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
var ul = document.querySelector('.chekc');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}
$(".img-rpst").click(function() {
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




function result_tipo_2_5_7() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 2) {
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