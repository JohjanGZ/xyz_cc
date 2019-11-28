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
                            <div id="1" class="vocal"></div>
                            <span class="span-after">, ¿cómo estas?.</span>
                        </div>
                    </li>
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">La</span>
                            <div id="2" class="vocal"></div>
                            <span class="span-after">es de agua.</span>
                        </div>
                    </li>
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">La</span>
                            <div id="3" class="vocal"></div>
                            <span class="span-after">es un animal marino.</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="contenedor-silabas">
                <div class="silaba pieza" alt="1">
                    <h4>hola</h4>
                </div>
                <div class="silaba pieza" alt="2">
                    <h4>ola</h4>
                </div>
                <div class="silaba pieza" alt="3">
                    <h4>orca</h4>
                </div>
                <div class="silaba pieza" alt="4">
                    <h4>honda</h4>
                </div>
                <div class="silaba pieza" alt="5">
                    <h4>Hipopótamo </h4>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_1_4_26() {
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