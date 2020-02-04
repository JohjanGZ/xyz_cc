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

            <div class="operacion">


                &nbsp;
                <div class="fraccion">
                    <div class="item">
                        <span>
                            2
                        </span>
                    </div>
                    <div class="item bt">
                        <span>
                            4
                        </span>
                    </div>
                </div>
                <span> &nbsp; de las esferas</span>


            </div>

            <div class="x">
                <div class="contenedor-palabras">
                    <span class="palabra seleccion" alt="">
                        <img src="<?= $dir ?>/img/1.png" alt="">
                    </span>
                    <span class="palabra seleccion" alt="">
                        <img src="<?= $dir ?>/img/1.png" alt="">
                    </span>
                    <span class="palabra seleccion" alt="">
                        <img src="<?= $dir ?>/img/1.png" alt="">
                    </span>

                    <span class="palabra seleccion" alt="">
                        <img src="<?= $dir ?>/img/1.png" alt="">
                    </span>
                    <span class="palabra seleccion" alt="">
                        <img src="<?= $dir ?>/img/1.png" alt="">
                    </span>

                </div>
                <div class="contenedor-palabras" style="padding-top: 0;">
                    <span class="palabra seleccion" alt="">
                        <img src="<?= $dir ?>/img/1.png" alt="">
                    </span>
                    <span class="palabra seleccion" alt="">
                        <img src="<?= $dir ?>/img/1.png" alt="">
                    </span>
                    <span class="palabra seleccion" alt="">
                        <img src="<?= $dir ?>/img/1.png" alt="">
                    </span>
                    <span class="palabra seleccion" alt="">
                        <img src="<?= $dir ?>/img/1.png" alt="">
                    </span>
                    <span class="palabra seleccion" alt="">
                        <img src="<?= $dir ?>/img/1.png" alt="">
                    </span>

                </div>
                <div class="contenedor-palabras" style="padding-top: 0;">
                    <span class="palabra seleccion" alt="">
                        <img src="<?= $dir ?>/img/1.png" alt="">
                    </span>
                    <span class="palabra seleccion" alt="">
                        <img src="<?= $dir ?>/img/1.png" alt="">
                    </span>
                    <span class="palabra seleccion" alt="">
                        <img src="<?= $dir ?>/img/1.png" alt="">
                    </span>
                    <span class="palabra seleccion" alt="">
                        <img src="<?= $dir ?>/img/1.png" alt="">
                    </span>


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
function result_tipo_5_4_3() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 10) {
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