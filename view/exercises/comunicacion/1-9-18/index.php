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
                <div class="br-img">
                    <img src="<?= $dir ?>/img/1.png" class="img">
                </div>
                <div class="br-img">
                    <div class="box" alt="n">dro</div>
                    <div class="box">dor</div>
                </div>
            </div>
            <div class="grid-item">
                <div class="br-img">
                    <img src="<?= $dir ?>/img/2.png" class="img">
                </div>
                <div class="br-img">
                    <div class="box">dri</div>
                    <div class="box" alt="n">dir</div>
                </div>
            </div>

            <div class="grid-item">
                <div class="br-img">
                    <img src="<?= $dir ?>/img/3.png" class="img">
                </div>
                <div class="br-img">
                    <div class="box" alt="n">dre</div>
                    <div class="box">der</div>
                </div>
            </div>
            <div class="grid-item">
                <div class="br-img">
                    <img src="<?= $dir ?>/img/4.png" class="img">
                </div>
                <div class="br-img">
                    <div class="box">dro</div>
                    <div class="box" alt="n">dor</div>
                </div>
            </div>

            <div class="grid-item">
                <div class="br-img">
                    <img src="<?= $dir ?>/img/5.png" class="img">
                </div>
                <div class="br-img">
                    <div class="box" alt="n">dri</div>
                    <div class="box">dir</div>
                </div>
            </div>
            <div class="grid-item">
                <div class="br-img">
                    <img src="<?= $dir ?>/img/6.png" class="img">
                </div>
                <div class="br-img">
                    <div class="box" alt="n">dri</div>
                    <div class="box">dir</div>
                </div>
            </div>

            <div class="grid-item">
                <div class="br-img">
                    <img src="<?= $dir ?>/img/7.png" class="img">
                </div>
                <div class="br-img">
                    <div class="box">dro</div>
                    <div class="box" alt="n">dor</div>
                </div>
            </div>
            <div class="grid-item">
                <div class="br-img">
                    <img src="<?= $dir ?>/img/8.png" class="img">
                </div>
                <div class="br-img">
                    <div class="box">dri</div>
                    <div class="box" alt="n">dir</div>
                </div>
            </div>
            <div class="grid-item">
                <div class="br-img">
                    <img src="<?= $dir ?>/img/9.png" class="img">
                </div>
                <div class="br-img">
                    <div class="box">dro</div>
                    <div class="box" alt="n">dor</div>
                </div>
            </div>

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
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_9_18() {
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
        console.log(r);
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>