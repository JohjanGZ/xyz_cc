  <?php
 require('../../tools/var/variables.php');
   ?>

    <script>
        var count = <?=$intentos?>  
    </script>
        <head>
         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
          <link rel="stylesheet" type="text/css" href="responsive/r1-10.css">
    <link href="jquery.ui.all.css" rel="stylesheet">
    <link href="jquery-ui-1.10.2.custom.min.css" rel="stylesheet">
    <script type="text/javascript" async="" src="ga.js.descarga"></script><script src="jquery.min.js.descarga"></script>
    <script src="jquery-ui.min.js.descarga"></script>
    <script src="jquery.ui.touch-punch.min.js.descarga"></script>
            <style type="text/css">
            	
				#uno, #dos, #tres, #cuatro {
				    box-shadow: inset 0px 1px 3px 0px #7d7c7c;
				    /* border: #25252591 solid 2px; */
				    width: 200px;
				    /* min-width: 346px; */

				}

            	#contenedorPuzzle img {

                    float: left;
                    padding: 0px;
                    width: 100%;
               		height: 77px;;
                    position: relative;
                    background-color: #fff;
                    
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
				
					    height: 77px;
					   	border:none;
					   	 border-radius: 15px;
					   	 
					   
					}

				#contenedorPiezas {
				    background: #5561ff00;
				    /* width: 652px; */
				    height: 111px;
				    float: left;
					margin: 0% 10px 0% 328px !important;
				}

				#A, #B, #C, #D {
				    width: 200px !important;
				    height: 77px;
				    border-radius: 15px;

				}

				#A:hover, #B:hover, #C:hover, #D:hover{

					border: solid 1px purple;
				}

				.contenedorimg {
				border: solid 1px #dcdcdc00;
			    width: 324px;
			    height: 111px;
			    margin: 5px;
			    border-radius: 15px;
				}




				.grafica{
					height: 379px !important;
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
		    height: 111px;
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
     </style>
        </head>
 <?=$titulo?>

	<div class="container">
	<section id="contenedorpuzzle">
	<div class="row">
	    <div class="col s6 l6">
	    <div class="row"><img class="grafica" src="img/e1-2.png"></div>
	    </div>
	    <div class="col s6 l4">
	    <div class="row">
	 	<div class="contenedorPieza" id="uno"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
	    </div>
	    <div class="row">
	 	<div class="contenedorPieza" id="dos"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
	    </div>
	    <div class="row">
	 	<div class="contenedorPieza" id="tres"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
	    </div>
	    <div class="row">
	 	<div class="contenedorPieza" id="cuatro"  ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
	    </div>
	    </div>
	</div>
	</section>
	 <center> 		 	
	    <div id="contenedorPiezas" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
	          <ul>
	              <li class="contenedorimg">
	              <img src="img/item508.png"  ondragstart="start(event)" ondragend="end(event)" id="A"/>
	              </li>
	              <li class="contenedorimg">
	                <img src="img/item407.png"  ondragstart="start(event)" ondragend="end(event)" id="B"/>
	              </li>
	          	  <li class="contenedorimg">
	                <img src="img/item390.png"  ondragstart="start(event)" ondragend="end(event)" id="C"/>
	              </li>
	              <li class="contenedorimg">
	                <img src="img/item240.png"  ondragstart="start(event)" ondragend="end(event)" id="D"/>
	              </li>
	          </ul>
	    </div>
	</center>
	</div>
                                      <div id="modal1" class="modal">
                                        <div class="modal-content">
                                          <h4>¡Respuesta correcta!</h4>
                                          <center>
                                          <img class="materialboxed"  width="50%" src="../../img/tipos/leeyclasifica.png">
                                          </center>
                                        </div>
                                        <div class="modal-footer">
                                          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
                                        </div>
                                      </div>
  <?php require('../../tools/botones/botones.php');?>