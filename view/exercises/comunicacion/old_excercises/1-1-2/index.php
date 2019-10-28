<?php require('../../../tools/var/variables.php'); ?>
          <head>     
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
            <style type="text/css">
              #contenedorpuzzle{
              width: 75%;
              margin: 20vh auto;
              }
              .campo{
                 width: 145px;
                float: left;
                border: solid 1px #e5e4e4;
                margin: 1vh 0.5%;
              }
              .item{
              float: left;
              width: 100px;
              margin: 0 auto;
              }

              .item img{
              width: 100px;
              margin: 0px 24%;
              }
              .campo span{
                  width: 40px;
                  height: 40px;
                  margin: 3 3px 0;
                  float: left;
                  border: solid 2px purple;
                  border-radius: 80%;
                  text-align: center;
                  line-height: 35px;
                  color: white;
                  font-weight: 700;
              }
              .campo span:hover{
              background-color: green;
              }   
              h5 {
              font-size: 200%;
              }
              .img-principal{
              margin: 5vh auto 0;
              }
            </style>
          <link rel="stylesheet" type="text/css" href="../../../exercises/comunicacion/1-1-2/css/styles.css">
          </head>
  <?=$titulo?>
<div class="container">  
  	<section id="contenedorpuzzle">
          <div class="row">
          	<div class="campo"><div class="item" alt="" id="item1"><img src="../../../exercises/comunicacion/1-1-2/img/1.png">
            </div><div class="ta"><span alt="n">ta</span><span>ta</span></div></div>
          	<div class="campo"><div class="item"  id="item2"><img alt="n" src="../../../exercises/comunicacion/1-1-2/img/2.png">      
            </div><div class="ta"><span>ta</span><span alt="n">ta</span></div>
            </div>
          	<div class="campo"><center><div class="item" id="item3"><img src="../../../exercises/comunicacion/1-1-2/img/3.png">       
            </div><div class="ta"><span>ta</span><span alt="n">ta</span><span>ta</span></div></center>
            </div>
            <div class="campo"><div class="item"  id="item4"><img src="../../../exercises/comunicacion/1-1-2/img/4.png">
            </div><div class="ta"><span>ta</span><span>ta</span><span alt="n">ta</span></div>
            </div>
            <div class="campo"><div class="item" id="item5"><img src="../../../exercises/comunicacion/1-1-2/img/5.png">
            </div><div class="ta"><span>ta</span><span alt="n">ta</span><span>ta</span></div></div>
            <div class="campo"><div class="item"  id="item6"><img  src="../../../exercises/comunicacion/1-1-2/img/6.png">       
            </div><div class="ta"><span>ta</span><span>ta</span><span alt="n">ta</span></div></div>
          </div>
    </section>
</div>
          <div id="modal1" class="modal">
              <div class="modal-content">
              <h4>Respuesta correcta</h4>
              <center>
              <img class="materialboxed"  width="80%" src="../../../exercises/comunicacion/1-1-2/img/respuesta.png">
              </center>
              </div>
              <div class="modal-footer">
              <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
              </div>
          </div>
<script src="../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript">
        var ul = document.querySelector('#contenedorpuzzle .row');
        for (var i = ul.children.length; i >= 0; i--){
        ul.appendChild(ul.children[Math.random() * i | 0]);
        }
        var r=0;
        $('.campo span').click(function(){
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
    function result_tipo_2_1_2(){
                      var  min= $('#Minutos').text();
                      var  seg= $('#Segundos').text();
                      var  milseg= $('#Centesimas').text();
                      var tiempo=min+":"+seg+":"+milseg;

                    if(r==6){
                        localStorage.setItem("Nota2-1-2","2");
                        localStorage.setItem("Time2-1-2", tiempo);
                        correcto(); 
                    }
                    else {
                        incorrecto();
                        localStorage.setItem("Nota2-1-2","0");
                        localStorage.setItem("Time2-1-2", tiempo);
                    }    
    } 
</script>
<script type="text/javascript" src="../../../exercises/comunicacion/1-1-2/js/validate.js"></script>




