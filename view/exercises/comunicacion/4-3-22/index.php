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

                    <h4 style="width: 80%;margin: auto;background-color: #37d3f7;color: white; font-weight: bold;margin-bottom: 15px;padding: 12px 0;">
                        “Nadie más que Karen podía hacerlo, pues esa mujer la había criado como si fuera su propia hija”.
                    </h4>

                    <div class="contenedor-check">

                        <div class="respuesta seleccion" alt="n">
                            <span class="celeste">●</span><span> El deber de Karen era cuidar a la mujer en agradecimiento por haberla criado.</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span class="celeste">●</span><span> Karen era la única que podía cuidar a la anciana, pues era la hija mayor.</span>
                        </div>
                        <div class="respuesta seleccion">
                            <span class="celeste">●</span><span> Karen tenía la obligación de cuidar a la anciana porque era su única hija.</span>
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

function result_tipo_4_3_22() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 1) {
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