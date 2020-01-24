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

            <img class="img" src="<?= $dir ?>/img/1.png" alt="">

            <div class="contenedor-ejercicios">

                <div class="ejercicio">

                    <p>
                        A
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">⊂</option>
                                <option value="n">⊄</option>
                                <option value="x">∈</option>
                                <option value="x">∉</option>
                            </select>
                        </span>
                        D
                    </p>
                </div>
                <div class="ejercicio">

                    <p>
                        B
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">⊂</option>
                                <option value="n">⊄</option>
                                <option value="x">∈</option>
                                <option value="x">∉</option>
                            </select>
                        </span>
                        D
                    </p>
                </div>
                <div class="ejercicio">

                    <p>
                        B
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">⊂</option>
                                <option value="x">⊄</option>
                                <option value="x">∈</option>
                                <option value="x">∉</option>
                            </select>
                        </span>
                        A
                    </p>
                </div>

                <div class="ejercicio">

                    <p>
                        17
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">⊂</option>
                                <option value="x">⊄</option>
                                <option value="n">∈</option>
                                <option value="x">∉</option>
                            </select>
                        </span>
                        A
                    </p>
                </div>
                <div class="ejercicio">

                    <p>
                        17
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">⊂</option>
                                <option value="x">⊄</option>
                                <option value="x">∈</option>
                                <option value="n">∉</option>
                            </select>
                        </span>
                        D
                    </p>
                </div>
                <div class="ejercicio">

                    <p>
                        15
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">⊂</option>
                                <option value="x">⊄</option>
                                <option value="x">∈</option>
                                <option value="n">∉</option>
                            </select>
                        </span>
                        B
                    </p>
                </div>

                <div class="ejercicio">

                    <p>
                        23
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">⊂</option>
                                <option value="x">⊄</option>
                                <option value="x">∈</option>
                                <option value="x">∉</option>
                            </select>
                        </span>
                        A
                    </p>
                </div>
                <div class="ejercicio">

                    <p>
                        29
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">⊂</option>
                                <option value="x">⊄</option>
                                <option value="n">∈</option>
                                <option value="x">∉</option>
                            </select>
                        </span>
                        A
                    </p>
                </div>
                <div class="ejercicio">

                    <p>
                        31
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">⊂</option>
                                <option value="n">⊄</option>
                                <option value="x">∈</option>
                                <option value="x">∉</option>
                            </select>
                        </span>
                        B
                    </p>
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
function result_tipo_4_0_7() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();

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