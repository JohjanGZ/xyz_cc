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

                <p class="txt">
                    Si 17 cajas de crayolas cuesta 204 soles, <br>
                     ¿cuánto costará 15 cajas de crayolas?
                </p>

                <table>

                    <tbody>


                        <tr>
                            <td colspan="2">

                                <span class="select">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected></option>
                                        <option value="x">19</option>
                                        <option value="n">17</option>
                                        <option value="x">12</option>
                                        <option value="x">18</option>
                                    </select>
                                </span> cajas
                                <span class="flecha">

                                </span>
                                S/. <span class="select">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected></option>
                                        <option value="n">204</option>
                                        <option value="x">195</option>
                                        <option value="x">185</option>
                                        <option value="x">208</option>
                                    </select>
                                </span>
                                <br>
                                <span class="select">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected></option>
                                        <option value="x">12</option>
                                        <option value="x">17</option>
                                        <option value="n">15</option>
                                        <option value="x">19</option>
                                    </select>
                                </span> cajas
                                <span class="flecha">

                                </span>
                                X

                            </td>

                        </tr>
                        <tr>
                            <td colspan="2">
                                Por regla de tres
                                <span class="select">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected></option>
                                        <option value="x">indirecta</option>
                                        <option value="n">inversa</option>
                                    </select>
                                </span>
                            </td>


                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="operacion">

                                    <span>X = </span>
                                    <div class="fraccion">
                                        <div class="item">
                                            <span class="select">
                                                <select class="browser-default seleccion" alt="n">
                                                    <option value="" disabled selected></option>
                                                    <option value="x">12</option>
                                                    <option value="x">16</option>
                                                    <option value="n">15</option>
                                                    <option value="x">10</option>
                                                </select>
                                            </span>
                                            X
                                            <span class="select">
                                                <select class="browser-default seleccion" alt="n">
                                                    <option value="" disabled selected></option>
                                                    <option value="x">205</option>
                                                    <option value="n">204</option>
                                                    <option value="x">207</option>
                                                    <option value="x">206</option>
                                                </select>
                                            </span>
                                        </div>
                                        <div class="item bt">
                                            <span class="select">
                                                <select class="browser-default seleccion" alt="n">
                                                    <option value="" disabled selected></option>
                                                    <option value="x">12</option>
                                                    <option value="x">15</option>
                                                    <option value="x">16</option>
                                                    <option value="n">17</option>
                                                </select>
                                            </span>
                                        </div>
                                    </div>
                                    <span>
                                        =
                                    </span>

                                    <span class="select">
                                        <select class="browser-default seleccion" alt="n">
                                            <option value="" disabled selected></option>
                                            <option value="x">182</option>
                                            <option value="x">185</option>
                                            <option value="x">186</option>
                                            <option value="n">180</option>
                                        </select>
                                    </span>
                                </div>
                            </td>


                        </tr>
                        <tr colspan="2">
                            <td>
                                Respuesta: 15 cajas de crayolas costará: S/ <span class="select">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected></option>
                                        <option value="x">182</option>
                                        <option value="x">185</option>
                                        <option value="n">180</option>
                                        <option value="x">186</option>
                                    </select>
                                </span>
                            </td>

                        </tr>
                    </tbody>
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
function result_tipo_4_5_2() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    console.log(r);
    if (r == 9) {
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