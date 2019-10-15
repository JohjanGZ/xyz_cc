<?php require('../../../tools/var/variables.php'); ?>
          <head>     
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
          <style type="text/css">
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
                margin: 10vh auto 0;
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
          </style>
          <link rel="stylesheet" type="text/css" href="../exercises/comunicacion/1/css/styles.css">
          </head>
  <?=$titulo?>
<div class="container">

      <div class="row">
        <center>    
          <img  src="../exercises/inicial/3-1/img/principal.png">
        </center>
      </div>
          <div class="row fila2">
                  <div class=""><div class="item" id="item1"><img src="../exercises/inicial/3-1/img/1.png"></div></div>
                  <div class=""><div class="item" id="item2"><img alt="n" src="../exercises/inicial/3-1/img/2.png"></div></div>
                  <div class=""><div class="item" id="item3"><img src="../exercises/inicial/3-1/img/3.png"></div></div>
                  <div class=""><div class="item" id="item4"><img  src="../exercises/inicial/3-1/img/4.png"></div></div>
          </div>   
                    <!--<center><a title="click para ver video" class="modal-trigger" href="#modalVideo"><div class="btn blue btn-floating ">  <i class="material-icons">video_library</i></div></a></center> -->    
          <center>        <a title="click para ver video" id="video" class="modal-trigger " href="#modalVideo"><div class="btn blue btn"  data-tooltip="Ver Respuesta Correcta" >Ver video</div></a></center>     
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
              <div id="modalVideo" class="modal">
                  <div class="modal-content">
                  <center><h4>Importancia del agua</h4></center>
                  <center>
                   <video width="60%" controls  src="../exercises/inicial/3-1/img/agua.mp4"></video>
                  </center>
                  </div>
                  <div class="modal-footer">
                  <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
                  </div>
              </div>
<script src="../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript">

          /*  var ul = document.querySelector('.fila2');
          for (var i = ul.children.length; i >= 0; i--) {
              ul.appendChild(ul.children[Math.random() * i | 0]);
          }*/

            var r=0;
            $('.item img').click(function(){
              $(this).css({"background-color":"red"});
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
          function result_tipo_2_1_1(){              
                              var  min= $('#Minutos').text();
                              var  seg= $('#Segundos').text();
                              var  milseg= $('#Centesimas').text();
                              var tiempo=min+":"+seg+":"+milseg;

                          if(r==1){                  
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
<script type="text/javascript" src="../exercises/comunicacion/1/js/validate.js"></script>




