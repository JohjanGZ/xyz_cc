<?php require('../../../tools/var/variables.php'); ?>
          <head>     
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
          
          <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
          </head>
  <?=$titulo?>
  <div class="container">

      <ul class="contenedor-colores">
          <li class="colores" id="blue"><img value="#0083c7" id="f" src="<?= $dir ?>/img/10.jpg"></li>
          <li class="colores" id="red"><img value="#e54d17" id="d" src="<?= $dir ?>/img/11.jpg"></li>
      </ul>
      <div class="row svg">

          <div class="campo" id="imgIzquierda">

              <ul id="listA">
                  <li alt="d" class="a st3"><img src="<?= $dir ?>/img/1.png"></li>
                  <li alt="f" class="a st3"><img src="<?= $dir ?>/img/2.png"></li>
                  <li alt="d" class="a st3"><img src="<?= $dir ?>/img/3.png"></li>
                  <li alt="f" class="a st3"><img src="<?= $dir ?>/img/4.png"></li>
                  <li alt="d" class="a st3"><img src="<?= $dir ?>/img/5.png"></li>
                  <li alt="d" class="a st3"><img src="<?= $dir ?>/img/6.png"></li>

              </ul>
          </div>
          <div class="campo" id="imgDerecha">
              <ul id="listB">
                  <li alt="f" class="a st3"><img src="<?= $dir ?>/img/7.png"></li>
                  <li alt="f" class="a st3"><img src="<?= $dir ?>/img/8.png"></li>
                  <li alt="d" class="a st3"><img src="<?= $dir ?>/img/9.png"></li>
              </ul>
          </div>

      </div>

  </div>
        </section>
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
<script src="../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript">
 var color = 0;
        var r = 0;
        $('.colores img').click(function() {
            color = null;
            var letra = null;
            var espacio = null;
            color = $(this).attr("value");
            letra = $(this).attr("id");
            console.log(letra);

            $('.colores img').css({
                "transform": "scale(1)",
                "border": "none",
                "box-shadow": "none"
            });
            $(this).css({
                "transform": "scale(2)",
                "border": "solid rgb(254, 206, 87)",
                "box-shadow": "0 0 4px #00000057"
            });


            $('.campo ul li').click(function() {

                var lineas = $(this).attr("class");

                espacio = $(this).attr("alt");
                console.log(espacio);
                console.log(lineas);

                if (lineas == "a st3") {
                    $(this).css({
                        "background-color": color
                    });
                    if (letra == espacio) {
                        r++;
                        $(this).removeClass("st3");
                        console.log(r);

                    }


                }
            });
        });

          function result_tipo_1_2_5(){               
            var  min= $('#Minutos').text();
            var  seg= $('#Segundos').text();
            var  milseg= $('#Centesimas').text();
            var tiempo=min+":"+seg+":"+milseg;



                    if(r==9){                  
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
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>