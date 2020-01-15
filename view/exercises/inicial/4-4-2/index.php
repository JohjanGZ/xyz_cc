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
            <div class="contenedorx">

                <div class="contenedor-ejercicios">
                    <div class="contenedor-img " alt="n">
                        <img src="<?= $dir ?>/img/1.png" alt="">
                        <div class="flor contenedor uno " alt="n">

                        </div>
                        <div class="flor contenedor dos" alt="n">

                        </div>
                        <div class="flor contenedor tres" alt="n">

                        </div>
                        <div class="flor contenedor cuatro" alt="n">

                        </div>
                    </div>
                </div>
                <div class="contenedor-imagen">
                    <div class="img pieza grande" alt="n">
                        <img src="<?= $dir ?>/img/2.png" alt="">
                    </div>
                    <div class="img pieza mediano" alt="n">
                        <img src="<?= $dir ?>/img/2.png" alt="">

                    </div>
                    <div class="img pieza pequeno" alt="n">
                        <img src="<?= $dir ?>/img/2.png" alt="">

                    </div>
                    <div class="img pieza pequeno" alt="n">
                        <img src="<?= $dir ?>/img/2.png" alt="">

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

function result_tipo_4_4_2() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

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