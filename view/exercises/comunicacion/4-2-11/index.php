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
                        <span>•</span> ¿Quién era Ollantay?
                    </h5>
                    <div class="contenedor-check">

                        <div class="respuesta seleccion" alt="n">
                            <span>El general de los ejercitos Incas</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>El Inca</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>El hijo del Inca</span>
                        </div>
                    </div>

                </div>
                
                <div class="oracion">
                    <h5>
                        <span>•</span> ¿De quién se enamoró Ollantay?
                    </h5>
                    <div class="contenedor-check">

                        <div class="respuesta seleccion">
                            <span>De Ima Súmac</span>
                        </div>
                        <div class="respuesta seleccion" alt="n">
                            <span>De Cusi Coyllur</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>De Mama Ocllo</span>
                        </div>
                       
                    </div>

                </div>
                <div class="oracion">
                    <h5>
                        <span>•</span> ¿Cómo se llamaba el general de Ollantay?
                    </h5>
                    <div class="contenedor-check">

                        <div class="respuesta seleccion" alt="n">
                            <span>Orco Huarancca</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Rumi Ñahui</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span>Huillac Uma</span>
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

function result_tipo_4_2_11() {
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