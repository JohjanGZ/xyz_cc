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
            .img-principal{
              margin: 5vh auto 0;
            }
            #recibidor{
                box-shadow: inset 0px 1px 3px 0px #7d7c7c;
                width: 60%;
                background-color: #f2f0ff40;
                height: 23vh;
            }
            #recibidor h3{
                  color: #92929233;
                  line-height: 23vh;       
            }
            @media (max-height: 720px){
              #contenedorpuzzle {
                  width: 80%;
                  margin: -11px auto 0;
              }
            }
          </style>
          <link rel="stylesheet" type="text/css" href="../exercises/comunicacion/3/css/styles.css">
          </head>


<?=$titulo?>
<div class="container">
      	<section id="contenedorpuzzle">
              <div class="row">
              	<div class=""><div class="item"  id="item1"><img  class="pieza" alt="n" src="../exercises/comunicacion/3/img/1.png"></div></div>
              	<div class=""><div class="item"  id="item2"><img class="pieza"  src="../exercises/comunicacion/3/img/2.png"></div></div>
              	<div class=""><div class="item" id="item3"><img  class="pieza" alt="n" src="../exercises/comunicacion/3/img/3.png"></div></div>
                <div class=""><div class="item" id="item4"><img class="pieza"  src="../exercises/comunicacion/3/img/4.png"></div></div>
                <div class=""><div class="item" id="item5"><img  class="pieza" alt="n" src="../exercises/comunicacion/3/img/5.png"></div></div>
                <div class=""><div class="item"  id="item6"><img class="pieza" alt="n" src="../exercises/comunicacion/3/img/6.png"></div></div>
                <div class=""><div class="item" alt="n" id="item7"><img  class="pieza" alt="n" src="../exercises/comunicacion/3/img/7.png"></div></div>
                <div class=""><div class="item" id="item8"><img  class="pieza" alt="n" src="../exercises/comunicacion/3/img/8.png"></div></div>
                <div class=""><div class="item"  id="item9"><img  class="pieza"   src="../exercises/comunicacion/3/img/9.png"></div></div>
                <div class=""><div class="item" id="item10"><img class="pieza" alt="n"  src="../exercises/comunicacion/3/img/10.png"></div></div>
                <div class=""><div class="item"  id="item11"><img  class="pieza"  src="../exercises/comunicacion/3/img/11.png"></div></div>
                <div class=""><div class="item" id="item12"><img  class="pieza" alt="n" src="../exercises/comunicacion/3/img/12.png"></div></div>
                <div class=""><div class="item" id="item13"><img class="pieza" src="../exercises/comunicacion/3/img/13.png"></div></div>
                <div class=""><div class="item" id="item14"><img class="pieza"  alt="n"  src="../exercises/comunicacion/3/img/14.png"></div></div>
              </div>
              <div class="row center recibidor" id="recibidor">
                <center><p><h3>Arrastra aqui</h3></p></center>
              </div>
        </section>
</div>
              <div id="modal1" class="modal">
                  <div class="modal-content">
                  <h4>Respuesta correcta</h4>
                  <center>
                  <img class="materialboxed"  width="80%" src="../exercises/comunicacion/3/img/respuesta.png">
                  </center>
                  </div>
                  <div class="modal-footer">
                  <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
                  </div>
              </div>
<script src="../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript">
  var ul = document.querySelector('#contenedorpuzzle .row');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}
  var r = 0;
  var element=0;
  $(".pieza").draggable({
         start: function(){
          element=$(this).attr("alt");
  }
  });
  $("#recibidor").droppable({    
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ) {
          $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);
      if(element=="n"){
         r++
      }
      console.log(r);
        element.removeClass("pieza");    
      }
      });


function result_tipo_2_1_3(){
                
                  var  min= $('#Minutos').text();
                  var  seg= $('#Segundos').text();
                  var  milseg= $('#Centesimas').text();
                  var tiempo=min+":"+seg+":"+milseg;

                        if(r==9)
                {
                   
                    localStorage.setItem("Nota2-1-3","2");
                    localStorage.setItem("Time2-1-3", tiempo);
                    correcto(); 

                }

                else {

                    incorrecto();
                    localStorage.setItem("Nota2-1-3","0");
                    localStorage.setItem("Time2-1-3", tiempo);
                   
                }    
            } 
</script>
<script type="text/javascript" src="../exercises/comunicacion/1/js/validate.js"></script>




