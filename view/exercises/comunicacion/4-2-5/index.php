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

                    <div class="contenedor-respuesta">
                        <p>
                            <span class="celeste">●</span>
                            C
                            <span class="palabra contenedor" alt="ie">x</span>
                            GO
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            PER
                            <span class="palabra contenedor" alt="ua">x</span>
                            NO
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            C
                            <span class="palabra contenedor" alt="ue">x</span>
                            TE
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            M
                            <span class="palabra contenedor" alt="ai">x</span>
                            CENA
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            TRIV
                            <span class="palabra contenedor" alt="ia">x</span>
                            
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            G
                            <span class="palabra contenedor" alt="ua">x</span>
                            RANÁ
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            B
                            <span class="palabra contenedor" alt="ie">x</span>
                            NVENIDO
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            ELEGANC
                            <span class="palabra contenedor" alt="ia">x</span>
                            
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            B
                            <span class="palabra contenedor" alt="ue">x</span>
                            NO
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            B
                            <span class="palabra contenedor" alt="ai">x</span>
                            LAR
                        </p>


                    </div>
                </div>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="ie">IE</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ua">UA</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ue">UE</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ai">AI</h4>
                </li>

                <li class="silabas">
                    <h4 class="pieza" alt="ia">IA</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ua">UA</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ie">IE</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ia">IA</h4>
                </li>

                <li class="silabas">
                    <h4 class="pieza" alt="ue">UE</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ai">AI</h4>
                </li>
            </ul>
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

    if (r == 10) {
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