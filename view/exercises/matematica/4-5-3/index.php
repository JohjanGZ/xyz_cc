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
                Mi tío da S/ 30 de propina a cada sobrino,<br>
                le alcanza solo para 7 sobrinos. <br>
                 Pero si le da S/ 15 a cada sobrino, <br>
                  ¿cuántos sobrinos recibirán propina?
                </p>

                <table>

                    <tbody>


                        <tr>
                            <td colspan="2">
                            S/.
                                <span class="select">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected></option>
                                        <option value="x">7</option>
                                        <option value="x">15</option>
                                        <option value="n">30</option>
                                        <option value="x">20</option>
                                    </select>
                                </span> 
                                <span class="flecha">

                                </span>
                                
                                <span class="select">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected></option>
                                        <option value="n">7</option>
                                        <option value="x">15</option>
                                        <option value="x">30</option>
                                        <option value="x">20</option>
                                    </select>
                                </span>
                                <br>
                                S/.
                                <span class="select">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected></option>
                                        <option value="x">12</option>
                                        <option value="x">17</option>
                                        <option value="n">15</option>
                                        <option value="x">19</option>
                                    </select>
                                </span> 
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
                                        <option value="x">directa</option>
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
                                                    <option value="n">30</option>
                                                    <option value="x">7</option>
                                                    <option value="x">15</option>
                                                    <option value="x">10</option>
                                                </select>
                                            </span>
                                            X
                                            <span class="select">
                                                <select class="browser-default seleccion" alt="n">
                                                    <option value="" disabled selected></option>
                                                    <option value="x">30</option>
                                                    <option value="x">15</option>
                                                    <option value="n">7</option>
                                                    <option value="x">6</option>
                                                </select>
                                            </span>
                                        </div>
                                        <div class="item bt">
                                            <span class="select">
                                                <select class="browser-default seleccion" alt="n">
                                                    <option value="" disabled selected></option>
                                                    <option value="x">12</option>
                                                    <option value="x">17</option>
                                                    <option value="x">16</option>
                                                    <option value="n">15</option>
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
                                            <option value="x">12</option>
                                            <option value="n">14</option>
                                            <option value="x">15</option>
                                            <option value="x">16</option>
                                        </select>
                                    </span>
                                    <span>
                                        sobrinos
                                    </span>
                                </div>
                            </td>


                        </tr>
                        <tr colspan="2">
                            <td>
                                Respuesta: Recibirán propina <span class="select">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected></option>
                                        <option value="x">12</option>
                                        <option value="x">10</option>
                                        <option value="x">16</option>
                                        <option value="n">14</option>
                                    </select>
                                </span>
                                sobrinos.
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
function result_tipo_4_5_3() {
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