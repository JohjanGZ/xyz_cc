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
                    <p class="pre">Por la venta de una licuadora, un comerciante ha ganado ochenta y siete soles. El
                        comerciante tiene:</p>
                    <div class="option">
                        <span class="a" alt="">78 soles</span>/
                        <span class="a" alt="">79 soles</span>/
                        <span class="a" alt="n">87 soles</span>/
                        <span class="a" alt="">97 soles</span>
                    </div>
                </li>
                <li>
                <p class="pre">Eduardo logra completar setenta y tres figuritas de un álbum. Eduardo tiene:</p>
                    <div class="option">
                        <span class="a" alt="">72 figuritas</span>/
                        <span class="a" alt="n">73 figuritas</span>/
                        <span class="a" alt="">83 figuritas</span>/
                        <span class="a" alt="">92 figuritas</span>
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

function result_tipo_1_4_5() {
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
<script type="text/javascript" src="../../../exercises/comunicacion/1-0-9/js/validate.js"></script>