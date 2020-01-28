<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>

    <div class="contenedor-two">
        <div class="content">
            <div class="info">
                <p>•I. Se invita al público a realizar preguntar con respecto a la exposición para disipar las dudas
                    que pudieran surgir.</p>
                <p>•II. Los puntos de la exposición se dividen equitativamente entre los miembros del grupo.</p>
                <p>•III. Se realiza, en forma grupal, una investigación a través de diversos medios: libros, revistas,
                    Internet, etc.</p>
                <p>•IV. Cada expositor desarrolla su presentación con su respectivo material motivador y de
                    apoyo.</p>
                <p>•V. Cada miembro prepara su exposición y sus materiales individualmente (papelotes,
                    imágenes, audios, etc.).</p>
            </div>
            <div class="cajas">
                <div class="pieza seleccion item" alt="o"><img src="<?=$dir?>/img/1.png" alt=""></div>
                <div class="pieza seleccion item" alt="o"><img src="<?=$dir?>/img/2.png" alt=""></div>
                <div class="pieza seleccion item" alt="o"><img src="<?=$dir?>/img/3.png" alt=""></div>
                <div class="pieza seleccion item" alt="n"><img src="<?=$dir?>/img/4.png" alt=""></div>
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
function result_tipo_5_4_6() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 1) {
        console.log(r)
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        incorrecto();
        console.log(r)
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>