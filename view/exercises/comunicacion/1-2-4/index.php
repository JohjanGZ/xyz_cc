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
                <center>
                    <div class="box-img">
                        <img src="<?= $dir ?>/img/principal.png" class="responsive-img">
                    </div>
                </center>
                <ul id="listA">
                    <li>
                        <span class="a" alt="">ha</span>
                        <span class="a" alt="n">da</span>
                    </li>
                    <li>
                        <span class="a" alt="n">da</span>
                        <span class="a" alt="n">do</span>
                    </li>
                    <li>
                        <span class="a" alt="">po</span>
                        <span class="a" alt="">ma</span>
                        <span class="a" alt="n">da</span>
                    </li>
                    <li>
                        <span class="a" alt="">sa</span>
                        <span class="a" alt="">ba</span>
                        <span class="a" alt="n">do</span>
                    </li>
                    <li>
                        <span class="a" alt="">mo</span>
                        <span class="a" alt="n">de</span>
                        <span class="a" alt="">lo</span>
                    </li>
                    <li>
                        <span class="a" alt="">a</span>
                        <span class="a" alt="n">di</span>
                        <span class="a" alt="">ós</span>
                    </li>
                    <li>
                        <span class="a" alt="n">do</span>
                        <span class="a" alt="">y</span>
                    </li>
                    <li>
                        <span class="a" alt="n">du</span>
                        <span class="a" alt="">e</span>
                        <span class="a" alt="">lo</span>
                    </li>
                    <li>
                        <span class="a" alt="n">de</span>
                        <span class="a" alt="n">do</span>
                    </li>
                    <li>
                        <span class="a" alt="n">du</span>
                        <span class="a" alt="">e</span>
                        <span class="a" alt="">le</span>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
    <script type="text/javascript">

        // Formulario - Registrados

          function result_tipo_1_2_4(){               
                  var  min= $('#Minutos').text();
                  var  seg= $('#Segundos').text();
                  var  milseg= $('#Centesimas').text();
                  var tiempo=min+":"+seg+":"+milseg;
 


                if(r==12){                  
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