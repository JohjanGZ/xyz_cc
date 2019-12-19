<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php 
    $barras = array('|','| |','| | |','| | | |', '| | | | |', '| | | | | |', '| | | | | |'); 
    $numbers = array('1','2','3','4','5','6','7','8');
?>
<body>
    <div class="container-two">
        <div class="columnaUno">
            <div class="">
                <img src="<?= $dir ?>/img/1.png" class="materialboxed" alt="">
            </div>
        </div>
        <div class="columnaDos grid-container">
            <div class="grid-item">
                <img src="<?= $dir ?>/img/2.png" alt="">
            </div>
            <div class="grid-item">
                <div class="item seleccion" alt="n"></div>
                <div class="item seleccion" alt="n"></div>
                <div class="item seleccion" alt="n"></div>
                <div class="item seleccion"></div>
                <div class="item seleccion"></div>
                <div class="item seleccion"></div>
            </div>
            <div class="grid-item imageCaballo">
                <img src="<?= $dir ?>/img/3.png" class="" alt="">
            </div>
            <div class="grid-item">
                <div class="item seleccion" alt="n"></div>
                <div class="item seleccion" alt="n"></div>
                <div class="item seleccion"></div>
                <div class="item seleccion"></div>
                <div class="item seleccion"></div>
                <div class="item seleccion"></div>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/4.png" alt="">
            </div>
            <div class="grid-item">
                <div class="item seleccion" alt="n"></div>
                <div class="item seleccion" alt="n"></div>
                <div class="item seleccion" alt="n"></div>
                <div class="item seleccion" alt="n"></div>
                <div class="item seleccion"></div>
                <div class="item seleccion"></div>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/5.png" alt="">
            </div>
            <div class="grid-item">
                <div class="item seleccion" alt="n"></div>
                <div class="item seleccion" alt="n"></div>
                <div class="item seleccion" alt="n"></div>
                <div class="item seleccion" alt="n"></div>
                <div class="item seleccion" alt="n"></div>
                <div class="item seleccion" alt="n"></div>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/6.png" alt="">
            </div>
            <div class="grid-item">
                <div class="item seleccion" alt="n"></div>
                <div class="item seleccion"></div>
                <div class="item seleccion"></div>
                <div class="item seleccion"></div>
                <div class="item seleccion"></div>
                <div class="item seleccion"></div>
            </div>
        </div>
    </div>
    <!-- Respuesta -->
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
</body>


<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?><script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">


// Validar
function result_tipo_2_3_23() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;


    if (r == 16) {
        console.log(r)
        correcto();
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        
    } else {
        console.log(r)
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>