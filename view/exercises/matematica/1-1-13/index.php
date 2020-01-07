<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-item">
                <div class="flex-box">
                    <img src="<?= $dir ?>/img/1.png">
                    <div class="contenedor" alt="3"></div>
                    <img src="<?= $dir ?>/img/2.png">
                </div>
            </div>
            <div class="grid-item">
                <div class="flex-box">
                    <div class="contenedor" alt="5"></div>
                    <img src="<?= $dir ?>/img/3.png">
                </div>
            </div>
            <div class="grid-item">
                <div class="flex-box">
                    <img src="<?= $dir ?>/img/4.png">
                    <div class="contenedor" alt="6"></div>
                    <img src="<?= $dir ?>/img/5.png">
                </div>
            </div>

            <div class="grid-item">
                <div class="flex-box">
                    <img src="<?= $dir ?>/img/6.png">
                    <div class="contenedor" alt="5"></div>
                    <img src="<?= $dir ?>/img/7.png">
                </div>
            </div>
            <div class="grid-item">
                <div class="flex-box">
                    <div class="contenedor" alt="7"></div>
                    <img src="<?= $dir ?>/img/8.png">
                </div>
            </div>
            <div class="grid-item">
                <div class="flex-box">
                    <img src="<?= $dir ?>/img/9.png">
                    <div class="contenedor" alt="3"></div>
                </div>
            </div>

            <div class="grid-item">
                <div class="flex-box">
                    <div class="contenedor" alt="1"></div>
                    <img src="<?= $dir ?>/img/10.png">
                </div>
            </div>
            <div class="grid-item">
                <div class="flex-box">
                    <img src="<?= $dir ?>/img/11.png">
                    <div class="contenedor" alt="7"></div>
                    <img src="<?= $dir ?>/img/12.png">
                </div>
            </div>
            <div class="grid-item">
                <div class="flex-box">
                    <img src="<?= $dir ?>/img/13.png">
                    <div class="contenedor" alt="6"></div>
                </div>
            </div>
        </div>

        <div class="contenedor-silabas">
            <ul class="opciones">
                <?php
                $opciones = array('3','5','6','5','7','3','1','7','6','8','10','4');
                for ($i=0; $i < count($opciones); $i++) { 
                    echo "<li alt='$opciones[$i]' class='pieza'>
                            <span>$opciones[$i]</span>
                          </li>";
                }
            ?>
            </ul>
        </div>
    </div>
    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <center>
                <h4>Respuesta correcta</h4>
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
function result_tipo_1_1_13() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 9) {
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