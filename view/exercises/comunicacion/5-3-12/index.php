<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>

    <div class="contenedor-two">
        <div class="grid">
            <div class="esquema">
                <img src="<?=$dir?>/img/principal.png" class="principal">
                <div class="text">
                    Pensó que el viaje era muy <span class="seleccion" alt="">largo</span>. Y lo creía porque recién estaba a <span class="seleccion" alt="">mitad</span> de su <span class="seleccion" alt="">destino</span>. Había
                    <span class="seleccion" alt="">recorrido</span> cuatro <span class="seleccion" alt="">países</span> y aún no llegaba al <span class="seleccion" alt="">lugar</span> señalado en el mapa. Desde su <span class="seleccion" alt="">salida</span>, y
                    haciendo <span class="seleccion" alt="">cálculos</span>, había gastado el <span class="seleccion" alt="">triple</span> de lo que tenía pensado. En <span class="seleccion" alt="n">algunas</span> ocasiones
                    creía que el viaje era un error. <span class="seleccion" alt="n">Demasiado</span> gasto, <span class="seleccion" alt="n">demasiada</span> distancia. Sin embargo, a pesar de
                    los <span class="seleccion" alt="n">muchos</span> pensamientos negativos que lo atormentaban, pero en cada país <span class="seleccion" alt="">siempre</span>
                    encontraba <span class="seleccion" alt="n">alguna</span> señal que le indicaba que nada era un error.
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

function result_tipo_5_3_12() {
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