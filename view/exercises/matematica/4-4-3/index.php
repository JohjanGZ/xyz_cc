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

                <div class="fracciones">
                    <div class="fraccion pieza" alt="uno">
                        <div class="item">
                            1
                        </div>
                        <div class="item bt">
                            11
                        </div>
                    </div>
                    <div class="fraccion pieza" alt="tres">
                        <div class="item">
                            7
                        </div>
                        <div class="item bt">
                            11
                        </div>
                    </div>
                    <div class="fraccion pieza">
                        <div class="item">
                            13
                        </div>
                        <div class="item bt">
                            11
                        </div>
                    </div>
                    <div class="fraccion pieza" alt="dos">
                        <div class="item">
                            6
                        </div>
                        <div class="item bt">
                            11
                        </div>
                    </div>
                    <div class="fraccion pieza">
                        <div class="item">
                            15
                        </div>
                        <div class="item bt">
                            11
                        </div>
                    </div>
                </div>

                <div class="grid-container">
                    <div class="grid-num bb">
                        <div class="grid-item contenedor" alt=""></div>
                        <div class="grid-item contenedor" alt="uno"></div>
                        <div class="grid-item contenedor" alt=""></div>
                        <div class="grid-item contenedor" alt=""></div>
                        <div class="grid-item contenedor" alt=""></div>
                        <div class="grid-item contenedor" alt=""></div>
                        <div class="grid-item contenedor" alt="dos"></div>
                        <div class="grid-item contenedor" alt="tres"></div>
                        <div class="grid-item contenedor" alt=""></div>
                        <div class="grid-item contenedor" alt=""></div>
                        <div class="grid-item contenedor" alt=""></div>
                        <div class="grid-item contenedor" alt=""></div>
                        <div class="grid-item contenedor" alt=""></div>
                        <div class="grid-item contenedor" alt=""></div>
                        <div class="grid-item contenedor" alt=""></div>
                        <div class="grid-item contenedor" alt=""></div>
                        <div class="grid-item contenedor" alt=""></div>
                        <div class="grid-item contenedor" alt=""></div>
                        <div class="grid-item contenedor" alt=""></div>
                        <div class="grid-item contenedor" alt=""></div>
                        <div class="grid-item contenedor" alt=""></div>
                        <div class="grid-item contenedor" alt=""></div>
                        <div class="grid-item contenedor" alt=""></div>
                        <div class="grid-item contenedor" alt=""></div>
                    </div>
                    <div class="xxs">

                    </div>
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
// Validar
function result_tipo_4_4_3() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 3) {
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