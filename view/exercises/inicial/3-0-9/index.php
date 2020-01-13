<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>

    <div class="container-two">
        <ul id="tabs-swipe-demo" class="tabs tabs-fixed-width z-depth-1">
            <li class="tab col s3"><a class="active" href="#p1">Cuento</a></li>
            <li class="tab col s3"><a href="#p2">Pregunta 1</a></li>
            <li class="tab col s3"><a href="#p3">Pregunta 2</a></li>
            <li class="tab col s3"><a href="#p4">Pregunta 3</a></li>
        </ul>
        <div id="p1" class="col s12">
            <div class="image-principal">
                <img src="<?=$dir?>/img/cuento.png" class="principal materialboxed">
            </div>
        </div>
        <div id="p2" class="col s12">
            <span class="text"><span class="s">•</span>¿Quiénes construyen sus casas?</span>
            <div class="contenedor-ejercicios">
                <div class="grid-pregunta">
                    <div class="option">
                        <div class="contenedor-img seleccion" alt="">
                            <img src="<?= $dir ?>/img/1.png" alt="">
                        </div>
                        <div class="contenedor-img seleccion" alt="n">
                            <img src="<?= $dir ?>/img/2.png" alt="">
                        </div>
                        <div class="contenedor-img seleccion" alt="">
                            <img src="<?= $dir ?>/img/3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="p3" class="col s12">
            <span class="text"><span class="s">•</span>¿Quién sopla y destruye las casas?</span>
            <div class="grid-pregunta">
                <div class="option">
                    <div class="contenedor-img seleccion" alt="">
                        <img src="<?= $dir ?>/img/4.png" alt="">
                    </div>
                    <div class="contenedor-img seleccion" alt="">
                        <img src="<?= $dir ?>/img/5.png" alt="">
                    </div>
                    <div class="contenedor-img seleccion" alt="n">
                        <img src="<?= $dir ?>/img/6.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div id="p4" class="col s12">
            <span class="text"><span class="s">•</span>¿A dónde cae el lobo al ingresar por la chimenea?</span>
            <div class="grid-pregunta">
                <div class="option">
                    <div class="contenedor-img seleccion" alt="">
                        <img src="<?= $dir ?>/img/7.png" alt="">
                    </div>
                    <div class="contenedor-img seleccion" alt="">
                        <img src="<?= $dir ?>/img/8.png" alt="">
                    </div>
                    <div class="contenedor-img seleccion" alt="n">
                        <img src="<?= $dir ?>/img/9.png" alt="">
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

function result_tipo_3_0_9() {
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