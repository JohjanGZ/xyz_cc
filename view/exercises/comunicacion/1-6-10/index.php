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
                        <div class="box">
                            <img src="<?= $dir ?>/img/1.png" class="responsive-img">
                        </div>
                        <div class="caja-palabra">
                            <span class="span-before">Un mo</span>
                            <div id="1" class="vocal"></div>
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img src="<?= $dir ?>/img/2.png" class="responsive-img">
                        </div>
                        <div class="caja-palabra">
                            <span class="span-before">Unos mo</span>
                            <div id="2" class="vocal"></div>
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img src="<?= $dir ?>/img/3.png" class="responsive-img">
                        </div>
                        <div class="caja-palabra">
                            <span class="span-before">Una mu</span>
                            <div id="3" class="vocal"></div>
                            <span class="span-after">ca</span>
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img src="<?= $dir ?>/img/4.png" class="responsive-img">
                        </div>
                        <div class="caja-palabra">
                            <span class="span-before">Unas mu</span>
                            <div id="4" class="vocal"></div>
                            <span class="span-after">cas</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="contenedor-silabas">
                <div class="silaba pieza" alt="ño">
                    <h4>ño</h4>
                </div>
                <div class="silaba pieza" alt="ños">
                    <h4>ños</h4>
                </div>
                <div class="silaba pieza" alt="ñe">
                    <h4>ñe</h4>
                </div>
                <div class="silaba pieza" alt="ñe">
                    <h4>ñe</h4>
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
    function result_tipo_1_6_10() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (ño == 1 && ños == 1 && ñe == 2) {
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