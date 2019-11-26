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
                            <img class="pieza responsive-img" alt="2" src="<?= $dir ?>/img/2.png">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" alt="3" src="<?= $dir ?>/img/3.png">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" alt="4" src="<?= $dir ?>/img/4.png">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" alt="5" src="<?= $dir ?>/img/5.png">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" alt="6" src="<?= $dir ?>/img/6.png">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" alt="7" src="<?= $dir ?>/img/7.png">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" alt="8" src="<?= $dir ?>/img/8.png">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" alt="9" src="<?= $dir ?>/img/9.png">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" alt="10" src="<?= $dir ?>/img/10.png">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" alt="11" src="<?= $dir ?>/img/11.png">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="row recibidor" id="recibidor">
                <div class="col s12 m6 l6 xl6">
                    <div class="contenedorPieza" id="1">
                        <label class="title">Frutas</label>
                        <img class="" src="<?= $dir ?>/img/casa.png">
                    </div>
                </div>
                <div class="col s12 m6 l6 xl6">
                    <div class="contenedorPieza" id="2">
                        <label class="title">Útiles Escolares</label>
                        <img class="" src="<?= $dir ?>/img/barco.png">
                    </div>
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
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar

function result_tipo_1_2_17() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;



    if (n1 == 7 && n2 == 4) {
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
        // console.log(n1);
        // console.log(n2);
    } else {
        // console.log(n1);
        // console.log(n2);
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>