<?php require('../../../tools/var/variables.php'); ?>
          <head>     
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
          <style type="text/css">
            .svg{
                width: 850px;
            }
            .colores img{
              width: 50px;
              margin: 2vh;
              border-radius: 18%;
            }
            #contenedorpuzzle{
            width: 80%;
            margin: 10vh auto;
            }
            .item img{
              width: 250px ;
              margin: 3 20px 0;
              float: left;
              border:solid transparent;           
            }
           .item img:hover{
            border:solid;
            }   
            h5 {
            font-size: 200%;
            }
            .img-principal{
              margin: 5vh auto 0;
            }
            .fila1, .fila2, .fila3{
              margin: 0 auto 2vh;
              width: 1160px;
              box-shadow: 0 0 5px #80808061;
            }
            .container, .content-wrapper{
                margin: 3vh auto 0;
            }
            .fila1 img{
              width: 20vw;
              margin:0 auto;
            }

            @media (max-width: 1200px){
              .container, .content-wrapper{
                margin: 42px auto 0;
            }
            }

            #imgIzquierda li, #imgDerecha li{
                width: 170px;
                height: 105px;
                border: 1px solid silver;
                position: relative;
                padding: 5px 32px;
                float: left;
            }
            #imgIzquierda li:hover,  #imgDerecha li:hover{
                background-color: silver;
            }

            #imgIzquierda img, #imgDerecha img{
                 width: 100px;
                  max-height: 95px;
                  position: absolute;
                  top: 0;
                  bottom: 0;
                  margin: auto;
             

            }
            .campo{
              float: left;
            }
            ul{
              margin: 0;
            }
          </style>
          <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
          </head>
  <?=$titulo?>
<div class="container">
      <div class="row svg">
         
            <div class="campo" id="imgIzquierda">
              
              <ul id="listA">
                <li alt="a"  class="a" id="obj1"><img src="<?= $dir ?>/img/1.png"></li>
                <li alt="e" class="a" id="obj2"><img src="<?= $dir ?>/img/2.png"></li>
                <li alt="i" class="a" id="obj3"><img src="<?= $dir ?>/img/3.png"></li>
                <li alt="o" class="a" id="obj4"><img src="<?= $dir ?>/img/4.png"></li>
                <li alt="u" class="a" id="obj1"><img src="<?= $dir ?>/img/5.png"></li>
              </ul>
          
            </div>
            <div class="campo" id="centro">
              <canvas height="100px" width="850px" id="micanvas"></canvas> 
              </div>
            <div class="campo" id="imgDerecha">
              <ul id="listB">
                
                <li alt="u" class="b" id="obj2"><img src="<?= $dir ?>/img/6.png"></li>
                <li alt="e" class="b" id="obj3"><img src="<?= $dir ?>/img/7.png"></li>
                <li alt="a" class="b" id="obj4"><img src="<?= $dir ?>/img/8.png"></li>
                <li alt="i" class="b" id="obj4"><img src="<?= $dir ?>/img/9.png"></li>
                <li alt="o" class="b" id="obj4"><img src="<?= $dir ?>/img/10.png"></li>
              </ul>
            </div>
 
      </div>
          <div class="row fila2">
                 
          </div>     
</div>
        </section>
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

<script src="../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript">
  var r=0;

         var ul = document.querySelector('#listA');
          for (var i = ul.children.length; i >= 0; i--) {
              ul.appendChild(ul.children[Math.random() * i | 0]);
          }
          var ul = document.querySelector('#listB');
          for (var i = ul.children.length; i >= 0; i--) {
              ul.appendChild(ul.children[Math.random() * i | 0]);
          }

var canvas = document.getElementById("micanvas");
var ctx = canvas.getContext("2d");

$('.a').click(function(){
       var obj1=null;
       var obj2=null;
      var valor= $(this).attr("value");
        if(valor != 1){
             var sitio1=$(this).index();
             $('.a').css({"background-color":"white","border": "solid 1px silver", 
              "box-shadow": "none", "z-index": "0"});

             $(this).css({"background-color":"silver","background-color": "rgba(254, 205, 84, 0.65)","border": "solid white", 
              "box-shadow": "0 0 3px black","z-index": "1"});

              obj1= $(this).attr("alt");
              console.log(obj1);
              ctx.beginPath();
              switch(sitio1){
                case 0:
                      ctx.moveTo(85, 0); 
                  break;
                case 1:
                      ctx.moveTo(255, 0);
                  break;
                case 2:
                      ctx.moveTo(425, 0);
                  break;
                case 3:
                      ctx.moveTo(595, 0);
                  break;
                case 4:
                      ctx.moveTo(765, 0);
                  break;
        }
       valor=1;
     }
      
    $('.b').click(function(){

        var sitio2=$(this).index();
        $('.b').css({"background-color":"white"});
        $(this).css({"background-color":"silver","background-color": "rgba(254, 205, 84, 0.65)", "border": "solid white","box-shadow": "0 0 3px black","z-index": "1"});
              var obj2= $(this).attr("alt");
                console.log(obj2);
                  switch(sitio2){
                    case 0:
                        ctx.lineTo(85, 100);
                      break;
                    case 1:
                        ctx.lineTo(255, 100);
                      break;
                    case 2:
                        ctx.lineTo(425, 100);
                      break;
                    case 3:
                        ctx.lineTo(595, 100);
                      break;
                    case 4:
                        ctx.lineTo(765, 100);
                      break;
                  }
                ctx.strokeStyle = "orange";
                ctx.lineWidth = 5;
                ctx.stroke();
               
 


                    if(obj1==obj2){
                      r++;
                      console.log(r);
                    }
    });
});
                        function result_tipo_1_0_7(){           
                              var  min= $('#Minutos').text();
                              var  seg= $('#Segundos').text();
                              var  milseg= $('#Centesimas').text();
                              var tiempo=min+":"+seg+":"+milseg;

                          if(r==5){                  
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
<script type="text/javascript" src="../../../exercises/comunicacion/1/js/validate.js"></script>