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
                        <td>
                            <span class="" alt="">
                                x
                            </span>
                        </td>
                        <td colspan="2">
                            <span>
                                SINGULAR
                            </span>
                        </td>
                        <td colspan="2">
                            <span>
                                PLURAL
                            </span>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <span>

                            </span>
                        </td>
                        <td>
                            <span>
                                Masculino
                            </span>
                        </td>
                        <td>
                            <span>
                                Femenino
                            </span>
                        </td>
                        <td>
                            <span>
                                Masculino
                            </span>

                        </td>
                        <td>
                            <span>
                                Femenino
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>
                                Distancia cercana
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">Este</option>
                                    <option value="x">Ese</option>
                                    <option value="x">Aquel</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Esa</option>
                                    <option value="n">Esta</option>
                                    <option value="x">Aquella</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Esos</option>
                                    <option value="n">Estos</option>
                                    <option value="x">Aquellos</option>
                                </select>
                            </span>

                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Esas</option>
                                    <option value="x">Aquellas</option>
                                    <option value="n">Estas</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>
                                Distancia media
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Este</option>
                                    <option value="n">Ese</option>
                                    <option value="x">Aquel</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">Esa</option>
                                    <option value="x">Esta</option>
                                    <option value="x">Aquella</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">Esos</option>
                                    <option value="x">Estos</option>
                                    <option value="x">Aquellos</option>
                                </select>
                            </span>

                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">Esas</option>
                                    <option value="x">Aquellas</option>
                                    <option value="x">Estas</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>
                                Distancia lejana
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">Aquel</option>
                                    <option value="x">Este</option>
                                    <option value="x">Ese</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Esa</option>
                                    <option value="x">Esta</option>
                                    <option value="n">Aquella</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Esos</option>
                                    <option value="n">Aquellos</option>
                                    <option value="x">Estos</option>
                                </select>
                            </span>

                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Esas</option>
                                    <option value="n">Aquellas</option>
                                    <option value="x">Estas</option>
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
function result_tipo_4_3_6() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    console.log(r);
    if (r == 12) {
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