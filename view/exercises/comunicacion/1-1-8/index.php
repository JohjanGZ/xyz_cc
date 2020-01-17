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
                        <div class="box" alt="n">
                            <img src="<?= $dir ?>/img/1.png" class="responsive-img">
                        </div>
                        <div id="la" class="vocal"> 

                        </div>
                    </li>
                    <li>
                        <div class="box" alt="">
                            <img src="<?= $dir ?>/img/2.png" class="responsive-img">
                        </div>
                        <div id="le" class="vocal">

                        </div>
                    </li>
                    <li>
                        <div class="box" alt="n">
                            <img src="<?= $dir ?>/img/3.png" class="responsive-img">
                        </div>
                        <div id="li" class="vocal">

                        </div>
                    </li>
                    <li>
                        <div class="box" alt="n">
                            <img src="<?= $dir ?>/img/4.png" class="responsive-img">
                        </div>
                        <div id="lo" class="vocal">

                        </div>
                    </li>
                    <li>
                        <div class="box" alt="n">
                            <img src="<?= $dir ?>/img/5.png" class="responsive-img">
                        </div>
                        <div id="lu" class="vocal">

                        </div>
                    </li>
                </ul>
            </div>
            <div class="contenedor-silabas">
                <div class="silaba pieza" id="la">
                    <h4>La</h4>
                </div>
                <div class="silaba pieza" id="le">
                    <h4>Le</h4>
                </div>
                <div class="silaba pieza" id="li">
                    <h4>Li</h4>
                </div>
                <div class="silaba pieza" id="lo">
                    <h4>Lo</h4>
                </div>
                <div class="silaba pieza" id="lu">
                    <h4>Lu</h4>
                </div>
            </div>
        </div>
    </div>



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
<script type="text/javascript">
    // Validar
    function result_tipo_1_1_8() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (la == 1 && le == 1 && li == 1 && lo == 1 && lu == 1) {
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