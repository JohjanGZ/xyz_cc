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

                <img src="<?= $dir ?>/img/1.png" alt="">

                <table>
                    <tr>

                        <th>
                            <span>
                            ➦∈
                            </span>
                        </th>
                        <th>
                            <span>
                                Plano S
                            </span>
                        </th>
                        <th style="position: relative;">
                            <span>
                                PQ
                            </span>
                            <span style="font-weight: 700;position: absolute; width: 26px; text-align: center; top: 0px; left: calc(50% - 13px);">
                            ⟷
                            </span>
                        </th>

                    </tr>

                    <tr>
                        <td>
                            <span>
                            Punto R
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">V</option>
                                    <option value="x">F</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">V</option>
                                    <option value="x">F</option>
                                </select>
                            </span>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <span>
                            Punto E
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">V</option>
                                    <option value="x">F</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">V</option>
                                    <option value="n">F</option>
                                </select>
                            </span>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <span>
                            Punto X
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">V</option>
                                    <option value="x">F</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">V</option>
                                    <option value="n">F</option>
                                </select>
                            </span>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <span>
                            Recta PQ
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">V</option>
                                    <option value="x">F</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">V</option>
                                    <option value="x">F</option>
                                </select>
                            </span>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <span>
                            Recta HM
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">V</option>
                                    <option value="x">F</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">V</option>
                                    <option value="n">F</option>
                                </select>
                            </span>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <span>
                            Segmento AB
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">V</option>
                                    <option value="x">F</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">V</option>
                                    <option value="n">F</option>
                                </select>
                            </span>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <span>
                            Segmento CD
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">V</option>
                                    <option value="x">F</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">V</option>
                                    <option value="n">F</option>
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
function result_tipo_4_0_16() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    console.log(r);
    if (r == 14) {
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