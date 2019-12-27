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

                <table>


                    <tr>
                        <td class="azul">
                            <span>
                                Acarreador
                            </span>
                        </td>
                        <td>
                            <span class="seleccion palabra">
                                diptongo
                            </span>
                        </td>
                        <td>
                            <span class="seleccion palabra" alt="n">
                                hiato
                            </span>
                        </td>
                        <td>
                            <span class="seleccion palabra">
                                triptongo
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="azul">
                            <span>
                                Zoológico
                            </span>
                        </td>
                        <td>
                            <span class="seleccion palabra">
                                diptongo
                            </span>
                        </td>
                        <td>
                            <span class="seleccion palabra" alt="n">
                                hiato
                            </span>
                        </td>
                        <td>
                            <span class="seleccion palabra">
                                triptongo
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="azul">
                            <span>
                                Salgáis
                            </span>
                        </td>
                        <td>
                            <span class="seleccion palabra" alt="n">
                                diptongo
                            </span>
                        </td>
                        <td>
                            <span class="seleccion palabra">
                                hiato
                            </span>
                        </td>
                        <td>
                            <span class="seleccion palabra">
                                triptongo
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="azul">
                            <span>
                                Limpiáis
                            </span>
                        </td>
                        <td>
                            <span class="seleccion palabra">
                                diptongo
                            </span>
                        </td>
                        <td>
                            <span class="seleccion palabra">
                                hiato
                            </span>
                        </td>
                        <td>
                            <span class="seleccion palabra" alt="n">
                                triptongo
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="azul">
                            <span>
                                Poleo
                            </span>
                        </td>
                        <td>
                            <span class="seleccion palabra">
                                diptongo
                            </span>
                        </td>
                        <td>
                            <span class="seleccion palabra" alt="n">
                                hiato
                            </span>
                        </td>
                        <td>
                            <span class="seleccion palabra">
                                triptongo
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td class="azul">
                            <span>
                                Oceánico
                            </span>
                        </td>
                        <td>
                            <span class="seleccion palabra">
                                diptongo
                            </span>
                        </td>
                        <td>
                            <span class="seleccion palabra" alt="n">
                                hiato
                            </span>
                        </td>
                        <td>
                            <span class="seleccion palabra">
                                triptongo
                            </span>
                        </td>
                    </tr>

                </table>

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
function result_tipo_4_4_14() {
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
        console.log(r);

        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>