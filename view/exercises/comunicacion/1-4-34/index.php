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
        <div class="contenedor-ejercicio"> 
            <div class="contenedor-ejemplo contenedor-oraciones">
                   <div class="contenedor-oracion">
                       <span class="span-before">El día es al</span>
                       <img src="<?= $dir ?>/img/1.png" alt="">
                       <span class="span-after"> como la noche es a</span>
                   </div>
                   <div class="contenedor-palabras">
                       <div class="palabra" alt="n">
                           <img src="<?= $dir ?>/img/2.png" >
                       </div>
                       <div class="palabra">
                           <img src="<?= $dir ?>/img/3.png" alt="">
                       </div>
                   </div>
            </div>
            <div class="contenedor-ejemplo contenedor-oraciones">
                   <div class="contenedor-oracion">
                       <span class="span-before">El día es al</span>
                       <img src="<?= $dir ?>/img/4.png" alt="">
                       <span class="span-after"> como la noche es a</span>
                   </div>
                   <div class="contenedor-palabras palabr">
                       <div class="palabra">
                           <img src="<?= $dir ?>/img/5.png">
                       </div>
                       <div class="palabra" alt="n">
                           <img src="<?= $dir ?>/img/6.png" alt="n">
                       </div>
                   </div>
            </div>
            
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_1_4_34() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;
        console.log(r);
        if (r == 2) {
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