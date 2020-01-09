<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="content">
        <div class="filaHeader">
            <div></div>
            <div><img src="<?= $dir ?>/img/1.png" alt=""></div>
            <div><img src="<?= $dir ?>/img/2.png" alt=""></div>
            <div><img src="<?= $dir ?>/img/3.png" alt=""></div>
            <div><img src="<?= $dir ?>/img/4.png" alt=""></div>
            <div><img src="<?= $dir ?>/img/5.png" alt=""></div>
        </div>
        <div class="problems">
            <div class="filaHeader">
                <div class="h2 violeta">Poligonal abierta</div>
                <div class="item seleccion" alt="n"></div>
                <div class="item seleccion"></div>
                <div class="item seleccion" alt="n"></div>
                <div class="item seleccion"></div>
                <div class="item seleccion"></div>
            </div>
            <div class="filaHeader">
                <div class="h2 morado">Poligonal cerrada</div>
                <div class="item seleccion"></div>
                <div class="item seleccion" alt="n"></div>
                <div class="item seleccion"></div>
                <div class="item seleccion" alt="n"></div>
                <div class="item seleccion" alt="n"></div>
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
<?php require('../../../tools/botones/botones.php');?>
<script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Formulario - Registrados


function result_tipo_2_1_10() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    
    if (r == 5) {
        console.log(r);
        localStorage.setItem("Nota2-4-8", "2");
        localStorage.setItem("Time2-4-8", tiempo);
        correcto();

    } else {
        console.log(r);
        incorrecto();
        localStorage.setItem("Nota2-4-8", "0");
        localStorage.setItem("Time2-4-8", tiempo);

    }
}
</script>