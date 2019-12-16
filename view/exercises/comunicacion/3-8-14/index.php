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

            <div class="contenedor-ejercicio">
                <div class="contenedor-x" alt="sujeto">
                    <span>Sujeto</span>
                </div>
                <div class="contenedor-x" alt="predicado">
                    <span>Predicado</span>
                </div> 
            </div>
            <div class="contenedor-palabras">
                <span class="palabra pieza" alt="sujeto">
                    <span>La mochila verde</span> se rompió ayer en la mañana
                </span>
                <span class="palabra pieza" alt="sujeto">
                    <span>El papá de Luis</span> trabajó todos los fines de semana
                </span>
                <span class="palabra pieza" alt="sujeto">
                    <span>La licuadora de mamá</span> está malograda
                </span>
                <span class="palabra pieza" alt="predicado">
                    El perro de Miguel <span>siempre juega conmigo</span>
                </span>
                <span class="palabra pieza" alt="predicado">
                    El auto rojo <span>estacionó frente a mi casa</span>
                </span>
                <span class="palabra pieza" alt="predicado">
                    El perro negro <span>ladró durante toda la noche</span>
                </span>
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
function result_tipo_3_8_14() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 6) {
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