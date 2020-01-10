<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">

    <div class="row">
        <img src="<?=$dir?>/img/1.png" class="img">
        <!-- <div class="col s12 m4 l4">
            <div class="grid-colores">
                <img src="<?=$dir?>/img/o1.png" class="img colores" alt="el" value="#41a62a">
                <img src="<?=$dir?>/img/o2.png" class="img colores" alt="la" value="#009ee0">
            </div>
        </div> -->
        <!-- <div class="col s12 m8 l8">
            <div class="grid-item">
                <div class="item">
                    <div class="lista" alt="el"></div>
                    <img src="<?=$dir?>/img/1.png" class="img">
                </div>
                <div class="item">
                    <div class="lista" alt="el"></div>
                    <img src="<?=$dir?>/img/2.png" class="img">
                </div>

                <div class="item">
                    <div class="lista" alt="la"></div>
                    <img src="<?=$dir?>/img/3.png" class="img">
                </div>
                <div class="item">
                    <div class="lista" alt="la"></div>
                    <img src="<?=$dir?>/img/4.png" class="img">
                </div>

                <div class="item">
                    <div class="lista" alt="la"></div>
                    <img src="<?=$dir?>/img/5.png" class="img">
                </div>
                <div class="item">
                    <div class="lista" alt="la"></div>
                    <img src="<?=$dir?>/img/6.png" class="img">
                </div>

                <div class="item">
                    <div class="lista" alt="el"></div>
                    <img src="<?=$dir?>/img/7.png" class="img">
                </div>
                <div class="item">
                    <div class="lista" alt="el"></div>
                    <img src="<?=$dir?>/img/8.png" class="img">
                </div>
            </div>
        </div> -->
    </div>

</div>
</section>
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
<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
function result_tipo_3_0_1() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 8) {
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