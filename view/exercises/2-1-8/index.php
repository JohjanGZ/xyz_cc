 <?php require('../../tools/var/variables.php'); ?>
<link rel="stylesheet" type="text/css" href="responsive/r1-8.css">
 <?=$titulo?>
 <style type="text/css">
.imgvf { 
    background-size: 500px 280px;
    width: 500px;
    height: 280px;
}
#contenedorPiezas {
    width: 1212px;
    margin: 0 12%;
    margin-top: -20px;
}
.pieza{
  padding: 7px 54px;
}
.p16i{
      padding: 7px 45px;
}
#r1, #r2, #r3, #r4, #r5, #r6, #r7, #r8, #r9{
      width: 150px;
}
.modal-content img{
width: 100% !important;
}

@media (max-height: 680px){
  .row {
    width: 150%;
}
.imgvf {
    background-size: 300px 142px;
    width: 300px;
    height: 130px;
}
  ul{
    margin-left: -130px;
    margin-top: -56px;
    float: inherit;
    position: absolute;
  }
  #contenedorPuzzle img {
    width: 60px;
  }
  .contenedorimg {

    margin: 5px 0;

}
} 
</style>

<section id="contenedorPuzzle">
<div class="container" >
      	<div class="imgvf" ></div>
        <div class="row">
           <div id="contenedorPiezas" >
                <ul>
                      <div class="">
                        <li class="contenedorimg">   
                           <span class=" drag pieza p34"  id="p34"  alt="p34" >34</span>
                        </li>
                        </div>
                          <div class="">
                        <li class="contenedorimg">   
                          <span class=" drag pieza p34" id="8"  alt="p8" >8</span>
                        </li>
                          </div>
                         <div class="">
                        <li class="contenedorimg">   
                          <span class=" drag pieza p34" id="16"  alt="p16" >16</span>
                        </li>
                          </div>
                         <div class="">
                        <li class="contenedorimg">   
                          <span class=" drag pieza p8" id="8i"  alt="i8" >IIIIIIII</span>
                        </li>
                          </div>
                        <div class="">
                        <li class="contenedorimg">   
                          <span class="drag pieza p2" id="2"  alt="p2">2</span>
                        </li>
                        </div>
                           <div class="">
                        <li class="contenedorimg">   
                          <span class="drag pieza p16i" id="16i"  alt="i16" >IIIIIIIIIIIIIIII</span>
                        </li>
                         </div>
                          <div class="">
                        <li class="contenedorimg">   
                          <span class="drag pieza p8" id="8i2"  alt="i8" >IIIIIIII</span>
                        </li>
                          </div>
                            <div class="">
                        <li class="contenedorimg">   
                          <span class="drag pieza p34" id="82"  alt="p8" >8</span>
                        </li>
                          </div>
                        <div class="">
                        <li class="contenedorimg">   
                          <span class="drag pieza p2" id="2i"  alt="i2" >II</span>
                        </li>
                          </div>

                </ul>
          </div>
     </div>
    <table class="responsive-table center">
        <thead>
          <tr>
              <th>Especies</th>
              <th>Conteo</th>
              <th>Cantidad</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td><img src="img/2-8/pez.gif" class="center imgth"></td>
            <td> 
            	<div class="contenedorPieza" id="r1"  ></div>
            </td>
            <td>
            	<div class="contenedorPieza " id="r2" ></div>
            </td>
          </tr>
          <tr>
            <td><img src="img/2-8/cangrejo.gif" class="center imgth"></td>
            <td>
            	<div class="contenedorPieza" id="r3"  ></div>
        	</td>
            <td>
            	<div class="contenedorPieza" id="r4" ></div>
        	</td>
          </tr>
          <tr>
            <td><img src="img/2-8/estrella.gif" class="center imgth"></td>
            <td>
           		<div class="contenedorPieza" id="r5"  ></div>
        	</td>
            <td>
            	<div class="contenedorPieza" id="r6"  ></div>
        	</td>
          </tr>
           <tr id="FilaUltima">
            <td><img src="img/2-8/caracola.gif" class="center imgth"></td>
            <td>
            	<div class="contenedorPieza" id="r7"  ></div>
            </td>
            <td>
            	<div class="contenedorPieza" id="r8"  ></div>
            </td>
          </tr>
          <tr id="FilaTotal">
          <td></td>
            <td>

            </td>
            <td>
              <div class="contenedorPieza" id="r9"></div>
            </td>
          </tr>
        </tbody>
      </table>
