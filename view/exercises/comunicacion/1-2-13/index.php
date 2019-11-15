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
            <div class="campo" id="palabras">
                <ul id="listA">
                    <li>
                        <div class="contenedor-silabas">
                            <div class="silaba pieza" id="toma">
                                <h4>toma</h4>
                            </div>
                            <div class="silaba pieza" id="tito">
                                <h4>tito</h4>
                            </div>
                            <div class="silaba pieza" id="tila">
                                <h4>tila</h4>
                            </div>

                        </div>
                        <div class="caja-palabra">
                            <div id="titox" class="vocal">

                            </div>
                            <div id="tomax" class="vocal">

                            </div>
                            <div id="tilax" class="vocal">

                            </div>
                        </div>

                    </li>
                    <li>
                        <div class="contenedor-silabas2">
                            <div class="silaba pieza" id="te">
                                <h4>té</h4>
                            </div>
                            <div class="silaba pieza" id="toma2">
                                <h4>toma</h4>
                            </div>
                            <div class="silaba pieza" id="leo">
                                <h4>Leo</h4>
                            </div>

                        </div>
                        <div class="caja-palabra">
                            <div id="leox" class="vocal">

                            </div>
                            <div id="tomax2" class="vocal">

                            </div>
                            <div id="tex" class="vocal">

                            </div>
                        </div>

                    </li>
                    <li>
                        <div class="contenedor-silabas3">
                            <div class="silaba pieza" id="pelea">
                                <h4>pelea</h4>
                            </div>
                            <div class="silaba pieza" id="tu">
                                <h4>tu</h4>
                            </div>
                            <div class="silaba pieza" id="topo">
                                <h4>topo</h4>
                            </div>

                        </div>
                        <div class="caja-palabra">
                            <div id="tux" class="vocal">

                            </div>
                            <div id="topox" class="vocal">

                            </div>
                            <div id="peleax" class="vocal">

                            </div>
                        </div>

                    </li>
                </ul>
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
    function result_tipo_1_2_13() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 9) {
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