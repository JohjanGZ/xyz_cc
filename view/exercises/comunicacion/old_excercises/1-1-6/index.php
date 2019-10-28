<?php require('../../../tools/var/variables.php'); ?>
          <head>     
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
          <style type="text/css">
            #contenedorpuzzle{
                width: 80%;
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
            }

            .fila1, .fila2, .fila3{
                margin: 0 auto 2vh;
                width: 705px;
                box-shadow: 0 0 5px #80808061;
                padding: 15px 50px;
                font-size: 30px;
                border: solid 2px #761b56;
                background: #7b1b5817;
            }
            .container, .content-wrapper{
                margin: 8vh auto 0;
            }
            .palabra{
                padding: 5px;
                border: solid 2px #fcc546;
                border-radius: 5px;
                background: white;
            }
            .palabra:hover{
                border: solid 2px #ff0a0a;
                cursor: pointer;

            }
            @media (max-width: 1200px){
              .container, .content-wrapper{
                  margin: 42px auto 0;
              }
            }
            @media (max-height: 720px){
              .fila1, .fila2, .fila3 {
                    margin: 0 auto 1vh;
                    width: 705px;
                    box-shadow: 0 0 5px #80808061;
                    padding: 0px 50px;
                    font-size: 30px;
                    border: solid 2px #761b56;
                    background: #7b1b5817;
                }
              .container, .content-wrapper {
                  margin: 2vh auto 0;
              }
            }
          </style>
          <link rel="stylesheet" type="text/css" href="../exercises/comunicacion/1/css/styles.css">
          </head>
  <?=$titulo?>
<div class="container">
          <div class="row fila1">
            <div class="item"  id="item1">
                <p><li>Celia va a cenar <span class="palabra" >ceras</span> / <span alt="n" class="palabra">cerezas</span>.</li></p>
            </div>
          </div>
          <div class="row fila2">         
              <div class="item"  id="item1"><p><li>La farmacia tiene <span alt="n" class="palabra">medicinas</span> / <span class="palabra">médicas</span>.</li></p></div>
          </div>
          <div class="row fila3">
              <div class="item"  id="item1"><p><li>Ponte el cinturón en la <span  class="palabra">cabeza</span> / <span alt="n" class="palabra">cintura</span>.</li></p></div>
          </div>              
</div>
        </section>

              <div id="modal1" class="modal">
                  <div class="modal-content">
                  <h4>Respuesta correcta</h4>
                  <center>
                  <img class="materialboxed"  width="80%" src="../exercises/comunicacion/5/img/respuesta.png">
                  </center>
                  </div>
                  <div class="modal-footer">
                  <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
                  </div>
              </div>
<script src="../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript">
  var ul = document.querySelector('.fila1');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}
  var ul = document.querySelector('.fila2');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}
  var ul = document.querySelector('.fila3');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}

  var r=0;
  $('.palabra').click(function(){
    $(this).css({"box-shadow": "inset 0 0 4px 0px rgba(0, 0, 0, 0.53)","border":"solid" , "border-color":"#93ff00"});
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
function result_tipo_2_1_6(){                
                  var  min= $('#Minutos').text();
                  var  seg= $('#Segundos').text();
                  var  milseg= $('#Centesimas').text();
                  var tiempo=min+":"+seg+":"+milseg;

                if(r==3){                  
                    localStorage.setItem("Nota2-1-6","2");
                    localStorage.setItem("Time2-1-6", tiempo);
                    correcto(); 
                }
                else{
                    incorrecto();
                    localStorage.setItem("Nota2-1-6","0");
                    localStorage.setItem("Time2-1-6", tiempo);
                }    
                } 
</script>
<script type="text/javascript" src="../exercises/comunicacion/1/js/validate.js"></script>




