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
            <h4><span></span> </h4>
            <div class="muestra">
                <img src="<?= $dir ?>/img/1.png" class="responsive-img">
                <img src="<?= $dir ?>/img/5.png" class="responsive-img">
                <img src="<?= $dir ?>/img/3.png" class="responsive-img">
            </div>
            <div class="campo" id="palabras">
                <ul class="listA">
                    <li>
                        <div class="box a" alt="n">
                            <img src="<?= $dir ?>/img/1.png" class="responsive-img">
                        </div>
                    </li>
                    <li>
                        <div class="box a" alt="">
                            <img src="<?= $dir ?>/img/2.png" class="responsive-img">
                        </div>
                    </li>
                    <li>
                        <div class="box a" alt="n">
                            <img src="<?= $dir ?>/img/3.png" class="responsive-img">
                        </div>
                    </li>
                    <li>
                        <div class="box a" alt="">
                            <img src="<?= $dir ?>/img/4.png" class="responsive-img">
                        </div>
                    </li>

                </ul>
                <ul class="listB">
                    <li>
                        <div class="box a" alt="n">
                            <img src="<?= $dir ?>/img/5.png" class="responsive-img">
                        </div>
                    </li>
                    <li>
                        <div class="box a" alt="">
                            <img src="<?= $dir ?>/img/6.png" class="responsive-img">
                        </div>
                    </li>
                    <li>
                        <div class="box a" alt="n">
                            <img src="<?= $dir ?>/img/1.png" class="responsive-img">
                        </div>
                    </li>
                    <li>
                        <div class="box a" alt="">
                            <img src="<?= $dir ?>/img/2.png" class="responsive-img">
                        </div>
                    </li>

                </ul>
                <ul class="listC">
                    <li>
                        <div class="box a" alt="">
                            <img src="<?= $dir ?>/img/4.png" class="responsive-img">
                        </div>
                    </li>
                    <li>
                        <div class="box a" alt="n">
                            <img src="<?= $dir ?>/img/3.png" class="responsive-img">
                        </div>
                    </li>
                    <li>
                        <div class="box a" alt="">
                            <img src="<?= $dir ?>/img/6.png" class="responsive-img">
                        </div>
                    </li>
                    <li>
                        <div class="box a" alt="n">
                            <img src="<?= $dir ?>/img/5.png" class="responsive-img">
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
  
<script src="../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript">

</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script>

function result_tipo_1_0_17() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;



    if (r == 6) {
        localStorage.setItem("Nota2-1-12", nota);
        localStorage.setItem("Time2-1-12", tiempo);
        correcto();
    } else {
        incorrecto();
        localStorage.setItem("Nota2-1-12", "0");
        localStorage.setItem("Time2-1-12", tiempo);
    }

}
</script>