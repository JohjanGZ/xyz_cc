<?php require('../../tools/var/variables.php'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <link rel="stylesheet" type="text/css"  href="responsive/r1-7.css">
    <style type="text/css">
      .contenedorPieza {
        min-height: 30px;
      }
      #uno, #dos, #tres, #cuatro, #cinco{
        border-radius: 5px;
        float: left;
        padding: 5px;
        /* border: #6b6b6b91 solid 1px; */
        /* border: 1px blue; */
        box-shadow: inset 0px 1px 4px 0px #dadada;
        /* margin-right: 13px; */
        /* margin-left: 13px; */
        min-height: 50px;
        margin: -11px 10px 0px;
        min-width: 130px;
      }
      .pieza{
        font-size: 16px;
        padding: 10px 10px;
        font-weight: 600 !important;
        color: red;
      }
      #uno{
        width: 400px
      }
      .container, .content-wrapper {

    margin: 50px auto 0;

      }
      .recibidores {

          margin: 20px auto 0;
      }
      @media (max-height: 680px){
        .imgvf {
    background-size: 270px 140px;
    width: 270px;
    height: 140px;
    margin: -10px 0 0 44px;
    position: absolute;
}
  
  .line {
    margin-bottom: 10px;
}
ul{
      margin: 0;
}
#uno, #dos, #tres, #cuatro, #cinco {
    min-width: 141px;
}
      }
    </style>
      <script>
          var count = 3;  
      </script>
<?=$titulo?>
            <div class="container" >
                <section id="contenedorPuzzle">
                      <div class="imgvf" ></div>
                     				<div class="recibidores" >
                    							    <div class="row" >
                    							    <span class="item1"><span class="ftitulo"> •</span> G<span style="color:red"> ={</span></span> 
                    							    <div class="contenedorPieza" id="uno"  ></div>
                    							    <span class="item3" style="color:red" >}</span> 
                    							      </div>
                    							    <div class="row" >
                    							    <span class="item5"><span class="ftitulo"> •</span> M<span style="color:red">={</span></span>
                    							    <div class="contenedorPieza" id="dos"  ></div>
                    							 	 <span class="item5" style="color:red" >}</span>
                    							   </div>

                    							   <div class="row" >
                    							   <span class="item5 ftitulo"> • </span>
                    							   <div class="contenedorPieza" id="tres"  ></div>
                    							   <span class="item5">  es </span>
                    							   <div class="contenedorPieza" id="cuatro"  ></div> 
                    							   <span class="item7">de</span>
                    							   <div class="contenedorPieza" id="cinco"  ></div>
                    							   </div>
                     				</div> 
                        <div class="row">
                           <div id="contenedorPiezas" >
                                <ul>
                                	<div class="row line">
                                		   <div class="col s2">
                                        <li class="contenedorimg">   
                                           <span class="pieza"  id="gallina"  alt="pieza1" >Gallina</span>
                                        </li>
                                        </div>
                                         <div class="col s2">
                                        <li class="contenedorimg">   
                                          <span class="pieza" id="vaca"  alt="pieza1" >Vaca</span>
                                        </li>
                                          </div>
                                         <div class="col s2">
                                        <li class="contenedorimg">   
                                          <span class="pieza" id="sub"  alt="pieza1" >SUBCONJUNTO</span>
                                        </li>
                                          </div>
                                        <div class="col s2">
                                        <li class="contenedorimg">   
                                           <span class="pieza"  id="oveja2"  alt="pieza1" >Oveja</span>
                                        </li>
                                        </div>
                                        <div class="col s2">
                                        <li class="contenedorimg">   
                                          <span class="pieza" id="gallo"  alt="pieza1" >Gallo</span>
                                        </li>
                                        </div>
                                	</div>
                                	<div class="row line">
                                		   <div class="col s2">
                                        <li class="contenedorimg">   
                                           <span class="pieza"  id="oveja"  alt="pieza1" >Oveja</span>
                                        </li>
                                        </div>
                                         <div class="col s2">
                                        <li class="contenedorimg">   
                                          <span class="pieza" id="m"  alt="pieza1" >M</span>
                                        </li>
                                          </div>
                                        <div class="col s2">
                                        <li class="contenedorimg">   
                                          <span class="pieza" id="vaca2"  alt="pieza1">Vaca</span>
                                        </li>
                                        </div>
                                           <div class="col s2">
                                        <li class="contenedorimg">   
                                          <span class="pieza" id="g"  alt="pieza1" >G</span>
                                        </li>
                                        </div>
                                             <div class="col s2">
                                        <li class="contenedorimg">   
                                          <span class="pieza" id="pato"  alt="pieza1" >Pato</span>
                                        </li>
                                        </div>     
                                	</div>          
                                </ul>
                          </div>
                     </div>                        
                </section> 
                                     <div id="modal1" class="modal">
                                        <div class="modal-content">
                                          <h4>Respuesta correcta</h4>
                                          <center>
                                          <img class="materialboxed"  width="100%" src="img/mate7.png">
                                          </center>
                                        </div>
                                        <div class="modal-footer">
                                          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
                                        </div>
                                      </div>
            </div>
             <script src="../../js/core.js"></script>
