<?php require('../../../tools/var/variables.php'); ?>
  <head>     
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
  </head>
  <style type="text/css">

  </style>
  <?=$titulo?>
  <body>
    
    
    <div class="img-mago">
        <img src="<?= $dir ?>/img/1.jpg" alt="">
    </div>
    <div class="container-two">
        <div id='juego'></div>
        <!-- <div id='Palabras'></div> -->
        <div class="preguntas">
            <p><span>1.</span>También es llamada banana.</p>
            <p><span>2.</span>Puedes escribir con ella y lo tienen todas las aves.</p>
            <p><span>3.</span>Da vueltas al rededor del sol.</p>
            <p><span>4.</span>Vamos en verano.</p>
            <p><span>5.</span>El universo se originó con una gran..</p>
            <p><span>6.</span>Nos recuerda un año más de vida</p>
            <p><span>7.</span>Quita las arrugas de la ropa</p>
            <p><span>8.</span>Sirve para colocar nuestros alimentos</p>
            <p><span>9.</span>Nos abrigan las manos en invierno</p>

        </div>
    </div>
    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Respuesta correcta</h4>
            <center>
              <img class="materialboxed"  width="80%" src="<?= $dir ?>/img/respuesta.jpg">
            </center>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
        </div>
    </div>
  </body>


<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript" src="<?= $dir ?>/js/wordfind.js"></script>
<script type="text/javascript" src="<?= $dir ?>/js/wordfindgame.js"></script>
<script type="text/javascript">
    var words = ['platano', 'playa', 'planeta', 'pluma', 'explosion', 'cumpleaños', 'plancha', 'plato', 'manoplas'];
    var gamePuzzle = wordfindgame.create(words, '#juego');


    //var C = [~~(Math.random() * 255),~~(Math.random() * 255),~~(Math.random() * 255)];
	//$('.container').append("<div class='elements' style='color:rgb("+C[0]+","+C[1]+","+C[2]+")'>"+String.fromCharCode(i)+"</div>" );

    

    function result_tipo_1_7_25() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        var divs = $(".found").toArray().length;


        console.log(divs);
        if (divs >= 53) {
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