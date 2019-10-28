<?php require('../../../tools/var/variables.php'); ?>
          <head>     
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
          <style type="text/css">
            .fila{
                  width: 554px;
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
            #imagenes li{
                width: 170px;
                height: 105px;
                border: 3px solid silver;
                position: relative;
                padding: 5px 32px;
                float: left;
                margin: 5px;
                border-radius: 15px;
            }
            #imagenes li:hover{
                border: solid #37D3F7;
            }
            #imagenes img{
                 width: auto;
                  max-height: 95px;
                  position: absolute;
                  top: 0;
                  bottom: 0;
                 
            }
            .campo{
              float: left;
            }
            ul{
              margin: 0;
            }
            #obj2 img{
              width: 100px;
              top: 20px;
            }
            @media (max-height: 680px ){
                .fila{
                width: 1085px;
               
                }

            }
          </style>
          <link rel="stylesheet" type="text/css" href="../../../exercises/comunicacion/1-1-9/css/styles.css">
          </head>
  <?=$titulo?>
<div class="container">
      <div class="row fila">         
            <div class="campo" id="imagenes">              
              <ul id="listA">
                <li alt="n"  class="a" id="obj1"><img src="../../../exercises/comunicacion/1-1-9/img/1.png"></li>
                <li alt="" class="a" id="obj2"><img src="../../../exercises/comunicacion/1-1-9/img/2.png"></li>
                <li alt="" class="a" id="obj3"><img src="../../../exercises/comunicacion/1-1-9/img/3.png"></li>
                <li alt="" class="a" id="obj4"><img  src="../../../exercises/comunicacion/1-1-9/img/4.png"></li>
                <li alt="" class="a" id="obj5"><img src="../../../exercises/comunicacion/1-1-9/img/5.png"></li>
                <li alt="n" class="a" id="obj6"><img src="../../../exercises/comunicacion/1-1-9/img/6.png"></li>
              </ul> 
            </div>
      </div>
   
</div>
        </section>
              <div id="modal1" class="modal">
                  <div class="modal-content">
                  <h4>Respuesta correcta</h4>
                  <center>
                  <img class="materialboxed"  width="80%" src="../../../exercises/comunicacion/1-1-9/img/respuesta.png">
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

  var r=0;
  $('.a').click(function(){

    $(this).css({"border":"solid" , "border-color":"#37D3F7", "background":"#B6ECFF"});
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

          function result_tipo_2_1_9(){               
                  var  min= $('#Minutos').text();
                  var  seg= $('#Segundos').text();
                  var  milseg= $('#Centesimas').text();
                  var tiempo=min+":"+seg+":"+milseg;
 


                          if(r==3){                  
                              localStorage.setItem("Nota2-1-9","2");
                              localStorage.setItem("Time2-1-9", tiempo);
                              correcto(); 
                          }
                          else{
                              incorrecto();
                              localStorage.setItem("Nota2-1-9","0");
                              localStorage.setItem("Time2-1-9", tiempo);
                          }    
                  
                      }
</script>
<script type="text/javascript" src="../../../exercises/comunicacion/1-1-9/js/validate.js"></script>