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
                    <li id="obj1" >
                        <div class="box a" alt="">
                            <img src="<?= $dir ?>/img/1.png" class="responsive-img">
                        </div>
                    </li>
                    <li id="obj2" >
                        <div class="box a" alt="">
                            <img src="<?= $dir ?>/img/2.png" class="responsive-img">
                        </div>
                    </li>
                    <li id="obj3" >
                        <div class="box a" alt="n">
                            <img src="<?= $dir ?>/img/3.jpg" class="responsive-img">
                        </div>
                    </li>
                    <li id="obj3" >
                        <div class="box a" alt="">
                            <img src="<?= $dir ?>/img/4.png" class="responsive-img">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <!-- Respuesta -->
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
    function result_tipo_1_6_29() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 1) {
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