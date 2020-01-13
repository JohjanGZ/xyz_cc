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
                <div class="grid-pregunta">
                    <img src="<?= $dir ?>/img/1.png" class="img-option">
                    <div class="option">
                        <div class="contenedor-img seleccion" alt="">4</div>
                        <div class="contenedor-img seleccion" alt="n">5</div>
                        <div class="contenedor-img seleccion" alt="">6</div>
                    </div>
                </div>
                <div class="grid-pregunta">
                    <img src="<?= $dir ?>/img/2.png" class="img-option">
                    <div class="option">
                        <div class="contenedor-img seleccion" alt="n">3</div>
                        <div class="contenedor-img seleccion" alt="">2</div>
                        <div class="contenedor-img seleccion" alt="">4</div>
                    </div>
                </div>
                <div class="grid-pregunta">
                    <img src="<?= $dir ?>/img/3.png" class="img-option">
                    <div class="option">
                        <div class="contenedor-img seleccion" alt="">4</div>
                        <div class="contenedor-img seleccion" alt="">1</div>
                        <div class="contenedor-img seleccion" alt="n">2</div>
                    </div>
                </div>
                <div class="grid-pregunta">
                    <img src="<?= $dir ?>/img/4.png" class="img-option">
                    <div class="option">
                        <div class="contenedor-img seleccion" alt="">8</div>
                        <div class="contenedor-img seleccion" alt="">5</div>
                        <div class="contenedor-img seleccion" alt="n">7</div>
                    </div>
                </div>
                <div class="grid-pregunta">
                    <img src="<?= $dir ?>/img/5.png" class="img-option">
                    <div class="option">
                        <div class="contenedor-img seleccion" alt="">3</div>
                        <div class="contenedor-img seleccion" alt="n">4</div>
                        <div class="contenedor-img seleccion" alt="">5</div>
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

function result_tipo_3_1_5() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

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