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

                <div class="noticia">
                    <img src="<?= $dir ?>/img/7.png" alt="">

                    <h5>
                        Esta semana se celebrará la bicicletada infantil entre los colegios de nuestra localidad. El parque zonal ha sido elegido para este evento.
                    </h5>
                </div>

                <div class="container-x">
                    <h5>¿Qué hacen los niños de la noticia?</h5>
                    <div class="grid-container">
                        <div class="grid-item seleccion">
                            <img src="<?= $dir ?>/img/1.png" alt="">
                        </div>
                        <div class="grid-item seleccion">
                            <img src="<?= $dir ?>/img/2.png" alt="">
                        </div>
                        <div class="grid-item seleccion" alt="n">
                            <img src="<?= $dir ?>/img/3.png" alt="">
                        </div>
                    </div>
                    <h5>¿Quiénes participarán en la bicicletada?</h5>
                    <div class="grid-container">
                        <div class="grid-item seleccion">
                            <img src="<?= $dir ?>/img/4.png" alt="">
                        </div>
                        <div class="grid-item seleccion" alt="n">
                            <img src="<?= $dir ?>/img/5.png" alt="">
                        </div>
                        <div class="grid-item seleccion">
                            <img src="<?= $dir ?>/img/6.png" alt="">
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

function result_tipo_4_0_10() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 2) {
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