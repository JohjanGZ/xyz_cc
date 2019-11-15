<?php require('../../../tools/var/variables.php'); ?>
          <head>     
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
          <style type="text/css">
                #contenedorpuzzle{
                   width: 875px;
                margin: 10vh auto;
                }
                .item img {
                width: 250px;
                margin: 3 20px 0;
                float: left;
                border: solid #cdcdcd;
                border-radius: 20px;
                padding: 28px 74px;
                }
                .item img:hover{
                border:solid #37D3F7;
                }   
                h5 {
                font-size: 200%;
                }
                .img-principal{
                margin: 5vh auto 0;
                }
          </style>
          <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
          </head>
  <?=$titulo?>
<div class="container">
  <center><img class="img-principal" width="35%" src="<?= $dir ?>/img/principal.png"></center>
      	<section id="contenedorpuzzle">
              <div class="row">
              	<div class=""><div class="item" alt="" id="item1"><img src="<?= $dir ?>/img/1.png"></div></div>
              	<div class=""><div class="item"  id="item2"><img alt="n" src="<?= $dir ?>/img/2.png"></div></div>
                <div class=""><div class="item"  id="item2"><img  src="<?= $dir ?>/img/3.png"></div></div>

              </div>
              <div class="row center recibidor" id="recibidor">
              </div>
        </section>
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
<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript">
    var ul = document.querySelector('#contenedorpuzzle .row');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
     ul.appendChild(ul.children[Math.random() * i | 0]);
}
1
  var r=0;
  $('.item img').click(function(){
    $(this).css({"border":"solid" , "border-color":"#37D3F7","background":"#B6ECFF"});
     var element=$(this).attr("alt");
    
      var select=$(this).attr("value");
      if(select!="seleccionado"){

      if(element=="n"){
        r++;
         $(this).attr("value","seleccionado");
      }
      else{
        r--;
         $(this).attr("value","seleccionado");
      }
      console.log(r);
    }
  })

function result_tipo_1_0_5(){               
                  var  min= $('#Minutos').text();
                  var  seg= $('#Segundos').text();
                  var  milseg= $('#Centesimas').text();
                  var tiempo=min+":"+seg+":"+milseg;

        if(r==1)
                {
                    localStorage.setItem("Nota<?=$cod?>",nota);
                    localStorage.setItem("Time<?=$cod?>", tiempo);
                    correcto(); 
                }
                else {
                    incorrecto();
                    localStorage.setItem("Nota<?=$cod?>","0");
                    localStorage.setItem("Time<?=$cod?>", tiempo);  
                }    
            } 
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>