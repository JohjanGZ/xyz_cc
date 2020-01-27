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
                            928 530
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">></option>
                                    <option value="x"><</option>
                                    <option value="x">=</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            823 107
                        </td>
                    </tr>
                    <tr>
                        <td>
                            301 627
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">></option>
                                    <option value="n"><</option>
                                    <option value="x">=</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            504 918
                        </td>
                    </tr>
                    <tr>
                        <td>
                            463 298
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">></option>
                                    <option value="x"><</option>
                                    <option value="n">=</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            463 298
                        </td>
                    </tr>
                    <tr>
                        <td>
                            512 470
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">></option>
                                    <option value="n"><</option>
                                    <option value="x">=</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            936 541
                        </td>
                    </tr>
                    <tr>
                        <td>
                            608 357
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">></option>
                                    <option value="n"><</option>
                                    <option value="x">=</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            817 409
                        </td>
                    </tr>
                    <tr>
                        <td>
                            721 409
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">></option>
                                    <option value="x"><</option>
                                    <option value="x">=</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            601 328
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
function result_tipo_4_2_5() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    console.log(r);
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