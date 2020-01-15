<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="contenedor aleatorio">
        <div class="item">
            <div class="image">
                <img src="<?= $dir ?>/img/1.png" alt="">
            </div>
            <div class="options aleatorio">
                <div class="miniImage seleccion" alt="ooo">
                    <div class="color rojo"></div>
                </div>
                <div class="miniImage seleccion" alt="n">
                    <div class="color verde"></div>
                </div>
                <div class="miniImage seleccion" alt="">
                    <div class="color amarillo"></div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="image">
                <img src="<?= $dir ?>/img/2.png" alt="">
            </div>
            <div class="options aleatorio">
                <div class="miniImage seleccion" alt="oo">
                    <div class="color rojo"></div>
                </div>
                <div class="miniImage seleccion" alt="ooo">
                    <div class="color verde"></div>
                </div>
                <div class="miniImage seleccion" alt="n">
                    <div class="color amarillo"></div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="image">
                <img src="<?= $dir ?>/img/3.png" alt="">
            </div>
            <div class="options aleatorio">
                <div class="miniImage seleccion" alt="n">
                    <div class="color rojo"></div>
                </div>
                <div class="miniImage seleccion" alt="ooo">
                    <div class="color verde"></div>
                </div>
                <div class="miniImage seleccion" alt="o">
                    <div class="color amarillo"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Respuesta correcta</h4>
        <center>
            <img class="materialbox listaed" width="80%" src="<?= $dir ?>/img/respuesta.png">
        </center>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
    </div>
</div>
<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
function result_tipo_5_3_7() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 3) {
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