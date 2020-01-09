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
                <li alt="uno"  class="a" id="obj1"><center><img src="<?= $dir ?>/img/uno.png"></center></li>
                <li alt="dos" class="a" id="obj2"><center><img src="<?= $dir ?>/img/dos.png"></center></li>
                <li alt="tres" class="a" id="obj3"><center><img src="<?= $dir ?>/img/tres.png"></center></li>
              </ul>
          
            </div>
            <div class="campo" id="centro">
              <canvas height="100px" width="850px" id="micanvas"></canvas> 
              </div>
            <div class="campo" id="imgDerecha">
              <ul id="listB">         
                <li alt="uno" class="b" id="obj6"><center><span>Flor</span></center></li>
                <li alt="tres" class="b" id="obj7"><center><span>Perrito</span></center></li>
                <li alt="dos" class="b" id="obj8"><center><span>Araña</span></center></li>
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


<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_2_1_5() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 3) {
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