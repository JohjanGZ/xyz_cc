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
            <div class="contenedorx">

                <div class="contenedor-ejercicios">
                    <div class="contenedor-img ">
                        <img src="<?= $dir ?>/img/1.png" alt="">
                        <span class="contenedor" alt="dia">

                        </span>
                    </div>
                    <div class="contenedor-img ">
                        <img src="<?= $dir ?>/img/2.png" alt="">
                        <span class="contenedor derecha" alt="noche">

                        </span>
                    </div>
                    <div class="contenedor-img ">
                        <img src="<?= $dir ?>/img/3.png" alt="">
                        <span class="contenedor" alt="dia">

                        </span>
                    </div>
                    <div class="contenedor-img " alt="n">
                        <img src="<?= $dir ?>/img/4.png" alt="">
                        <span class="contenedor derecha" alt="noche">

                        </span>
                    </div>

                </div>
                <div class="imagenes">
                    <div class="c-img">
                        <img src="<?= $dir ?>/img/5.png" class="pieza" alt="dia">

                    </div>
                    <div class="c-img">
                        <img src="<?= $dir ?>/img/6.png" alt="noche" class="pieza">

                    </div>
                    <div class="c-img">
                        <img src="<?= $dir ?>/img/5.png" class="pieza" alt="dia">

                    </div>
                    <div class="c-img">
                        <img src="<?= $dir ?>/img/6.png" alt="noche" class="pieza">

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

function result_tipo_4_2_5() {
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