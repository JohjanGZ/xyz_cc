<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container">
    <section id="contenedorpuzzle" class="aleatorio">
        <div class="contenedorGeneral">
            <div class="info">
                <div>9745</div>
            </div>
            <div class="rojo">→</div>
            <div class="row">
                <div><div class="item seleccion" id="item1" alt="n">9 697</div></div>
                <div><div class="item seleccion" id="item2" alt="n">9 548</div></div>
                <div><div class="item seleccion" id="item1" >9 785</div></div>
                <div><div class="item seleccion" id="item2" alt="n">9 690</div></div>
            </div>
        </div>
        <div class="contenedorGeneral">
            <div class="info">
                <div>7 908</div>
            </div>
            <div class="rojo">→</div>
            <div class="row">
                <div><div class="item seleccion" id="item1" alt="n">7 809 </div></div>
                <div><div class="item seleccion" id="item2">7 910</div></div>
                <div><div class="item seleccion" id="item1" >7 990</div></div>
                <div><div class="item seleccion" id="item2" alt="n">7 890</div></div>
            </div>
        </div>
        <div class="contenedorGeneral">
            <div class="info">
                <div>5800</div>
            </div>
            <div class="rojo">→</div>
            <div class="row">
                <div><div class="item seleccion" id="item1" alt="n">5 799</div></div>
                <div><div class="item seleccion" id="item2">5 801</div></div>
                <div><div class="item seleccion" id="item1" alt="n">5 600</div></div>
                <div><div class="item seleccion" id="item2">5 820</div></div>
            </div>
        </div>
    </section>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <center>
            <h4>Respuesta correcta</h4>
            <img class="materialboxed" width="80%" src="<?= $dir ?>/img/respuesta.png">
        </center>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
    </div>
</div>
<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
r= 0;
seleccion_click();
listar_random(".aleatorio");
function result_tipo_2_3_14() {

    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    
    if (r == 7) {
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
