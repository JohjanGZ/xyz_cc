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
        <div class="row">
            <div class="col s12 df">
                <div id='juego'></div>
            </div>
            <div class="col s12">
                <div class="preguntas">
                    <div class="grid-container">
                        <div class="grid-item"><img src="<?= $dir ?>/img/1.png" class="img"></div>
                        <div class="grid-item"><img src="<?= $dir ?>/img/2.png" class="img"></div>
                        <div class="grid-item"><img src="<?= $dir ?>/img/3.png" class="img"></div>
                        <div class="grid-item"><img src="<?= $dir ?>/img/4.png" class="img"></div>
                        <div class="grid-item"><img src="<?= $dir ?>/img/5.png" class="img"></div>
                        <div class="grid-item"><img src="<?= $dir ?>/img/6.png" class="img"></div>
                        <div class="grid-item"><img src="<?= $dir ?>/img/7.png" class="img"></div>
                        <div class="grid-item"><img src="<?= $dir ?>/img/8.png" class="img"></div>
                    </div>
                </div>
            </div>
        </div>


        <!-- <div id='Palabras'></div> -->

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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript" src="<?= $dir ?>/js/wordfind.js"></script>
<script type="text/javascript" src="<?= $dir ?>/js/wordfindgame.js"></script>
<script type="text/javascript">
var words = ['metro', 'dragón', 'trompeta', 'cocodrilo', 'tren', 'trébol', 'ajedrez', 'cuadro'];
var gamePuzzle = wordfindgame.create(words, '#juego');


//var C = [~~(Math.random() * 255),~~(Math.random() * 255),~~(Math.random() * 255)];
//$('.container').append("<div class='elements' style='color:rgb("+C[0]+","+C[1]+","+C[2]+")'>"+String.fromCharCode(i)+"</div>" );



function result_tipo_1_9_3() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    var divs = $(".found").toArray().length;


    console.log(divs);
    if (divs >= 41) {
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