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

                <div class="secuencia">
                    <span class="palabra pieza">
                        hogar
                    </span>
                    <span class="palabra pieza">
                        vivienda
                    </span>
                    <span class="palabra pieza" alt="uno">
                        mesa
                    </span>
                    <span class="palabra pieza">
                        casa
                    </span>
                    <span class="respuesta" alt="uno">
                        x
                    </span>
                </div>
                <div class="secuencia">
                    <span class="palabra pieza">
                        flaco
                    </span>
                    <span class="palabra pieza">
                        delgado
                    </span>
                    <span class="palabra pieza" alt="dos">
                        alto
                    </span>
                    <span class="palabra pieza">
                        escuálido
                    </span>
                    <span class="respuesta" alt="dos">
                        x
                    </span>
                </div>
                <div class="secuencia">
                    <span class="palabra pieza">
                        mesa
                    </span>
                    <span class="palabra pieza">
                        escritorio
                    </span>
                    <span class="palabra pieza">
                        silla
                    </span>
                    <span class="palabra pieza" alt="tres">
                        tablero
                    </span>
                    <span class="respuesta" alt="tres">
                        x
                    </span>
                </div>
                <div class="secuencia">
                    <span class="palabra pieza" alt="cuatro">
                        arpa
                    </span>
                    <span class="palabra pieza">
                        caja
                    </span>
                    <span class="palabra pieza">
                        arcón
                    </span>
                    <span class="palabra pieza">
                        cofre
                    </span>
                    <span class="respuesta" alt="cuatro">
                        x
                    </span>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_2_8() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 4) {
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