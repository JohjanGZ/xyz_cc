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

                            49 <i>6</i>25

                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">6 centenas de millar</option>
                                    <option value="n">6 centenas</option>
                                    <option value="x">6 decenas de millar</option>
                                    <option value="x">6 decenas</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>

                            3 <i>8</i>05 425

                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">8 decenas</option>
                                    <option value="x">8 decenas de millar</option>
                                    <option value="x">8 centenas</option>
                                    <option value="n">8 centenas de millar</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>

                            <i>3</i>8 054

                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">3 decenas de millar</option>
                                    <option value="x">3 centenas</option>
                                    <option value="x">3 centenas de millar</option>
                                    <option value="x">3 decenas</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>

                            65 <i>9</i>14

                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">9 decenas de millar</option>
                                    <option value="x">9 centenas de millar</option>
                                    <option value="n">9 centenas</option>
                                    <option value="x">9 decenas</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                </table>
                <table>


                    <tr>
                        <td>

                            2<i>1</i> 786

                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">1 decena de millar</option>
                                    <option value="x">1 centena de millar</option>
                                    <option value="n">1 unidad de millar</option>
                                    <option value="x">1 decena</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>

                            <i>9</i>0 641

                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">9 unidades de millar</option>
                                    <option value="n">9 decenas de millar</option>
                                    <option value="x">9 centenas de millar</option>
                                    <option value="x">9 decenas</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>

                            56 <i>3</i>07

                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">3 decenas de millar</option>
                                    <option value="x">3 centenas de millar</option>
                                    <option value="x">3 decenas</option>
                                    <option value="n">3 centenas</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>

                            98 <i>5</i>68

                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">5 decenas de millar</option>
                                    <option value="n">5 centenas</option>
                                    <option value="x">5 centenas de millar</option>
                                    <option value="x">5 decenas</option>
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
function result_tipo_4_2_4() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    console.log(r);
    if (r == 8) {
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