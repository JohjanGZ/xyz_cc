<?php require('../../../tools/var/variables.php'); ?>
  <head>     
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
  </head>
  <style type="text/css">

  </style>
  <?=$titulo?>
  <body>
    
  <div class="container">
        <div class="row">
           
           <div class="contenedor-ejercicios">
                <div class="ejercicio">
                    <div class="contenedor-respuesta">
                        <span class="span-before">El</span>
                        <div class="palabra" alt="koala"></div>
                        <span class="span-after">es un animal.</span>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="contenedor-respuesta">
                        <span class="span-before">Lleva puesto un</span>
                        <div class="palabra" alt="kimono"></div>
                        <span class="span-after">.</span>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="contenedor-respuesta">
                        <span class="span-before">Celia va con su hermano al</span>
                        <div class="palabra" alt="kiosko"></div>
                        <span class="span-after">.</span>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="contenedor-respuesta">
                        <span class="span-before">Me gusta el</span>
                        <div class="palabra" alt="kiwi"></div>
                        <span class="span-after">.</span>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="contenedor-respuesta">
                        <span class="span-before">Dame un</span>
                        <div class="palabra" alt="kilo"></div>
                        <span class="span-after">de arroz.</span>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="kiko"></div>
                        <span class="span-after">perdió su pelota.</span>
                    </div>
                </div>
           </div>
           <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="kilo">kilo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="kimono">kimono</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="kiosko">kiosko</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="koala">koala</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="kiko">kiko</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="kiwi">kiwi</h4>
                </li>
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
<script type="text/javascript">
    // Validar
    function result_tipo_1_6_23() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 6) {
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