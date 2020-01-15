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
                <div class="imagen">
                    <img src="<?= $dir ?>/img/9.png" alt="">
                </div>
                <div class="container-x">
                    <div class="grid-container">
                        <div class="grid-item">
                            <img src="<?= $dir ?>/img/1.png" alt="">

                        </div>
                        <div class="grid-item">
                            <span>=</span>
                        </div>
                        <div class="grid-item">
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">1</option>
                                    <option value="x">2</option>
                                    <option value="x">3</option>
                                    <option value="x">4</option>
                                </select>
                            </span>
                            <P></P>
                        </div>
                    </div>
                    <div class="grid-container">
                        <div class="grid-item">
                            <img src="<?= $dir ?>/img/2.png" alt="">

                        </div>
                        <div class="grid-item">
                            <span>=</span>
                        </div>
                        <div class="grid-item">
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">1</option>
                                    <option value="x">2</option>
                                    <option value="n">3</option>
                                    <option value="x">4</option>
                                </select>
                            </span>
                            <P></P>
                        </div>
                    </div>
                    <div class="grid-container">
                        <div class="grid-item">
                            <img src="<?= $dir ?>/img/3.png" alt="">

                        </div>
                        <div class="grid-item">
                            <span>=</span>
                        </div>
                        <div class="grid-item">
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">1</option>
                                    <option value="x">2</option>
                                    <option value="x">3</option>
                                    <option value="x">4</option>
                                </select>
                            </span>
                            <P></P>
                        </div>
                    </div>
                    <div class="grid-container">
                        <div class="grid-item">
                            <img src="<?= $dir ?>/img/4.png" alt="">

                        </div>
                        <div class="grid-item">
                            <span>=</span>
                        </div>
                        <div class="grid-item">
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">1</option>
                                    <option value="x">2</option>
                                    <option value="x">3</option>
                                    <option value="x">4</option>
                                </select>
                            </span>
                            <P></P>
                        </div>
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
function result_tipo_4_1_4() {
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
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>