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
                            <span class="span-before">go</span>
                            <div id="1" class="vocal"></div>
                            <img src="<?= $dir ?>/img/1.png" class="img-min">
                        </div>
                    </li>
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">ja</span>
                            <div id="2" class="vocal"></div>
                            <img src="<?= $dir ?>/img/2.png" class="img-min">
                        </div>
                    </li>
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">to</span>
                            <div id="3" class="vocal"></div>
                            <img src="<?= $dir ?>/img/3.png" class="img-min">
                        </div>
                    </li>
        
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">tie</span>
                            <div id="4" class="vocal"></div>
                            <img src="<?= $dir ?>/img/4.png" class="img-min">
                        </div>
                    </li>
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">ca</span>
                            <div id="5" class="vocal"></div>
                            <span class="span-after">ta</span>
                            <img src="<?= $dir ?>/img/5.png" class="img-min">
                        </div>
                    </li>
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">guita</span>
                            <div id="6" class="vocal"></div>
                            <img src="<?= $dir ?>/img/6.png" class="img-min">
                        </div>
                    </li>

                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">bu</span>
                            <div id="7" class="vocal"></div>
                            <img src="<?= $dir ?>/img/7.png" class="img-min">
                        </div>
                    </li>
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">pe</span>
                            <div id="8" class="vocal"></div>
                            <img src="<?= $dir ?>/img/8.png" class="img-min">
                        </div>
                    </li>
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">ca</span>
                            <div id="9" class="vocal"></div>
                            <img src="<?= $dir ?>/img/9.png" class="img-min">
                        </div>
                    </li>

                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">zo</span>
                            <div id="10" class="vocal"></div>
                            <img src="<?= $dir ?>/img/10.png" class="img-min">
                        </div>
                    </li>
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">ca</span>
                            <div id="11" class="vocal"></div>
                            <span class="span-after">sel</span>
                            <img src="<?= $dir ?>/img/11.png" class="img-min">
                        </div>
                    </li>
                    <li>
                        <div class="caja-palabra">
                            <span class="span-before">piza</span>
                            <div id="12" class="vocal"></div>
                            <img src="<?= $dir ?>/img/12.png" class="img-min">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="contenedor-silabas">
                <div class="silaba pieza" alt="rro">
                    <h4>rro</h4>
                </div>
                <div class="silaba pieza" alt="rra">
                    <h4>rra</h4>
                </div>
                <div class="silaba pieza" alt="rre">
                    <h4>rre</h4>
                </div>
                <div class="silaba pieza" alt="rra">
                    <h4>rra</h4>
                </div>
                <div class="silaba pieza" alt="rre">
                    <h4>rre</h4>
                </div>
                <div class="silaba pieza" alt="rra">
                    <h4>rra</h4>
                </div>
                <div class="silaba pieza" alt="rro">
                    <h4>rro</h4>
                </div>
                <div class="silaba pieza" alt="rro">
                    <h4>rro</h4>
                </div>
                <div class="silaba pieza" alt="rro">
                    <h4>rro</h4>
                </div>
                <div class="silaba pieza" alt="rro">
                    <h4>rro</h4>
                </div>
                <div class="silaba pieza" alt="rru">
                    <h4>rru</h4>
                </div>
                <div class="silaba pieza" alt="rra">
                    <h4>rra</h4>
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
    function result_tipo_1_3_41() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (rra == 4 && rre == 2 && rro == 5 && rru == 1) {
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