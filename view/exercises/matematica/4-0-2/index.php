<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>

<body>
    <div class="caja-principal">
        <div class="respuesta">
            <div class="pieza " alt="1">perro</div>
            <div class="pieza " alt="1">gato</div>
            <div class="pieza " alt="1">vaca</div>
            <div class="pieza " alt="1">caballo</div>
            <div class="pieza " alt="1">gallo</div>
            <div class="pieza " alt="1">oveja</div>
            <div class="pieza " alt="1">cerdo</div>
            <div class="pieza " alt="2">tajador</div>
            <div class="pieza " alt="2">tijera</div>
            <div class="pieza " alt="2">lapicero</div>
            <div class="pieza " alt="2">libro</div>
            <div class="pieza " alt="2">borrador</div>
            <div class="pieza " alt="3">piña</div>
            <div class="pieza " alt="3">manzana</div>
            <div class="pieza " alt="3">plátano</div>
            <div class="pieza " alt="3">uva</div>
            <div class="pieza " alt="3">sandía</div>
            <div class="pieza " alt="3">pera</div>
        </div>
        <div class="image">
            <div class="contenedor contenedoruno" alt="1"></div>
            <div class="contenedor contenedordos" alt="2"></div>
            <div class="contenedor contenedortres" alt="3"></div>
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

function result_tipo_4_0_2() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 18) {
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