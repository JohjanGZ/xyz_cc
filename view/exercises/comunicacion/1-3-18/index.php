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
    <ul class="figuras">
        <li class="formas" id="blue"><img id="f1" src="<?= $dir ?>/img/1.png"></li>
        <li class="formas" id="red"><img id="f2" src="<?= $dir ?>/img/2.png"></li>
        <li class="formas" id="green"><img id="f3" src="<?= $dir ?>/img/3.png"></li>
        <li class="formas" id="purple"><img id="f4" src="<?= $dir ?>/img/4.png"></li>
        <li class="formas" id="purple"><img id="f5" src="<?= $dir ?>/img/5.png"></li>
    </ul>
        <div class="row">
            <center>
                <img src="<?= $dir ?>/img/principal.png" class="responsive-img principal">
            </center>
            <div class="campo" id="palabras">
                <ul id="listA">
                    <li id="obj1"><div class="box" alt="f1">BA</div></li>
                    <li id="obj1"><div class="box" alt="f4">BE</div></li>
                    <li id="obj1"><div class="box" alt="f2">BI</div></li>
                    <li id="obj1"><div class="box" alt="f1">BA</div></li>
                    <li id="obj1"><div class="box" alt="f2">BI</div></li>

                    <li id="obj1"><div class="box" alt="f5">BO</div></li>
                    <li id="obj1"><div class="box" alt="f1">BA</div></li>
                    <li id="obj1"><div class="box" alt="f5">BO</div></li>
                    <li id="obj1"><div class="box" alt="f4">BE</div></li>
                    <li id="obj1"><div class="box" alt="f3">BU</div></li>

                    <li id="obj1"><div class="box" alt="f3">BU</div></li>
                    <li id="obj1"><div class="box" alt="f4">BE</div></li>
                    <li id="obj1"><div class="box" alt="f2">BI</div></li>
                    <li id="obj1"><div class="box" alt="f5">BO</div></li>
                    <li id="obj1"><div class="box" alt="f1">BA</div></li>
                    
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


<script src="../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">

    function result_tipo_1_3_18() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 15) {
            localStorage.setItem("Nota2-1-2", "2");
            localStorage.setItem("Time2-1-2", tiempo);
            correcto();
        }
        else {
            incorrecto();
            localStorage.setItem("Nota2-1-2", "0");
            localStorage.setItem("Time2-1-2", tiempo);
        }
    } 
</script>
