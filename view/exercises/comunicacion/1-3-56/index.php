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
                <li alt="falda"  class="a" id="obj1"><center><img src="<?= $dir ?>/img/1.png"></center></li>
                <li alt="sofa" class="a" id="obj2"><center><img src="<?= $dir ?>/img/2.png"></center></li>
                <li alt="delfin" class="a" id="obj3"><center><img src="<?= $dir ?>/img/3.png"></center></li>
                <li alt="foca" class="a" id="obj4"><center><img src="<?= $dir ?>/img/4.png"></center></li>
                <li alt="fuente" class="a" id="obj5"><center><img src="<?= $dir ?>/img/5.png"></center></li>
              </ul>
          
            </div>
            <div class="campo" id="centro">
              <canvas height="100px" width="850px" id="micanvas"></canvas> 
              </div>
            <div class="campo" id="imgDerecha">
              <ul id="listB">         
                <li alt="falda" class="b" id="obj6"><center><span>Falda</span></center></li>
                <li alt="sofa" class="b" id="obj7"><center><span>Sofá</span></center></li>
                <li alt="delfin" class="b" id="obj8"><center><span>Delfín</span></center></li>
                <li alt="foca" class="b" id="obj9"><center><span>Foca</span></center></li>
                <li alt="fuente" class="b" id="obj10"><center><span>Fuente</span></center></li>
              </ul>
            </div>
 
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


<script src="../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_1_2_31() {
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