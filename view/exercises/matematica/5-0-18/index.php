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

                <div class="contenedor">

                    <div class="uno">
                        <img src="<?= $dir ?>/img/1.png" alt="">
                    </div>
                    <div class="xd">

                        <p class="centro">



                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">AF</option>
                                    <option value="n">AB</option>
                                    <option value="x">AE</option>
                                </select>
                            </span>
                            ,
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">BF</option>
                                    <option value="x">FA</option>
                                    <option value="n">BD</option>
                                </select>
                            </span>,
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">BF</option>
                                    <option value="x">FA</option>
                                    <option value="n">DF</option>
                                </select>
                            </span>,
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">FE</option>
                                    <option value="x">FA</option>
                                    <option value="x">FB</option>
                                </select>
                            </span>,
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">EO</option>
                                    <option value="x">EA</option>
                                    <option value="n">EC</option>
                                </select>
                            </span>,
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">BF</option>
                                    <option value="x">CX</option>
                                    <option value="n">AC</option>
                                </select>
                            </span>


                        </p>
                        <p class="centro">




                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">BC</option>
                                    <option value="x">BF</option>
                                    <option value="x">AE</option>
                                </select>
                            </span>
                            ,
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">BF</option>
                                    <option value="n">CD</option>
                                    <option value="x">CX</option>
                                </select>
                            </span>,
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">BF</option>
                                    <option value="n">CF</option>
                                    <option value="x">FA</option>
                                </select>
                            </span>,
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">FA</option>
                                    <option value="x">FB</option>
                                    <option value="n">AD</option>
                                </select>
                            </span>,
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">BE</option>
                                    <option value="x">ACF</option>
                                    <option value="x">EA</option>
                                </select>
                            </span>,
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">BF</option>
                                    <option value="x">CX</option>
                                    <option value="n">ED</option>
                                </select>
                            </span>


                        </p>
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
function result_tipo_5_0_18() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 12) {
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