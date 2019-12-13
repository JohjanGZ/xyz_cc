<?php require('../../../tools/var/variables.php'); ?>
          <head>     
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
          <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
          </head>
  <?=$titulo?>
<div class="container">
      <div class="row svg">
         
            <div class="campo" id="imgIzquierda">
              
              <ul id="listA">
                <li alt="1"  class="a" id="obj1"><img src="img/16/imagen1.png" alt=""></li>
                <li alt="2" class="a" id="obj2"><img src="img/16/imagen2.png" alt=""></li>
                <li alt="3" class="a" id="obj3"><img src="img/16/imagen3.png" alt=""></li>
                <li alt="4" class="a" id="obj4"><img src="img/16/imagen4.png" alt=""></li>
              </ul>
          
            </div>
            <div class="campo" id="centro">
              <canvas height="100px" width="800px" id="micanvas"></canvas> 
              </div>
            <div class="campo" id="imgDerecha">
              <ul id="listB">
                
                <li alt="1" class="b" id="obj2"><img src="img/16/res1.png" alt=""></li>
                <li alt="2" class="b" id="obj3"><img src="img/16/res2.png" alt=""></li>
                <li alt="3" class="b" id="obj4"><img src="img/16/res3.png" alt=""></li>
                <li alt="4" class="b" id="obj4"><img src="img/16/res4.png" alt=""></li>
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
                  <img class="materialboxed"  width="80%" src="img/16/respuesta.png">
                  </center>
                  </div>
                  <div class="modal-footer">
                  <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
                  </div>
              </div>

<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript">

    var ul = document.querySelector('#listA');
    for (var i = ul.children.length; i >= 0; i--) {
        ul.appendChild(ul.children[Math.random() * i | 0]);
    }
    var ul = document.querySelector('#listB');
    for (var i = ul.children.length; i >= 0; i--) {
        ul.appendChild(ul.children[Math.random() * i | 0]);
    }

  var r=0;

var canvas = document.getElementById("micanvas");
var ctx = canvas.getContext("2d");

$('.a').click(function(){
      var obj1=null, obj2=null;
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
                      ctx.moveTo(100, 0); 
                  break;
                case 1:
                      ctx.moveTo(300, 0);
                  break;
                case 2:
                      ctx.moveTo(500, 0);
                  break;
                case 3:
                      ctx.moveTo(700, 0);
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
                        ctx.lineTo(100, 100);
                      break;
                    case 1:
                        ctx.lineTo(300, 100);
                      break;
                    case 2:
                        ctx.lineTo(500, 100);
                      break;
                    case 3:
                        ctx.lineTo(700, 100);
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
                        function result_tipo_2_2_16(){           
                              var  min= $('#Minutos').text();
                              var  seg= $('#Segundos').text();
                              var  milseg= $('#Centesimas').text();
                              var tiempo=min+":"+seg+":"+milseg;

                          if(r==4){                  
                              localStorage.setItem("Nota<?=$cod?>",nota);
                              localStorage.setItem("Time<?=$cod?>", tiempo);
                              correcto(); 
                              console.log(r)
                          }
                          else{
                            console.log(r)
                              incorrecto();
                              localStorage.setItem("Nota<?=$cod?>","0");
                              localStorage.setItem("Time<?=$cod?>", tiempo);
                          }    
                        } 
</script>
<script type="text/javascript" src="../../../exercises/comunicacion/1/js/validate.js"></script>