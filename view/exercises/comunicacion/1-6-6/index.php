<?php require('../../../tools/var/variables.php'); ?>
          <head>     
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
          <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
          </head>
  
  <?=$titulo?>
    <div class="container">
        <div class="row">
            <div class="campo" id="palabras">
                <ul id="listA">
                    <li>
                        <img src="<?= $dir ?>/img/1.png" class="responsive-img">
                        <span class="a" alt="n">ña</span>
                        <span class="a" alt="">ñe</span>
                        <span class="a" alt="">ñi</span>
                        <span class="a" alt="">ño</span>
                        <span class="a" alt="">ñu</span>
                    </li>
                    <li>
                        <img src="<?= $dir ?>/img/2.png" class="responsive-img">
                        <span class="a" alt="">ña</span>
                        <span class="a" alt="">ñe</span>
                        <span class="a" alt="n">ñi</span>
                        <span class="a" alt="">ño</span>
                        <span class="a" alt="">ñu</span>
                    </li>
                </ul>
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
<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
    <script type="text/javascript">


        // Formulario - Registrados

          function result_tipo_1_6_6(){               
                  var  min= $('#Minutos').text();
                  var  seg= $('#Segundos').text();
                  var  milseg= $('#Centesimas').text();
                  var tiempo=min+":"+seg+":"+milseg;
              if(r==2){                  
                  localStorage.setItem("Nota<?=$cod?>",nota);
                  localStorage.setItem("Time<?=$cod?>", tiempo);
                  correcto(); 
              }
              else{
                  incorrecto();
                  localStorage.setItem("Nota<?=$cod?>","0");
                  localStorage.setItem("Time<?=$cod?>", tiempo);
              }    
        
          }
     
</script>
<script type="text/javascript" src="../../../exercises/comunicacion/1-0-9/js/validate.js"></script>