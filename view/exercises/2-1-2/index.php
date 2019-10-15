<?php require('../../tools/var/variables.php'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="../exercises/2-1-2/css/styles.css">
    <link rel="stylesheet" type="text/css" media="(max-width: 1500px)" href="../exercises/2-1-2/css/r2x1500.css">
    <link rel="stylesheet" type="text/css" media="(max-width: 1100px)" href="../exercises/2-1-2/css/r2x1100.css">
    <link rel="stylesheet" type="text/css" media="(max-width: 800px)" href="../exercises/2-1-2/css/r2x800.css">
    <link rel="stylesheet" type="text/css" media="(max-width: 450px)" href="../exercises/2-1-2/css/r2x450.css">
<style type="text/css">
   .imgvf {
        background-image: url(/img/2-2/a2.gif);

      }
  label {
    font-size: 1.8rem;
    color: #000000;
}
 .imgvf {
    box-shadow: 0px 1px 6px 0px #883a3a1c;
    border: solid 1px #f4ecec;
    border-radius: 29px;
  }  
    @media (max-width: 1500px){
      #ta,#ti,#te{
        padding: 0;
        line-height: 70px;
        font-size: 80px;
      }
      section {    
        width: 1000px;
        margin: 41px auto 0;      
      }
      .imgvf {
        background-image: url(/img/2-2/a2.gif);
        background-size: 450px 189px;
        width: 450px;
        height: 170px;
        margin: 0 auto;
        background-repeat: no-repeat;
      }
      #contenedorPieza {
        background: #5561ff00;
        width: 75%;
        height: auto;
        float: left;
        margin-top: 0;
        margin: 0;
        margin: 0 20% !important;
       
      }
      .contenedorPieza {

    min-height: 120px;

}
.contenedorimg {
    border: none;
    width: auto;
    height: auto;
    margin: 5px;
    border-radius: 15px;
    min-width: 80px;
}
#contenedorPuzzle img {
    float: left;
    padding: 0; 
    width: 80px;
    height: 80px;
    position: relative;
    z-index: 10;
}
    }


    @media (max-height: 720px){
.imgvf {
    transform: translate(-28vw, 9vh);
    background-size: 450px 250px;
    width: 450px;
    height: 250px;
    margin: 0 auto;
    background-repeat: no-repeat;
}
#ta, #ti, #te {
    padding: 0px 20px;
    line-height: 75px;
    font-size: 80px;
}
#campos {
    transform: translate(16vw, -42vh);
}


    }
    
</style>
    <script type="text/javascript">
      var count=3;
    </script>

 <?=$titulo?>
<div class="container" >
    <section id="contenedorpuzzle">
     
      <div class="imgvf"></div>
      <div id="campos">
        <div class="row center">
          
      <div id="contenedorPieza" >
        <center>
        <ul>
          <li class="contenedorimg">
            <spam class="pieza"  id="Ta"  alt="letra" >
                a
            </spam>
          </li>
          <li class="contenedorimg">
            <spam class="pieza"  id="Ti"  alt="letra" >
                i
            </spam>
          </li>
          <li class="contenedorimg">
            <img class="pieza" id="uva" src="img/2-2/uva22.gif" alt="fruta">
          </li>
          <li class="contenedorimg">
            <img class="pieza" id="pina" src="img/2-2/pina22.gif" alt="fruta" >
          </li>
          <li class="contenedorimg">
              <spam class="pieza"  id="Te"  alt="letra" >
                e
              </spam>
          </li>
          <li class="contenedorimg">
            <img class="pieza" id="pera" src="img/2-2/pera22.gif" alt="fruta" >
          </li>

        </ul>
</center>
       </div>
     
          </div>
          <center>
        <div class="row center recibidores">
                  <div class="col s4">
                    <label>V</label>
                  <div class="contenedorPieza" id="v"  ></div>
                  </div>
                   <div class="col s4">
                    <label>F</label>
                  <div class="contenedorPieza" id="f" ></div>
                    </div>
              

      </div>
      </center>
      </div>
           </section>
                                      <div id="modal1" class="modal">
                                        <div class="modal-content">
                                          <h4>Respuesta correcta</h4>
                                          <center>
                                          <img class="materialboxed"  width="100%" src="img/mate2.png">
                                          </center>
                                        </div>
                                        <div class="modal-footer">
                                          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
                                        </div>
                                      </div>
 </div>
  <script src="../../js/core.js"></script>
 <?php require('../../tools/botones/botones.php'); ?>

<script type="text/javascript">
            var nFrutas = 0;
            var nLetras = 0;

               $(".pieza").draggable( {

                     start: function() {
                      element=$(this).attr("alt");

                  }
                //,cursor: "grab",cursorAt: { top: 56, left: 56 }
               });

               $( "#v" ).droppable({
                  classes: {
                    "ui-droppable-active": "ui-state-active",
                    "ui-droppable-hover": "ui-state-hover"
                  },

                  drop: function( event, ui ) {
                $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
                  //  $( this ).target.append(event.target);

                    if(element=="letra"){
                     nLetras++
                    }
                     element.removeClass("pieza");
                      
                  }
                });


               $( "#f" ).droppable({
                    
                  classes: {
                    "ui-droppable-active": "ui-state-active",
                    "ui-droppable-hover": "ui-state-hover"
                  },

                  drop: function( event, ui ) {
              $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
                  //  $( this ).target.append(event.target);

                          if(element=="fruta"){
                     nFrutas++
                    }
                       element.removeClass("pieza");
                  }
                });

               function result_tipo_2_1_2(){                
                  var  min= $('#Minutos').text();
                  var  seg= $('#Segundos').text();
                  var  milseg= $('#Centesimas').text();
                  var tiempo=min+":"+seg+":"+milseg;

                        if( nFrutas == 3 && nLetras ==3 )
                {
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