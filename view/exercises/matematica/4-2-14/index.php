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

                            51 834 ÷ 3 = 

                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">17 782</option>
                                    <option value="x">13 273</option>
                                    <option value="n">17 278</option>
                                    <option value="x">17 277</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>

                           965 119 ÷ 8 = 

                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">120 693</option>
                                    <option value="x">120 369</option>
                                    <option value="x">121 639</option>
                                    <option value="n">120 639</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>

                           83 451 ÷ 9 = 

                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">9 272</option>
                                    <option value="x">9 222</option>
                                    <option value="x">9 722</option>
                                    <option value="x">9 262</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>

                          545 741 ÷ 6 = 

                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">90 659</option>
                                    <option value="n">90 956</option>
                                    <option value="x">90 369</option>
                                    <option value="x">91 856</option>
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
function result_tipo_4_2_14() {
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