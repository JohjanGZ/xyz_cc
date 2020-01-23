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

            <div class="contenedor-oraciones">

                <div class="oracion">
                    <h5>
                        <span>•</span> Una tarde, Abdulá encontró entre sus redes una vieja botella de cobre.
                    </h5>
                    <div class="contenedor-check">

                        <div class="respuesta seleccion" alt="n">
                            <span>Verdadero</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Falso</span>
                        </div>
                       
                    </div>

                </div>
                
                <div class="oracion">
                    <h5>
                        <span>•</span> Abdulá logró encerrar nuevamente al genio en la botella.
                    </h5>
                    <div class="contenedor-check">

                        <div class="respuesta seleccion" alt="n">
                            <span>Verdadero</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Falso</span>
                        </div>
                       
                    </div>

                </div>
                <div class="oracion">
                    <h5>
                        <span>•</span> Abdulá suplicó al genio que le conceda los tres deseos.
                    </h5>
                    <div class="contenedor-check">

                        <div class="respuesta seleccion">
                            <span>Verdadero</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>Falso</span>
                        </div>
                       
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

var r = 0;

function result_tipo_4_0_15() {
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