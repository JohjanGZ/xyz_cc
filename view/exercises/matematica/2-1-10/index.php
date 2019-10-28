<?php require('../../../tools/var/variables.php'); ?>

         <!-- <link rel="stylesheet" type="text/css" href="responsive/r1-10.css">-->

            <style type="text/css">

              #contenedorPuzzle img {
                    float: left;
                     padding: 0px;
                    width: 100%;
                   height: 80px;
                    position: relative;
                    background-color: #f4f2f2;
                    
                }

				#contenedorPuzzle {
				    margin: 5% auto 0;
				    width: 700px;
				    max-width: 700px;
				     border-radius: 15px;
				}
                .stroke-1{
                      stroke: #0095da;
                      stroke-width: 4px;
                }

                .contenedorPieza {
				
					    height: 80px;
					   	border:none;
					   	 border-radius: 15px;
					   	 min-height: 111px;
					   
					}

				#contenedorPiezas {
    background: #5561ff00;
    /* width: 652px; */
    height: 111px;
    float: left;

	margin: 0% 10px 0% 328px !important;
}

				#A, #B, #C{
					width: 219px !important;
					height: 105px;
					border-radius: 15px;
					border: solid 1px #5ac2dd;
				
				}
				#A:hover, #B:hover, #C:hover{

					border: solid 1px purple;
				}


				.piezas{
					width: 100%;
					margin: 0 auto;
				}

	.contenedorimg {
	border: solid 1px #dcdcdc00;
    width: 324px;
    height:80px;
    margin: 5px;
    border-radius: 15px;
    float: left;
	}
	
	.grafica{
		height: 340px !important;
		width: 349px !important;
	}


/***************************   600px       ******************************/
	@media (max-width: 600px) {
		#contenedorPuzzle {
    margin: 150 auto 0;
    width: 701px;
    max-width: 200%;
      
    
}

#contenedorPiezas {
    background: #5561ff00;
    width: 350px !important;
    height: 80PX;
    float: left;
    margin: 0 160px !important;

}

.container{

    position: fixed;
    margin: 0 auto;
    width: 700px;
    max-width: 200%;
    left: 60px;
	-ms-transform: scale(0.25);
    -moz-transform: scale(0.25);
    -o-transform: scale(0.25);
    -webkit-transform: scale(0.25);
    transform: scale(0.38);
    -ms-transform-origin: 0 0;
    -moz-transform-origin: 0 0;
    -o-transform-origin: 0 0;
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
}

}


@media (max-width: 1600px) {

#contenedorPiezas {

	margin: 0% 10px 0% 228px !important;
}

}
@media (max-width: 1300px) {

#contenedorPiezas {
    /* margin: 0% 10px 0% 228px !important; */
    width: 89%;
     margin: -44px 7vw 0 !important;
}
#contenedorPuzzle {
    margin: 2% auto 0;
}
.contenedorPieza {
    min-height: 96px;
}
#A, #B, #C {
    height: 90px;
}
}

@media (max-height: 680px){
   .grafica {
    height: 230px !important;
    width: 300px !important;
}
.contenedorPieza {
        min-height: 51px;
    height: 63px;
}
#contenedorPuzzle {
    width: 603px;
}
#A, #B, #C {
    height: 59px;
    width: 190px !important;
}
}
</style>
 <?=$titulo?>
<div class="container">
	<section id="contenedorpuzzle">
	<div class="row">
	    <div class="col s6 l6">
	      <div class="row"><img class="grafica" src="img/2-10/ejercicio10.png"></div>
	    </div>
	    <div class="col s6 l4">
	    	 <div class="row">
	 			<div class="contenedorPieza" id="uno" ></div>
	    	</div>
	    	 <div class="row">
	 			<div class="contenedorPieza" id="dos"  ></div>
	    	</div>
	    	 <div class="row">
	 			<div class="contenedorPieza" id="tres"  ></div>
	    	</div>    
	    </div>
	</div>
	</section>
	 <center>
	    <div id="contenedorPiezas" >
	          <ul>
	              <li class="contenedorimg">
	              <img style="background-color: rgb(0, 174, 15);" class="pieza"  id="B" src="img/2-10/E.png">
	               </li>
	               <li class="contenedorimg">
	              <img style="background-color: rgb(227, 109, 0);" class="pieza"  id="A" src="img/2-10/D.png">
	              </li>
	          	  <li  class="contenedorimg">
	              <img style="background-color: rgb(0, 199, 209);" class="pieza" id="C" src="img/2-10/F.png">
	              </li>
	          </ul>
	    </div>
	</center>
</div>
                                      <div id="modal1" class="modal">
                                        <div class="modal-content">
                                          <h4>Respuesta correcta</h4>
                                          <center>
                                          <img class="materialboxed"  width="100%" src="img/mate10.png">
                                          </center>
                                        </div>
                                        <div class="modal-footer">
                                          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
                                        </div>
                                      </div>
                                      
   <script src="../../../../js/core.js"></script>
<?php require_once('../../../tools/botones/botones.php'); ?>
<script type="text/javascript">
  var r1 = 0;
  var r2 = 0;
  var r3 = 0;

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
         if(element=="A"){
         r1++;    
        }
         console.log(r1);    
          element.removeClass("pieza")       
      }
    });
      $( "#dos" ).droppable({
    
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ){
          $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
         if(element=="B"){
         r2++;
        }
         console.log(r2); 
          element.removeClass("pieza")        
      }
    });
      $("#tres").droppable({
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ){
          $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
         if(element=="C"){
         r3++;
        }
         console.log(r3);  
          element.removeClass("pieza") 
      }
    });
     function result_tipo_2_1_10(){
      var  min= $('#Minutos').text();
      var  seg= $('#Segundos').text();
      var  milseg= $('#Centesimas').text();
      var tiempo=min+":"+seg+":"+milseg;

            if( r1 == 1 && r2==1 && r3 ==1 ){  
	            localStorage.setItem("Nota2-1-10","2");
	          	localStorage.setItem("Time2-1-10", tiempo);
	            correcto();
            }
            else {
                incorrecto();
                localStorage.setItem("Nota2-1-10","0");
                localStorage.setItem("Time2-1-10", tiempo);
            }
  }
</script>


