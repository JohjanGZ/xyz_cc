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
                            <span class="contenedor-contenedores">
                                <span class="pieza homofona" alt="bienes">
                                    bienes
                                </span>
                                <span class="pieza homofona" alt="vienes">
                                    vienes
                                </span>
                            </span>
                            <span class="celeste">●</span>
                            Si
                            <span class="palabra contenedor" alt="vienes">x</span>
                            a reclamar tus 
                            <span class="palabra contenedor" alt="bienes">x</span>
                            debes traer un documento.
                        </p>
                        <p>
                            <span class="contenedor-contenedores">
                                <span class="pieza homofona" alt="bazar">
                                    bazar
                                </span>
                                <span class="pieza homofona" alt="basar">
                                    basar
                                </span>
                            </span>
                            <span class="celeste">●</span>
                            Me voy a
                            <span class="palabra contenedor" alt="basar">x</span>
                            en lo que dijo el dueño del
                            <span class="palabra contenedor" alt="bazar">x</span>
                            .
                        </p>
                        <p>
                            <span class="contenedor-contenedores">
                                <span class="pieza homofona" alt="hierva">
                                    hierva
                                </span>
                                <span class="pieza homofona" alt="hierba">
                                    hierba
                                </span>
                            </span>
                            <span class="celeste">●</span>
                            Esperé que el agua
                            <span class="palabra contenedor" alt="hierva">x</span>
                            mientras cortaba la
                            <span class="palabra contenedor" alt="hierba">x</span>
                            .
                        </p>
                        <p>
                            <span class="contenedor-contenedores">
                                <span class="pieza homofona" alt="rebelaron">
                                    rebelaron
                                </span>
                                <span class="pieza homofona" alt="revelaron">
                                    revelaron
                                </span>
                            </span>
                            <span class="celeste">●</span>
                            Mis padres me
                            <span class="palabra contenedor" alt="revelaron">x</span>
                            que sus empleados se
                            <span class="palabra contenedor" alt="rebelaron">x</span>
                            .
                        </p>
                       

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
function result_tipo_4_6_4() {
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