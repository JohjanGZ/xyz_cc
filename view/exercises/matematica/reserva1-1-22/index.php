<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="row">

<<<<<<< HEAD:view/exercises/matematica/reserva1-1-22/index.php
            <div class="grid-item"><img src="<?= $dir ?>/img/2.png" class="img"></div>
            <div class="grid-item"><div class="caja" alt="n"></div></div>
            <div class="grid-item"><div class="caja"></div></div>
            <div class="grid-item"><div class="caja"></div></div>
            <div class="grid-item"><div class="caja"></div></div>
            <div class="grid-item"><div class="caja"></div></div>
            <div class="grid-item"><div class="caja"></div></div>
            <div class="grid-item"><div class="caja"></div></div>
            <div class="grid-item"><div class="caja"></div></div>
            <div class="grid-item"><div class="caja"></div></div>

            <div class="grid-item"><img src="<?= $dir ?>/img/3.png" class="img"></div>
            <div class="grid-item"><div class="caja"></div></div>
            <div class="grid-item"><div class="caja" alt="n"></div></div>
            <div class="grid-item"><div class="caja"></div></div>
            <div class="grid-item"><div class="caja"></div></div>
            <div class="grid-item"><div class="caja"></div></div>
            <div class="grid-item"><div class="caja"></div></div>
            <div class="grid-item"><div class="caja"></div></div>
            <div class="grid-item"><div class="caja"></div></div>
            <div class="grid-item"><div class="caja"></div></div>

            <div class="grid-item"><img src="<?= $dir ?>/img/4.png" class="img"></div>
            <div class="grid-item"><div class="caja"></div></div>
            <div class="grid-item"><div class="caja"></div></div>
            <div class="grid-item"><div class="caja"></div></div>
            <div class="grid-item"><div class="caja" alt="n"></div></div>
            <div class="grid-item"><div class="caja"></div></div>
            <div class="grid-item"><div class="caja"></div></div>
            <div class="grid-item"><div class="caja"></div></div>
            <div class="grid-item"><div class="caja"></div></div>
            <div class="grid-item"><div class="caja"></div></div>
=======
        <div class="grid-container">
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"><i class="medium material-icons">star</i></div>
            <div class="grid-item"><span>=</span></div>
            <div class="grid-item"><span>1</span></div>
            <div class="grid-item"><i class="medium material-icons">add</i></div>

            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"><i class="medium material-icons">star</i></div>
            <div class="grid-item"><i class="medium material-icons">star</i></div>
            <div class="grid-item"><span>=</span></div>
            <div class="grid-item"><span>2</span></div>
            <div class="grid-item"></div>


            <div class="grid-item"><i class="medium material-icons">star</i></div>
            <div class="grid-item"><i class="medium material-icons">star</i></div>
            <div class="grid-item"><i class="medium material-icons">star</i></div>
            <div class="grid-item"><i class="medium material-icons">star</i></div>
            <div class="grid-item"><span>=</span></div>
            <div class="grid-item separador"><span>4</span></div>
            <div class="grid-item"></div>
>>>>>>> ac79aedd147ee74124c88689f260d84033bcb3f7:view/exercises/matematica/1-1-21/index.php

            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item">
                <select id="select2" class="seleccion" alt="n">
                    <option value="" disabled selected>Elige</option>
                    <option value=""> 5</option>
                    <option value="">6</option>
                    <option value="">10</option>
                    <option value="n">7</option>
                </select>
            </div>
            <div class="grid-item"></div>

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

function result_tipo_1_1_22() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();
    console.log(r);

<<<<<<< HEAD:view/exercises/matematica/reserva1-1-22/index.php

    if (r == 4) {
=======
    if (r == 1) {
>>>>>>> ac79aedd147ee74124c88689f260d84033bcb3f7:view/exercises/matematica/1-1-21/index.php
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