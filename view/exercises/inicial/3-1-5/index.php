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
              border-radius:10%;
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
                width: 430px;
                box-shadow: 0 0 5px #80808061;
            }
            .container, .content-wrapper {
                margin: 10vh auto 0;
            }
            @media (max-width: 1200px){
              .container, .content-wrapper {
                margin: 42px auto 0;
            }
            }
          </style>
          <link rel="stylesheet" type="text/css" href="../../../exercises/inicial/3-1-5/css/styles.css">
          </head>
  <?=$titulo?>
        <div class="container">         
              <div class="row fila1">
                  <div class="item"  id="item1"><img  src="../../../exercises/inicial/3-1-5/img/1.png"></div>
                  <div class="item"  id="item1"><img  alt="n" src="../../../exercises/inicial/3-1-5/img/2.png"></div>
                  <div class="item"  id="item1"><img  src="../../../exercises/inicial/3-1-5/img/1.png"></div>                      
              </div>
              <div class="row fila2">
                  <div class="item"  id="item1"><img  src="../../../exercises/inicial/3-1-5/img/4.png"></div>
                  <div class="item"  id="item1"><img  alt="n" src="../../../exercises/inicial/3-1-5/img/3.png"></div>
                  <div class="item"  id="item1"><img  src="../../../exercises/inicial/3-1-5/img/4.png"></div>        
              </div>
              <div class="row fila3">
                  <div class="item"  id="item1"><img  src="../../../exercises/inicial/3-1-5/img/5.png"></div>
                  <div class="item"  id="item1"><img  alt="n" src="../../../exercises/inicial/3-1-5/img/6.png"></div>
                  <div class="item"  id="item1"><img  src="../../../exercises/inicial/3-1-5/img/5.png"></div>  
              </div>              
        </div>

              <div id="modal1" class="modal">
                  <div class="modal-content">
                  <h4>Respuesta correcta</h4>
                  <center>
                  <img class="materialboxed"  width="80%" src="../../../exercises/inicial/3-1-5/img/respuesta.png">
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
function result_tipo_2_1_5(){                
                  var  min= $('#Minutos').text();
                  var  seg= $('#Segundos').text();
                  var  milseg= $('#Centesimas').text();
                  var tiempo=min+":"+seg+":"+milseg;

                if(r==3){                  
                    localStorage.setItem("Nota2-1-5","2");
                    localStorage.setItem("Time2-1-5", tiempo);
                    correcto(); 
                }
                else{
                    incorrecto();
                    localStorage.setItem("Nota2-1-5","0");
                    localStorage.setItem("Time2-1-5", tiempo);
                }    
                } 
</script>
<script type="text/javascript" src="../../../exercises/inicial/3-1-5/js/validate.js"></script>




