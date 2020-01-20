<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<div class="container-two">
    <div class="row">
        <div class="campo" id="palabras">
            <ul id="listA">
                <li>
                    <p class="pre"> • 7UM + 5C + 6D + 4U representa el número...</p>
                    <div class="option">
                        <span class="a" alt="">7 465</span>/
                        <span class="a" alt="">7 645</span>/
                        <span class="a" alt="n">7 564</span>
                    </div>
                </li>
                <li>
                <p class="pre"> • 6 653 equivale a...</p>
                    <div class="option">
                        <span class="a" alt="">6UM + 6C + 3D + 5U</span>/
                        <span class="a" alt="">3UM + 5C + 6D + 6U</span>/
                        <span class="a" alt=n>6UM + 6C + 5D + 3U</span>
                    </div>
                </li>
                <li>
                <p class="pre"> • Soy el número 5 670 y mis compañeros son 10 unidades menos y 10 unidades más que yo. ¿Quiénes somos?</p>
                    <div class="option">
                        <span class="a" alt="">5 650 y 5 680</span>/
                        <span class="a" alt="n">5 660 y 5 680</span>/
                        <span class="a" alt="">5 680 y 5 690</span>
                    </div>
                </li>
                <li>
                <p class="pre"> • Si estoy entre 7 506 y 7 510, además soy un número par, ¿quién soy?</p>
                    <div class="option">
                        <span class="a" alt="">7 504</span>/
                        <span class="a" alt="">7 512</span>/
                        <span class="a" alt="n">7 508</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
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
// Formulario - Registrados

function result_tipo_2_7_20() {
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
<script type="text/javascript" src="../../../exercises/comunicacion/1-0-9/js/validate.js"></script>