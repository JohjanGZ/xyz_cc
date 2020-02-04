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

                <p>
                    Sean los conjuntos N = { u, t } y P = { w, u, y }
                </p>

                <table>
                   <tr>
                       <th>N \ P</th>
                       <th>w</th>
                       <th>u</th>
                       <th>y</th>
                   </tr>
                    <tr>
                        <td>
                            u
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">(t, w)</option>
                                    <option value="X">(u, y)</option>
                                    <option value="X">(u, u)</option>
                                    <option value="n">(u, w)</option>
                                    <option value="X">(t, u)</option>
                                    <option value="X">(t, y)</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">(t, w)</option>
                                    <option value="X">(u, y)</option>
                                    <option value="X">(t, y)</option>
                                    <option value="x">(u, w)</option>
                                    <option value="X">(t, u)</option>
                                    <option value="n">(u, u)</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">(u, u)</option>
                                    <option value="x">(u, w)</option>
                                    <option value="X">(t, y)</option>
                                    <option value="n">(u, y)</option>
                                    <option value="x">(t, w)</option>
                                    <option value="X">(t, u)</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            t
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="X">(u, u)</option>
                                    <option value="x">(u, w)</option>
                                    <option value="X">(u, y)</option>
                                    <option value="n">(t, w)</option>
                                    <option value="X">(t, u)</option>
                                    <option value="X">(t, y)</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">(t, u)</option>
                                    <option value="x">(t, w)</option>
                                    <option value="X">(u, y)</option>
                                    <option value="X">(t, y)</option>
                                    <option value="x">(u, w)</option>
                                    <option value="x">(u, u)</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">(u, u)</option>
                                    <option value="x">(u, w)</option>
                                    <option value="x">(u, y)</option>
                                    <option value="x">(t, w)</option>
                                    <option value="n">(t, y)</option>
                                    <option value="X">(t, u)</option>
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
function result_tipo_5_0_12() {
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