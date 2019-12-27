<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $numeros = array('01:00','02:30','01:15','02:40','03:00','03:20','04:00','04:20','04:40');
?>
<body>

    <div class="container-two">
        <div class="tabla">
            <div class="item">
                <img src="<?= $dir ?>/img/1.png" alt="">
                <div class="buttons">
                    <div class="button seleccion" alt="n">04:00</div>
                    <div class="button seleccion">05:00</div>
                </div>
            </div>
            <div class="item">
                <img src="<?= $dir ?>/img/2.png" alt="">
                <div class="buttons">
                    <div class="button seleccion">12:30</div>
                    <div class="button seleccion" alt="n">11:30</div>
                </div>
            </div>
            <div class="item">
                <img src="<?= $dir ?>/img/3.png" alt="">
                <div class="buttons">
                    <div class="button seleccion" alt="n">06:15</div>
                    <div class="button seleccion">06:16</div>
                </div>
            </div>
            <div class="item">
                <img src="<?= $dir ?>/img/4.png" alt="">
                <div class="buttons">
                    <div class="button seleccion">09:30</div>
                    <div class="button seleccion" alt="n">08:30</div>
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
$("select").formSelect();

// Validar
function result_tipo_2_7_4() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 4) {
        console.log(r)
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        console.log(r)
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>