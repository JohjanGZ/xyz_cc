<?php require('../../../tools/var/variables.php'); ?>
  <head>     
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
  </head>
  <style type="text/css">

  </style>
  <?=$titulo?>
  <body>

    <div class="container-two">
        <div class="img-img">
            <img src="<?= $dir ?>/img/1.png" alt="">
        </div>
        <div id='juego'></div>
        <!-- <div id='Palabras'></div> -->
        <div class="preguntas">
            <p><span>1.</span>Almacén de grano y comida.</p>
            <p><span>2.</span>Felino depredador que tiene pelaje a rayas.</p>
            <p><span>3.</span>Ser fantástico, grande y verde parecido al hombre.</p>
            <p><span>4.</span>Insecto que canta en las noches.</p>
            <p><span>5.</span>Se utiliza para unir hojas de papel.</p>
            <p><span>6.</span>Maquina que eleva y distribuye carga.</p>
            <p><span>7.</span>Dispositivo por donde sale el agua.</p>
            <p><span>8.</span>Fruta con pepitas hojas en su interior.</p>
            <p><span>9.</span>Crústaceo que vive cerca de las payas.</p>
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
    var words = ['tigre', 'granero', 'ogro', 'grillo', 'grapadora', 'grua', 'grifo', 'granada', 'cangrejo'];
    var gamePuzzle = wordfindgame.create(words, '#juego');


    //var C = [~~(Math.random() * 255),~~(Math.random() * 255),~~(Math.random() * 255)];
	//$('.container').append("<div class='elements' style='color:rgb("+C[0]+","+C[1]+","+C[2]+")'>"+String.fromCharCode(i)+"</div>" );

    

    function result_tipo_1_8_15() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        var divs = $(".found").toArray().length;


        console.log(divs);
        if (divs >= 46) {
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