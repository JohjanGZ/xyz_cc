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
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/1.png">
                    </div>
                    <div class="contenedor-respuesta">

                        <span class="selectx">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">salt</option>
                                <option value="x">pens</option>
                                <option value="x">cant</option>
                                <option value="x">llor</option>
                                <option value="x">pint</option>
                                <option value="x">bail</option>
                            </select>
                        </span>
                        <span class="pt-5">aba</span>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/2.png">
                    </div>
                    <div class="contenedor-respuesta">

                        <span class="selectx">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">salt</option>
                                <option value="n">pens</option>
                                <option value="x">cant</option>
                                <option value="x">llor</option>
                                <option value="x">pint</option>
                                <option value="x">bail</option>
                            </select>
                        </span>
                        <span class="pt-5">aba</span>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/3.png">
                    </div>
                    <div class="contenedor-respuesta">

                        <span class="selectx">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">salt</option>
                                <option value="x">pens</option>
                                <option value="n">cant</option>
                                <option value="x">llor</option>
                                <option value="x">pint</option>
                                <option value="x">bail</option>
                            </select>
                        </span>
                        <span class="pt-5">aba</span>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/4.png">
                    </div>
                    <div class="contenedor-respuesta">

                        <span class="selectx">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">salt</option>
                                <option value="x">pens</option>
                                <option value="x">cant</option>
                                <option value="n">llor</option>
                                <option value="x">pint</option>
                                <option value="x">bail</option>
                            </select>
                        </span>
                        <span class="pt-5">aba</span>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/5.png">
                    </div>
                    <div class="contenedor-respuesta">

                        <span class="selectx">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">salt</option>
                                <option value="x">pens</option>
                                <option value="x">cant</option>
                                <option value="x">llor</option>
                                <option value="n">pint</option>
                                <option value="x">bail</option>
                            </select>
                        </span>
                        <span class="pt-5">aba</span>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/6.png">
                    </div>
                    <div class="contenedor-respuesta">

                        <span class="selectx">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">salt</option>
                                <option value="x">pens</option>
                                <option value="x">cant</option>
                                <option value="x">llor</option>
                                <option value="x">pint</option>
                                <option value="n">bail</option>
                            </select>
                        </span>
                        <span class="pt-5">aba</span>
                    </div>
                </div>
                


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
function result_tipo_4_5_20() {
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
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }
}
</script>