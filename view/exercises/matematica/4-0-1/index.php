<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>
    <div class="caja-principal">
        <div class="center">
            <div id="contenedorPiezas">
                <ul id="listA">
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" alt="1" src="<?= $dir ?>/img/1.png">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" alt="1" src="<?= $dir ?>/img/2.png">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" alt="1" src="<?= $dir ?>/img/3.png">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" alt="2" src="<?= $dir ?>/img/4.png">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" alt="2" src="<?= $dir ?>/img/5.png">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" alt="2" src="<?= $dir ?>/img/6.png">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" alt="2" src="<?= $dir ?>/img/7.png">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="row recibidor" id="recibidor">
                <div class="col s12 m6 l6 xl6">
                    <div class="contenedorPieza contenedor" alt="1"><label class="title">Frutas</label></div>
                </div>
                <div class="col s12 m6 l6 xl6">
                    <div class="contenedorPieza contenedor" alt="o"><label class="title">Cosas</label></div>
                </div>
                <div class="col s12 m6 l6 xl6">
                    <div class="contenedorPieza contenedor" alt="2"><label class="title">Animales</label></div>
                </div>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>

<script type="text/javascript">
// Validar

function result_tipo_4_0_1() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 7) {
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
</script><script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>