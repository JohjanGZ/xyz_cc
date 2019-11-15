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
                            <span class="span-after">saltó al</span>
                            <div id="2" class="vocal"></div>
                        </div>
                    </li>
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">Ata a ese</span>
                            <div id="3" class="vocal"></div>
                            <span class="span-after">al</span>
                            <div id="4" class="vocal"></div>
                        </div>
                    </li>
                    <li>
                        <div class="caja-palabra">
                            <div id="5" class="vocal"></div>
                            <span class="span-after">se pone su</span>
                            <div id="6" class="vocal"></div>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="contenedor-silabas">
                <div class="silaba pieza" alt="p1">
                    <h4>rana</h4>
                </div>
                <div class="silaba pieza" alt="p2">
                    <h4>río</h4>
                </div>
                <div class="silaba pieza" alt="p3">
                    <h4>burro</h4>
                </div>
                <div class="silaba pieza" alt="p4">
                    <h4>carro</h4>
                </div>
                <div class="silaba pieza" alt="p5">
                    <h4>Raúl</h4>
                </div>
                <div class="silaba pieza" alt="p6">
                    <h4>ropa</h4>
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
    function result_tipo_1_3_44() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (p1 == 1 && p2 == 1 && p3 == 1 && p4 == 1 && p5 == 1 && p6 == 1) {
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