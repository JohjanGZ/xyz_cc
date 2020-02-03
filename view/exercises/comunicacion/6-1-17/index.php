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
        <div class="content">
            <div class="info">
                <p>a. Doña Frozina es buena suegra y <span class="seleccion">optima</span>/<span class="seleccion" alt="n">óptima</span> abuela.</p>
                <p>b. Señora, si le encuentra gusto a insecticida es porque ya lo <span class="seleccion">probo</span>/<span class="seleccion" alt="n">probó</span>.</p>
                <p>c. Eso era algo que le daba a ella el ágil <span class="seleccion" alt="n">impulso</span>/<span class="seleccion">impúlso</span> de saltar de rama en rama.</p>
                <p>d. Estoy <span class="seleccion" alt="n">feliz</span>/<span class="seleccion">felíz</span> de volver a verte.</p>
                <p>e. Era bueno tener un <span class="seleccion">arbol</span>/<span class="seleccion" alt="n">árbol</span> para vivir.</p>
                <p>f. Con cautela, siguió por un corredor <span class="seleccion">sombrio</span>/<span class="seleccion" alt="n">sombrío</span>.</p>
                <p>g. Háblame más alto, por favor, no te <span class="seleccion" alt="n">escucho</span>/<span class="seleccion">escuchó</span>.</p>
                <p>h. Mi padre es de <span class="seleccion">caracter</span>/<span class="seleccion" alt="n">carácter</span> fuerte.</p>
                <p>i. El <span class="seleccion">publico</span>/<span class="seleccion" alt="n">público</span> aplaudió con fuerza.</p>
                <p>j. Las pequeñas <span class="seleccion">particulas</span>/<span class="seleccion" alt="n">partículas</span> de plástico se infiltran en el organismo de los animales marinos.</p>
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
function result_tipo_6_1_17() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 10) {
        console.log(r)
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        incorrecto();
        console.log(r)
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }
}
</script>