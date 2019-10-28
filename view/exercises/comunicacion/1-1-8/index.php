<?php require('../../../tools/var/variables.php'); ?>
          <head>     
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
          <style type="text/css">
            .svg{
                  width: 554px;
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
                border: 3px solid silver;
                position: relative;
                padding: 5px 32px;
                float: left;
                margin: 5px;
                border-radius: 15px;
            }
            #imgIzquierda li:hover,  #imgDerecha li:hover{
                border: solid #37D3F7;
            }
            #imgIzquierda img, #imgDerecha img{
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
            #obj4 img{
              width: 110px;
              margin: 30px auto 0;
            }
              #obj10 img{
                width: 25px;
                margin: 5px 38px;
            }
            #obj12 img{
                margin: 5px 34px;
            }
            #obj11 img{
              width: 100px;
              margin: 15px 0;
            }
            @media (max-height: 680px ){
                .svg{
                width: 1085px;
               
                }

                }
          </style>
          <link rel="stylesheet" type="text/css" href="../../../exercises/comunicacion/1-1-8/css/styles.css">
          </head>
  <?=$titulo?>
<div class="container">
      <div class="row svg">
         
            <div class="campo" id="imgIzquierda">
              
              <ul id="listA">
                <li alt="n"  class="a" id="obj1"><img src="../../../exercises/comunicacion/1-1-8/img/1.png"></li>
                <li alt="" class="a" id="obj2"><img src="../../../exercises/comunicacion/1-1-8/img/2.png"></li>
                <li alt="" class="a" id="obj3"><img src="../../../exercises/comunicacion/1-1-8/img/3.png"></li>
                <li alt="" class="a" id="obj4"><img  src="../../../exercises/comunicacion/1-1-8/img/4.png"></li>
                <li alt="" class="a" id="obj1"><img src="../../../exercises/comunicacion/1-1-8/img/5.png"></li>
                <li alt="n" class="a" id="obj1"><img src="../../../exercises/comunicacion/1-1-8/img/6.png"></li>
              </ul> 
            </div>
            <div class="campo" id="imgDerecha">
              <ul id="listB">    
                <li alt="n" class="a" id="obj7"><img src="../../../exercises/comunicacion/1-1-8/img/7.png"></li>
                <li alt="" class="a" id="obj8"><img src="../../../exercises/comunicacion/1-1-8/img/8.png"></li>
                <li alt="n" class="a" id="obj9"><img src="../../../exercises/comunicacion/1-1-8/img/9.png"></li>
                <li alt="" class="a" id="obj10"><img src="../../../exercises/comunicacion/1-1-8/img/10.png"></li>
                <li alt="" class="a" id="obj11"><img src="../../../exercises/comunicacion/1-1-8/img/11.png"></li>
                <li alt="n" class="a" id="obj12"><img src="../../../exercises/comunicacion/1-1-8/img/12.png"></li>
              </ul>
            </div>
 
      </div>
   
</div>
        </section>
              <div id="modal1" class="modal">
                  <div class="modal-content">
                  <h4>Respuesta correcta</h4>
                  <center>
                  <img class="materialboxed"  width="80%" src="../../../exercises/comunicacion/1-1-8/img/respuesta.png">
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

          function result_tipo_2_1_8(){               
                  var  min= $('#Minutos').text();
                  var  seg= $('#Segundos').text();
                  var  milseg= $('#Centesimas').text();
                  var tiempo=min+":"+seg+":"+milseg;
 


                          if(r==5){                  
                              localStorage.setItem("Nota2-1-8","2");
                              localStorage.setItem("Time2-1-8", tiempo);
                              correcto(); 
                          }
                          else{
                              incorrecto();
                              localStorage.setItem("Nota2-1-8","0");
                              localStorage.setItem("Time2-1-8", tiempo);
                          }    
                  
                      }
</script>
<script type="text/javascript" src="../../../exercises/comunicacion/1-1-8/js/validate.js"></script>