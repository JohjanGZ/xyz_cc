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
                    <li class="box-img">
                        <div class="box" alt="n">
                            <img src="<?= $dir ?>/img/2.png" class="responsive-img">
                        </div>
                        <div class="vocal">
                            <p class="a" alt="">A</p>
                            <p class="a" alt="">E</p>
                            <p class="a" alt="">I</p>
                            <p class="a" alt="n">O</p>
                            <p class="a" alt="">U</p>
                        </div>
                    </li>
                    <li class="box-img">
                        <div class="box" alt="">
                            <img src="<?= $dir ?>/img/3.png" class="responsive-img">
                        </div>
                        <div class="vocal">
                            <p class="a" alt="n">A</p>
                            <p class="a" alt="">E</p>
                            <p class="a" alt="">I</p>
                            <p class="a" alt="">O</p>
                            <p class="a" alt="">U</p>
                        </div>
                    </li>
                    <li class="box-img">
                        <div class="box" alt="n">
                            <img src="<?= $dir ?>/img/4.png" class="responsive-img">
                        </div>
                        <div class="vocal">
                            <p class="a" alt="">A</p>
                            <p class="a" alt="n">E</p>
                            <p class="a" alt="">I</p>
                            <p class="a" alt="">O</p>
                            <p class="a" alt="">U</p>
                        </div>
                    </li>
                    <li class="box-img">
                        <div class="box" alt="n">
                            <img src="<?= $dir ?>/img/5.png" class="responsive-img">
                        </div>
                        <div class="vocal">
                            <p class="a" alt="">A</p>
                            <p class="a" alt="">E</p>
                            <p class="a" alt="n">I</p>
                            <p class="a" alt="">O</p>
                            <p class="a" alt="">U</p>
                        </div>
                    </li>
                    <li class="box-img">
                        <div class="box" alt="n">
                            <img src="<?= $dir ?>/img/6.png" class="responsive-img">
                        </div>
                        <div class="vocal">
                            <p class="a" alt="">A</p>
                            <p class="a" alt="">E</p>
                            <p class="a" alt="">I</p>
                            <p class="a" alt="">O</p>
                            <p class="a" alt="n">U</p>
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
              <img class="materialboxed"  width="80%" src="<?= $dir ?>/img/respuesta.png">
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
    function result_tipo_1_0_14() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 5) {
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