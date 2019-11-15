<?php require('../../../tools/var/variables.php'); ?>
          <head>     
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
          <style type="text/css">
            #contenedorpuzzle{
            width: 980px;
            margin: 10vh auto;
            }
            .item img{
              width: 100px ;
              margin: 3 20px 0;
              float: left;
              border:solid transparent;
              border-radius:80%;
            }
           .item img:hover{
            border:solid;
            }   
            h5 {
            font-size: 200%;
            width: 85%;
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
              	<div class=""><div class="item" id="item3"><img src="<?= $dir ?>/img/3.png"></div></div>
                <div class=""><div class="item" alt="n" id="item4"><img alt="n" src="<?= $dir ?>/img/4.png"></div></div>
                <div class=""><div class="item" id="item5"><img src="<?= $dir ?>/img/5.png"></div></div>
                <div class=""><div class="item" alt="n" id="item6"><img alt="n" src="<?= $dir ?>/img/6.png"></div></div>
                <div class=""><div class="item" alt="n" id="item7"><img alt="n" src="<?= $dir ?>/img/7.png"></div></div>
                <div class=""><div class="item" id="item8"><img src="<?= $dir ?>/img/8.png"></div></div>
                <div class=""><div class="item" alt="n" id="item9"><img alt="n" src="<?= $dir ?>/img/9.png"></div></div>
                <div class=""><div class="item" alt="n" id="item10"><img alt="n" src="<?= $dir ?>/img/10.png"></div></div>
                <div class=""><div class="item" alt="n" id="item11"><img alt="n" src="<?= $dir ?>/img/11.png"></div></div>
                <div class=""><div class="item" id="item12"><img src="<?= $dir ?>/img/12.png"></div></div>
                <div class=""><div class="item" id="item13"><img src="<?= $dir ?>/img/13.png"></div></div>

                <div class=""><div class="item" alt="n" id="item15"><img alt="n" src="<?= $dir ?>/img/15.png"></div></div>
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
<script type="text/javascript" src="<?= $dir ?>/validate.js"></script>

<script type="text/javascript">
    var ul = document.querySelector('#contenedorpuzzle .row');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
     ul.appendChild(ul.children[Math.random() * i | 0]);
}

  var r=0;
  $('.item img').click(function() {
    $(this).css({"filter":"brightness(0.8)", "border":"solid" , "border-color":"#93ff00"});
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

function result_tipo_1_2_27(){
                
                  var  min= $('#Minutos').text();
                  var  seg= $('#Segundos').text();
                  var  milseg= $('#Centesimas').text();
                  var tiempo=min+":"+seg+":"+milseg;

                        if(r==8)
                {
                   
                    localStorage.setItem("Nota<?= $dir ?>","2");
                    localStorage.setItem("Time<?= $dir ?>", tiempo);
                    correcto(); 

                }

                else {

                    incorrecto();
                    localStorage.setItem("Nota<?= $dir ?>","0");
                    localStorage.setItem("Time<?= $dir ?>", tiempo);
                   
                }    
            } 
</script>




