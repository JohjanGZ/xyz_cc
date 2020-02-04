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
                    <div class="conjunto">

                    </div>

                </div>
                <div class="ejercicio">

                    <p>
                        <img src="<?= $dir ?>/img/2.png" alt="">
                        &nbsp; y &nbsp;
                        <img src="<?= $dir ?>/img/3.png" alt="">
                        &nbsp; = &nbsp;
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">secantes</option>
                                <option value="n">paralelas</option>

                            </select>
                        </span>
                        
                    </p>
                    <p>
                        <img src="<?= $dir ?>/img/4.png" alt="">
                        &nbsp; y &nbsp;
                        <img src="<?= $dir ?>/img/5.png" alt="">
                        &nbsp; = &nbsp;
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">secantes</option>
                                <option value="x">paralelas</option>

                            </select>
                        </span>
                        
                    </p>
                    <p>
                        <img src="<?= $dir ?>/img/6.png" alt="">
                        &nbsp; y &nbsp;
                        <img src="<?= $dir ?>/img/7.png" alt="">
                        &nbsp; = &nbsp;
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">secantes</option>
                                <option value="x">paralelas</option>

                            </select>
                        </span>
                        
                    </p>
                    <p>
                        <img src="<?= $dir ?>/img/8.png" alt="">
                        &nbsp; y &nbsp;
                        <img src="<?= $dir ?>/img/9.png" alt="">
                        &nbsp; = &nbsp;
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">secantes</option>
                                <option value="n">paralelas</option>

                            </select>
                        </span>
                        
                    </p>
                    <p>
                        <img src="<?= $dir ?>/img/10.png" alt="">
                        &nbsp; y &nbsp;
                        <img src="<?= $dir ?>/img/11.png" alt="">
                        &nbsp; = &nbsp;
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">secantes</option>
                                <option value="x">paralelas</option>

                            </select>
                        </span>
                        
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
function result_tipo_5_0_21() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();

    if (r == 5) {
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