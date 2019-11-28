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

            <div class="contenedor-ejercicios">
                <div class="ejercicio">
                    <h4>Bailando vals</h4>
                    <div class="contenedor-respuesta">
                        <p>
                            Rosa y Jorge quieren aprender a bailar vals,
                            <span class="palabra" alt="uno">
                                x
                            </span>
                            se han matriculado en una academia de baile. A Rosa le entusiasma cada clase y hace grandes
                            progresos.
                            <span class="palabra dos" alt="dos">
                                x
                            </span>
                            , a Jorge le está costando mucho trabajo.
                            <span class="palabra tres" alt="tres">
                                x
                            </span>
                            , Jorge se divierte mucho
                            <span class="palabra" alt="cuatro">
                                x
                            </span>
                            , los dos serán grandes bailarines.
                        </p>
                    </div>
                </div>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="uno">por eso</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="dos">En cambio</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="tres">A pesar de todo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="cuatro">al final</h4>
                </li>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_8_18() {
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