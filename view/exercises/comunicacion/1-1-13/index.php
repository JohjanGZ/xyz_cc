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
      <div class="row svg">
         
            <div class="campo" id="imgIzquierda">
              
              <ul id="listA">
                <li alt="mano"  class="a" id="obj1"><center><img src="<?= $dir ?>/img/1.png"></center></li>
                <li alt="micro" class="a" id="obj2"><center><img src="<?= $dir ?>/img/2.png"></center></li>
                <li alt="mu" class="a" id="obj3"><center><img src="<?= $dir ?>/img/3.png"></center></li>
                <li alt="mesa" class="a" id="obj4"><center><img src="<?= $dir ?>/img/4.png"></center></li>
                <li alt="moto" class="a" id="obj5"><center><img src="<?= $dir ?>/img/5.png"></center></li>
              </ul>
          
            </div>
            <div class="campo" id="centro">
              <canvas height="100px" width="850px" id="micanvas"></canvas> 
              </div>
            <div class="campo" id="imgDerecha">
              <ul id="listB">         
                <li alt="mano" class="b" id="obj6"><center><span>Mano</span></center></li>
                <li alt="micro" class="b" id="obj7"><center><span>Microondas</span></center></li>
                <li alt="mu" class="b" id="obj8"><center><span>Muñeca</span></center></li>
                <li alt="mesa" class="b" id="obj9"><center><span>Mesa</span></center></li>
                <li alt="moto" class="b" id="obj10"><center><span>Moto</span></center></li>
              </ul>
            </div>
 
      </div>
          <div class="row fila2">
                 
          </div>     
</div>
    <!-- Respuesta -->
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
    function result_tipo_1_1_13() {
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