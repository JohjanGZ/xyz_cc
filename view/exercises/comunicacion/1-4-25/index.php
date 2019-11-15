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
        <div class="row">
            <div class="campo" id="palabras">
                <ul id="listA">
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">La</span>
                            <div id="1" class="vocal"></div>
                            <span class="span-after">es para ahorcar.</span>
                        </div>
                    </li>
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">La</span>
                            <div id="2" class="vocal"></div>
                            <span class="span-after">sirve para lanzar objetos.</span>
                        </div>
                    </li>
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">La forma de la</span>
                            <div id="3" class="vocal"></div>
                            <span class="span-after">es peligrosa.</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="contenedor-silabas">
                <div class="silaba pieza" alt="1">
                    <h4>horca</h4>
                </div>
                <div class="silaba pieza" alt="2">
                    <h4>honda</h4>
                </div>
                <div class="silaba pieza" alt="3">
                    <h4>onda</h4>
                </div>
                <div class="silaba pieza" alt="4">
                    <h4>harina</h4>
                </div>
                <div class="silaba pieza" alt="5">
                    <h4>helicóptero</h4>
                </div>
                <div class="silaba pieza" alt="6">
                    <h4>hoja</h4>
                </div>
            </div>
        </div>
    </div>



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
<script type="text/javascript">
    // Validar
    function result_tipo_1_4_25() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (n1 == 1 && n2 == 1 && n3 == 1) {
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