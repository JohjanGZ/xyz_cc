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
                            <span class="celeste">●</span>
                            Los resultados de mis análisis han salido <b>negativos</b>. <br>
                            <span class="celeste">●</span>
                            Los resultados de mis análisis han salido
                            <span class="select">
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">aceptados</option>
                                    <option value="n">positivos</option>
                                    <option value="x">equitativo</option>
                                </select>
                            </span>
                            .
                        </p>
                        <p>
                            <span style="color: #efb511;">●</span>
                            Sobre mi cama hay un pantalón <b>viejo</b>. <br>
                            <span style="color: #efb511;">●</span>
                            Sobre mi cama hay un pantalón
                            <span class="select">
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">nuevo</option>
                                    <option value="x">usado</option>
                                    <option value="x">anciano</option>
                                </select>
                            </span>
                            .
                        </p>
                        <p>
                            <span style="color: #11ef89;">●</span>
                            El mantel es muy <b>áspero</b>. <br>
                            <span style="color: #11ef89;">●</span>
                            El mantel es muy 
                            <span class="select">
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">suave</option>
                                    <option value="x">sucio</option>
                                    <option value="x">rugoso</option>
                                </select>
                            </span>
                            .
                        </p>
                        <p>
                            <span style="color: #ef11a0;">●</span>
                            Tengo un <b>fuerte</b> resfriado. <br>
                            <span style="color: #ef11a0;">●</span>
                            Tengo un 
                            <span class="select">
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">gran</option>
                                    <option value="x">fastidioso</option>
                                    <option value="n">leve</option>
                                </select>
                            </span>
                            resfriado.
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
function result_tipo_3_6_15() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    $("select").each(function() {
        if ($(this).attr("alt") == $(this).val()) {
            r++;
        }
    });

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