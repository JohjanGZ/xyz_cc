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
                <li alt="1"  class="a" id="obj1"><h5>9 centenas, 7 decenas y 3 unidades</h5></li>
                <li alt="2" class="a" id="obj2"><h5>8 centenas, 6 decenas y 4 unidades</h5></li>
                <li alt="3" class="a" id="obj3"><h5>5 centenas, 2 decenas y 9 unidades</h5></li>
                <li alt="4" class="a" id="obj4"><h5>6 centenas, 9 decenas y 8 unidades</h5></li>
              </ul>
          
            </div>
            <div class="campo" id="centro">
              <canvas height="100px" width="1000px" id="micanvas"></canvas> 
              </div>
            <div class="campo" id="imgDerecha">
              <ul id="listB">
                
                <li alt="4" class="b" id="obj2"><h5>698</h5></li>
                <li alt="3" class="b" id="obj3"><h5>529</h5></li>
                <li alt="2" class="b" id="obj4"><h5>864</h5></li>
                <li alt="1" class="b" id="obj4"><h5>973</h5></li>
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
                  <img class="materialboxed"  width="80%" src="img/2/respuesta.png">
                  </center>
                  </div>
                  <div class="modal-footer">
                  <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
                  </div>
              </div>

<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
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
                      ctx.moveTo(120, 0); 
                  break;
                case 1:
                      ctx.moveTo(375, 0);
                  break;
                case 2:
                      ctx.moveTo(620, 0);
                  break;
                case 3:
                      ctx.moveTo(875, 0);
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
                        ctx.lineTo(120, 100);
                      break;
                    case 1:
                        ctx.lineTo(375, 100);
                      break;
                    case 2:
                        ctx.lineTo(620, 100);
                      break;
                    case 3:
                        ctx.lineTo(875, 100);
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
                        function result_tipo_2_2_2(){           
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