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

                <div class="contenedor">

                    <p>
                        22<span class="total" alt="2"></span>
                    </p>
                    <p>
                        35<span class="total" alt="1"></span>
                    </p>
                    <p>
                        4<span class="total" alt="2"></span>6
                    </p>


                    <p>
                        31<span class="total" alt="2"></span>
                    </p>
                    <p>
                        62<span class="total" alt="1"></span>
                    </p>
                    <p>
                        7<span class="total" alt="0"></span>2
                    </p>

                    <p>
                        64<span class="total" alt="2"></span>
                    </p>
                    <p>
                        28<span class="total" alt="2"></span>
                    </p>
                    <p>
                        8<span class="total" alt="0"></span>4
                    </p>

                    <p>
                        71<span class="total" alt="1"></span>
                    </p>
                    <p>
                        96<span class="total" alt="0"></span>
                    </p>
                    <p>
                        6<span class="total" alt="1"></span>8
                    </p>

                    <p>
                        49<span class="total" alt="2"></span>
                    </p>
                    <p>
                        50<span class="total" alt="1"></span>
                    </p>
                    <p>
                        7<span class="total" alt="2"></span>0
                    </p>

                </div>
                <div id="numeros"></div>

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
// Validar
function result_tipo_4_3_2() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 15) {
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