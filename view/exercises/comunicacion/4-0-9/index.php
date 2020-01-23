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
                        <th>Oración</th>
                        <th>Emisor</th>
                        <th>Receptor</th>
                        <th>Mensaje</th>
                    </tr>
                    <tr>
                        <td><span>Josefina recibió una carta de Hugo en la que decía que la quería mucho como
                                amiga.</span></td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Josefina</option>
                                    <option value="n">Hugo</option>
                                    <option value="x">Te quiero como amiga</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">Josefina</option>
                                    <option value="x">Hugo</option>
                                    <option value="x">Te quiero como amiga</option>
                                </select>
                            </span>
                        </td>

                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Josefina</option>
                                    <option value="x">Hugo</option>
                                    <option value="n">Te quiero como amiga</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>
                                En la radio anuncian un remedio infalible para librarse para siempre de los zancudos.
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">El que escucha la radio</option>
                                    <option value="n">El anuncio de la radio</option>
                                    <option value="x">Remedio para los zancudos</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">El que escucha la radio</option>
                                    <option value="x">El anuncio de la radio</option>
                                    <option value="x">Remedio para los zancudos</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">El que escucha la radio</option>
                                    <option value="x">El anuncio de la radio</option>
                                    <option value="n">Remedio para los zancudos</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td><span>Un amigo me manda un whatsapp para felicitarme por ser tan guapo.</span></td>
                        <td>
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Felicidades por ser guapo</option>
                                    <option value="x">Yo</option>
                                    <option value="n">Mi amigo</option>
                                </select>
                            </span>
                        </td>
                        <td>
                        <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Felicidades por ser guapo</option>
                                    <option value="n">Yo</option>
                                    <option value="x">Mi amigo</option>
                                </select>
                            </span>
                        </td>
                        <td>
                        <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">Felicidades por ser guapo</option>
                                    <option value="x">Yo</option>
                                    <option value="x">Mi amigo</option>
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
function result_tipo_4_0_9() {
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
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>