</div>
                                     <div id="modal1" class="modal">
                                        <div class="modal-content">
                                          <h4>Respuesta correcta</h4>
                                          <center>
                                          <img class="materialboxed"  width="100% !important" src="img/mate8.png">
                                          </center>
                                        </div>
                                        <div class="modal-footer">
                                          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
                                        </div>
                                      </div>
    </section> 
     <script src="../../js/core.js"></script>
<?php require_once('../../tools/botones/botones.php'); ?>

<script type="text/javascript">
var element=null;
  var r1 = 0;
  var r2 = 0;
  var r3 = 0;
  var r4 = 0;
  var r5 = 0;
  var r6 = 0;
  var r7 = 0;
  var r8 = 0;
  var r9 = 0;

    $(".drag").draggable({
          start: function(){
             element=$(this).attr("id");
            console.log(element)
          }
     });
    $( "#r1" ).droppable({    
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ){
          $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
          if(element=='16i'){
         r1++; 
                 console.log(r1);
        }
          element.removeClass("drag")
      }
    });
    $( "#r2" ).droppable({    
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ){
          $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
          if(element=='16'){
         r2++;   
         console.log(r2);       
        }
        element.removeClass("drag")
      }
    });
    $( "#r3" ).droppable({   
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ){
          $(this).css("background-color", "rgba(139, 195, 74, 0.14)");

          if(element=='8i' || element=='8i2'){
         r3++; 
         console.log(r3);         
        }
        element.removeClass("drag")
      }
    });
    $( "#r4" ).droppable({   
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ){
          $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
          if(element=='8' || element=='82'){
         r4++;
         console.log(r4);
        }
        element.removeClass("drag")
      }
    });
    $( "#r5" ).droppable({   
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ){
          $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
          if(element=='8i' || element=='8i2'){
         r5++;
         console.log(r5);
        }
        element.removeClass("drag")
      }
    });
    $("#r6").droppable({   
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ){
          $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
          if(element=='8' || element=='82'){
         r6++;          
        }
        element.removeClass("drag")
      }
    });
    $( "#r7" ).droppable({   
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ){
          $(this).css("background-color", "rgba(139, 195, 74, 0.14)");

        if(element=='2i'){
         r7++;      
         console.log(r7);    
        }
        element.removeClass("drag")
      }
    });
    $( "#r8" ).droppable({   
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },

      drop: function( event, ui ){
          $(this).css("background-color", "rgba(139, 195, 74, 0.14)");

          if(element=='2'){
         r8++;  
        console.log(r8);
        }
        element.removeClass("drag")
      }
    });
    $( "#r9" ).droppable({   
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ){
          $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
          if(element=='p34'){
         r9++;  
         console.log(r9);        
        }
        element.removeClass("drag")
      }
    });
    function result_tipo_2_1_8(){

    var  min= $('#Minutos').text();
    var  seg= $('#Segundos').text();
    var  milseg= $('#Centesimas').text();
    var tiempo=min+":"+seg+":"+milseg;

    if (
           r1==1 && r2 ==1 && r3 ==1 && r4 ==1 && r5 ==1 && r6 ==1 && r7 ==1
           && r8 ==1 && r9 ==1
        )
    {        
        localStorage.setItem("Nota2-1-8","2");
        localStorage.setItem("Time2-1-8", tiempo);
        correcto(); 
    }
    else {
        incorrecto();
        localStorage.setItem("Nota2-1-8","0");
        localStorage.setItem("Time2-1-8", tiempo);       
    }
    } 
</script>