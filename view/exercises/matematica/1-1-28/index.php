<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="row">



        <div class="contenedor-ejercicio">
            <div class="contenedor-imagen">
                <img src="<?= $dir ?>/img/1.png" alt="">
            </div>
            <div class="contenedor-oraciones">
                <p>
                    • El conejo ha recorrido
                    <span>
                    <select id="select2" class="seleccion" alt="n">
                        <option value="" disabled selected>Elige</option>
                        <option value="n"> 5</option>
                        <option value="">6</option>
                        <option value="">2</option>
                        <option value="">7</option>
                    </select>
                    </span>
                    cuartas.
                </p>
                <p>
                    • La tortuga ha recorrido
                    <span>
                    <select id="select2" class="seleccion" alt="n">
                        <option value="" disabled selected>Elige</option>
                        <option value=""> 5</option>
                        <option value="">6</option>
                        <option value="n">2</option>
                        <option value="">3</option>
                    </select>
                    </span>
                    cuartas.
                </p>
                <p>
                    • El pollito ha recorrido
                    <span>
                    <select id="select2" class="seleccion" alt="n">
                        <option value="" disabled selected>Elige</option>
                        <option value=""> 5</option>
                        <option value="n">3</option>
                        <option value="">4</option>
                        <option value="">2</option>
                    </select>
                    </span>
                    cuartas.
                </p>
            </div>
        </div>

    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
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
// Formulario - Registrados

function result_tipo_1_1_28() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();
    console.log(r);

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
<script type="text/javascript" src="../../../exercises/comunicacion/1-0-9/js/validate.js"></script>