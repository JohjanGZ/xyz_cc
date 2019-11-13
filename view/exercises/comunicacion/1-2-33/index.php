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
            <p><span>1.</span>Lo comemos en navidad.</p>
            <p><span>2.</span>Es una empanada pequeña.</p>
            <p><span>3.</span>Un pan muy chiquito.</p>
            <p><span>4.</span>Lugar donde venden pan.</p>
            <p><span>5.</span>Viene con relleno de pollo o carne.</p>
            <p><span>6.</span>Persona que prepara pan.</p>
            <p><span>7.</span>¿Donde colocamos los panes?.</p>
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


<script src="../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript" src="<?= $dir ?>/js/wordfind.js"></script>
<script type="text/javascript" src="<?= $dir ?>/js/wordfindgame.js"></script>
<script type="text/javascript">
    var words = ['empanadas', 'panadero', 'panera', 'empanadilla', 'panetón', 'panecillo', 'panaderia'];
    var gamePuzzle = wordfindgame.create(words, '#juego');

    function result_tipo_1_2_33() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        var divs = $(".found").toArray().length;
        console.log(divs);      
        //console.log(divs);
        if (divs == 51) {
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