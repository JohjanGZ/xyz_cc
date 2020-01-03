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
                <div class="contenedor-x contenedor uno" alt="agudas">
                    <span>Agudas</span>
                </div>
                <div class="contenedor-x contenedor uno " alt="esdrujulas">
                    <span>Esdrújulas</span>
                </div>
            </div>
            <div class="contenedor-palabras">
                <span class="palabra pieza" alt="agudas">
                    Encontró
                </span>
                <span class="palabra pieza" alt="agudas">
                    Visitar
                </span>
                <span class="palabra pieza" alt="agudas">
                    Ordenó
                </span>
                <span class="palabra pieza" alt="agudas">
                    Explicación
                </span>
                <span class="palabra pieza" alt="agudas">
                    Narró
                </span>
               
                <span class="palabra pieza" alt="esdrujulas">
                    Júpiter
                </span>
                <span class="palabra pieza" alt="esdrujulas">
                    Lágrimas
                </span>
                <span class="palabra pieza" alt="esdrujulas">
                    Afónico
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
function result_tipo_5_0_13() {
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