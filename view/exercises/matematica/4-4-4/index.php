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
                    <div class="fraccion pieza" alt="dos">
                        <div class="itemx">
                            9
                        </div>
                        <div class="itemx bt">
                            4
                        </div>
                    </div>
                    <div class="fraccion pieza">
                        <div class="itemx">
                            1
                        </div>
                        <div class="itemx bt">
                            4
                        </div>
                    </div>
                    <div class="fraccion pieza" alt="tres">
                        <div class="itemx">
                            11
                        </div>
                        <div class="itemx bt">
                            4
                        </div>
                    </div>
                    <div class="fraccion pieza">
                        <div class="itemx">
                            2
                        </div>
                        <div class="itemx bt">
                            4
                        </div>
                    </div>
                    <div class="fraccion pieza" alt="uno">
                        <div class="itemx">
                            7
                        </div>
                        <div class="itemx bt">
                            4
                        </div>
                    </div>
                </div>

                <div class="recta-container">

                    <div class="item contenedor uno"></div>
                    <div class="item contenedor dos"></div>
                    <div class="item contenedor tres"></div>
                    <div class="item contenedor cuatro"></div>
                    <div class="item contenedor cinco"></div>
                    <div class="item contenedor seis"></div>
                    <div class="item contenedor siete" alt="uno"></div>
                    <div class="item contenedor ocho"></div>
                    <div class="item contenedor nueve" alt="dos"></div>
                    <div class="item contenedor diez"></div>
                    <div class="item contenedor once" alt="tres"></div>
                    <div class="item contenedor doce"></div>
                 
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
function result_tipo_4_4_4() {
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