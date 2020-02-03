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
                        <td style="padding: 5px 0;background-color: cornflowerblue;color: white;">
                            Velocidad (km/h)
                        </td>
                        <td>
                            12
                        </td>
                        <td>
                            18
                        </td>
                        <td>
                            24
                        </td>
                        <td>
                            30
                        </td>
                        <td>
                            36
                        </td>

                    </tr>
                    <tr>
                        <td style="padding: 5px 15px;background-color: cornflowerblue;color: white;">
                            <span class="titulo">
                            Tiempo ( horas )</span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">4</option>
                                    <option value="n">6</option>
                                    <option value="x">3</option>
                                    <option value="X">5</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">6</option>
                                    <option value="X">5</option>
                                    <option value="n">4</option>
                                    <option value="x">3</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">3</option>
                                    <option value="x">6</option>
                                    <option value="X">5</option>
                                    <option value="x">4</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x"> 1,9 </option>
                                    <option value="x"> 2,5 </option>
                                    <option value="x"> 2,8 </option>
                                    <option value="n"> 2,4</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n"> 2 </option>
                                    <option value="x"> 4 </option>
                                    <option value="x"> 5 </option>
                                    <option value="x"> 0 </option>
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
function result_tipo_4_5_5() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    console.log(r);
    if (r == 5) {
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