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
                        <div class="caja-palabra">
                            <span class="span-before">PI</span>
                            <div id="la" class="vocal">

                            </div>
                        </div>

                    </li>
                    <li>
                        <div class="box" alt="">
                            <img src="<?= $dir ?>/img/2.png" class="responsive-img">
                        </div>
                        <div class="caja-palabra">
                            <span class="span-before">PA</span>
                            <div id="la2" class="vocal">

                            </div>
                        </div>

                    </li>
                    <li>
                        <div class="box" alt="n">
                            <img src="<?= $dir ?>/img/3.png" class="responsive-img">
                        </div>
                        <div class="caja-palabra">
                            <span class="span-before">PA</span>
                            <div id="le" class="vocal">

                            </div>
                            <span class="span-after">TA</span>
                        </div>

                    </li>
                    <li>
                        <div class="box" alt="n">
                            <img src="<?= $dir ?>/img/4.png" class="responsive-img">
                        </div>
                        <div class="caja-palabra">
                            <span class="span-before">PA</span>
                            <div id="lo" class="vocal">

                            </div>
                            <span class="span-after">MA</span>
                        </div>

                    </li>
                    <li>
                        <div class="box" alt="n">
                            <img src="<?= $dir ?>/img/5.png" class="responsive-img">
                        </div>
                        <div class="caja-palabra">

                            <div id="lo2" class="vocal">

                            </div>
                            <span class="span-after">MA</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="contenedor-silabas">
                <div class="silaba pieza" id="laa">
                    <h4>La</h4>
                </div>
                <div class="silaba pieza" id="laa2">
                    <h4>La</h4>
                </div>
                <div class="silaba pieza" id="lee">
                    <h4>Le</h4>
                </div>
                <div class="silaba pieza" id="loo">
                    <h4>Lo</h4>
                </div>
                <div class="silaba pieza" id="loo2">
                    <h4>Lo</h4>
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


<script src="../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_1_1_16() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (la == 1 && la2 == 1 && le == 1 && lo == 1 && lo2 == 1) {
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