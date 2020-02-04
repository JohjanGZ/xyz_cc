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
        <div class="contenedor-oraciones">
            <div class="oracion">
                <p>Necesito un anillo delirante <span class="leftSpace boton seleccion" alt="n">Arte mayor</span><span class="boton seleccion" alt="">Arte menor</span></p>
                <p>para la oculta sombra de mi mano, <span class="leftSpace boton seleccion" alt="n">Arte mayor</span><span class="boton seleccion" alt="">Arte menor</span></p>
                <p>un archivo de mar para el verano <span class="leftSpace boton seleccion" alt="n">Arte mayor</span><span class="boton seleccion" alt="">Arte menor</span></p>
                <p>y documentos de agua suplicante. <span class="leftSpace boton seleccion" alt="n">Arte mayor</span><span class="boton seleccion" alt="">Arte menor</span></p>
                <p>Para mi mano un riguroso guante <span class="leftSpace boton seleccion" alt="n">Arte mayor</span><span class="boton seleccion" alt="">Arte menor</span></p>
                <p>de piel de tiempo y pensamiento vano <span class="leftSpace boton seleccion" alt="n">Arte mayor</span><span class="boton seleccion" alt="">Arte menor</span></p>
                <p>y la mesa de juego donde gano <span class="leftSpace boton seleccion" alt="n">Arte mayor</span><span class="boton seleccion" alt="">Arte menor</span></p>
                <p>contra la muerte mi color menguante. <span class="leftSpace boton seleccion" alt="n">Arte mayor</span><span class="boton seleccion" alt="">Arte menor</span></p>
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

function result_tipo_6_3_3() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 8) {
        console.log(r)
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        console.log(r)
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>