<?php require_once('../../tools/botones/botones.php'); ?>
<script type="text/javascript">
  
  var r1 = 0;
  var r2 = 0;
  var r3 = 0;
  var r4 = 0;
  var r5 = 0;

   $(".pieza").draggable({
         start: function(){
          element=$(this).attr("id");
      }
   });

   $( "#uno" ).droppable({
    
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },

      drop: function( event, ui ){
          $(this).css("background-color", "rgba(139, 195, 74, 0.14)");

          if(element=="gallina" || element=="vaca" || element=="oveja2" || element=="pato" || element=="vaca2" || element=="oveja" || element=="gallo" ){
         r1++;
          
        }
        element.removeClass("pieza");
         console.log(r1);
      }
    });
   $( "#dos" ).droppable({
        
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },

      drop: function( event, ui ) {
  
            $(this).css("background-color", "rgba(139, 195, 74, 0.14)");

               if(element=="oveja" || element=="vaca" || element=="vaca2" || element=="oveja2"){
             r2++;
              console.log(r2);
            }          
            element.removeClass("pieza");
    }
    });
    $( "#tres" ).droppable({
        
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },

      drop: function( event, ui ) {
  
            $(this).css("background-color", "rgba(139, 195, 74, 0.14)");

              if(element=="m"){
             r3++;
              console.log(r3);
            } 
            element.removeClass("pieza");         
    }
    });
    $( "#cuatro" ).droppable({
        
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },

      drop: function( event, ui ) {
  
            $(this).css("background-color", "rgba(139, 195, 74, 0.14)");

              if(element=="sub"){
             r4++
              console.log(r4);
            }   
            element.removeClass("pieza");       
    }
    });
    $( "#cinco" ).droppable({
        
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },

      drop: function( event, ui ) {
  
            $(this).css("background-color", "rgba(139, 195, 74, 0.14)");

              if(element=="g"){
             r5++
            console.log(r5);
            }          
            element.removeClass("pieza");
    }
    });


function result_tipo_2_1_7(){
      var  min= $('#Minutos').text();
     var  seg= $('#Segundos').text();
     var  milseg= $('#Centesimas').text();
     var tiempo=min+":"+seg+":"+milseg;

      if(r1==5 && r2==2 && r3==1 && r4 == 1)        
                  {
                      
                      localStorage.setItem("Nota2-1-7","2");
                      localStorage.setItem("Time2-1-7", tiempo);
                       correcto(); 

                  }

            else {

                        incorrecto(3); 
                        localStorage.setItem("Nota2-1-7","0");
                        localStorage.setItem("Time2-1-7", tiempo);
                       
                  }

}
</script>