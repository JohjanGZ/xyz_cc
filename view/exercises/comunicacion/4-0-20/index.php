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
                                Título
                            </span>
                        </td>
                        <td>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">El hermano ausente en la cena de navidad</option>
                                    <option value="x">El hermano presente en la cena pascual</option>
                                    <option value="x">El hermano aucente en la cena pascual</option>
                                    <option value="n">El hermano ausente en la cena pascual</option>
                                </select>
                            </span>
                        </td>

                    </tr>
                    <tr>
                        <td class="azul">
                            <span>
                                Autor
                            </span>
                        </td>
                        <td>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Cesar Vallejo</option>
                                    <option value="n">Abraham Valdelomar</option>
                                    <option value="x">José María Arguedas</option>
                                    <option value="x">Ciro Alegría</option>
                                </select>
                            </span>

                        </td>

                    </tr>
                    <tr>
                        <td class="azul">
                            <span>
                                Número de versos
                            </span>
                        </td>
                        <td>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">15</option>
                                    <option value="x">12</option>
                                    <option value="n">14</option>
                                    <option value="x">13</option>
                                </select>
                            </span>
                        </td>

                    </tr>
                    <tr>
                        <td class="azul">
                            <span>
                                Número de estrófas
                            </span>
                        </td>
                        <td>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">4</option>
                                    <option value="x">3</option>
                                    <option value="x">6</option>
                                    <option value="x">5</option>
                                </select>
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
function result_tipo_4_0_20() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    console.log(r);
    if (r == 4) {
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