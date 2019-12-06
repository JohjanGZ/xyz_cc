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
        
        <div id='juego'></div>
        <!-- <div id='Palabras'></div> -->
        <div class="preguntas">
            <p><span>1.</span>Hogar de reyes y reinas.</p>
            <p><span>2.</span>Objeto que Arturo retiró de una roca.</p>
            <p><span>3.</span>Nombre del verdadero rey de Inglaterra.</p>
            <p><span>4.</span>Persona que practica la magia.</p>
            <p><span>5.</span>Arturo fundó la preciosa ciudad de..</p>
            <p><span>6.</span>Mago famoso que enseñó y guió a Arturo</p>
            <p><span>7.</span>Nombre del padre de Arturo</p>
        </div>
    </div>
    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Respuesta correcta</h4>
            <center>
              <img class="materialboxed"  width="80%" src="<?= $dir ?>/img/respuesta.png">
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
    var words = ['castillo', 'espada', 'arturo', 'mago', 'camelot','merlin','uther'];
    var gamePuzzle = wordfindgame.create(words, '#juego');


    //var C = [~~(Math.random() * 255),~~(Math.random() * 255),~~(Math.random() * 255)];
	//$('.container').append("<div class='elements' style='color:rgb("+C[0]+","+C[1]+","+C[2]+")'>"+String.fromCharCode(i)+"</div>" );

    

    function result_tipo_3_2_23() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        var divs = $(".found").toArray().length;


        console.log(divs);
        if (divs >= 33) {
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