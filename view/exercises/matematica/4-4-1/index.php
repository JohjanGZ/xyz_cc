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
                    <thead>
                        <tr>
                            <th>Fracción</th>
                            <th>Se lee</th>
                        </tr>
                    </thead>
                    <tbody>


                        <tr>
                            <td>
                                <div class="fraccion">
                                    <div class="item">
                                        8
                                    </div>
                                    <div class="item bt">
                                        10
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="select">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected></option>
                                        <option value="n">Ocho décimos</option>
                                        <option value="x">Ocho centésimos</option>
                                        <option value="X">Ocho milésimos</option>
                                        <option value="x">Ocho diezmilésimos</option>
                                    </select>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="fraccion">
                                    <div class="item">
                                        15
                                    </div>
                                    <div class="item bt">
                                        100
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="select">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected></option>
                                        <option value="x">Quince décimos</option>
                                        <option value="x">Quince diezmilésimos</option>
                                        <option value="X">Quince milésimos</option>
                                        <option value="n">Quince centésimos</option>
                                    </select>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="fraccion">
                                    <div class="item">
                                        27
                                    </div>
                                    <div class="item bt">
                                        1 000
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="select">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected></option>
                                        <option value="x">Veintisiete diezmilésimos</option>
                                        <option value="x">Veintisiete décimos</option>
                                        <option value="n">Veintisiete milésimos</option>
                                        <option value="x">Veintisiete centésimos</option>
                                    </select>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="fraccion">
                                    <div class="item">
                                        13
                                    </div>
                                    <div class="item bt">
                                        10 000
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="select">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected></option>
                                        <option value="x">Trece cienmilésimos</option>
                                        <option value="x">Trece centésimos</option>
                                        <option value="n">Trece diezmilésimos</option>
                                        <option value="X">Trece milésimos</option>
                                    </select>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="fraccion">
                                    <div class="item">
                                        29
                                    </div>
                                    <div class="item bt">
                                        100 000
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="select">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected></option>
                                        <option value="x">Veintinueve centésimos</option>
                                        <option value="x">Veintinueve diezmilésimos</option>
                                        <option value="X">Veintinueve milésimos</option>
                                        <option value="n">Veintinueve cienmilésimos</option>
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
function result_tipo_4_4_1() {
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