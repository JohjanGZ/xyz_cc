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
                            Número de Kg
                        </td>
                        <td>
                            <span>
                                1
                            </span>
                        </td>
                        <td>
                            2
                        </td>
                        <td>
                            3
                        </td>
                        <td>
                            4
                        </td>
                        <td>
                            5
                        </td>
                        <td>
                            6
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 5px 25px;background-color: cornflowerblue;color: white;">
                            Precio ( S/ )
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">( 5 )</option>
                                    <option value="x">( 7,5 )</option>
                                    <option value="n">( 2,5 )</option>
                                    <option value="X">( 10 )</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">( 5 )</option>
                                    <option value="x">( 7,5 )</option>
                                    <option value="x">( 2,5 )</option>
                                    <option value="X">( 10 )</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">( 12,5 )</option>
                                    <option value="n">( 7,5 )</option>
                                    <option value="x">( 2,5 )</option>
                                    <option value="X">( 10 )</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">( 12,5 )</option>
                                    <option value="x">( 7,5 )</option>
                                    <option value="x">( 2,5 )</option>
                                    <option value="n">( 10 )</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">( 12,5 )</option>
                                    <option value="x">( 7,5 )</option>
                                    <option value="x">( 15 )</option>
                                    <option value="x">( 10 )</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">( 12,5 )</option>
                                    <option value="x">( 7,5 )</option>
                                    <option value="n">( 15 )</option>
                                    <option value="x">( 10 )</option>
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
function result_tipo_4_5_4() {
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