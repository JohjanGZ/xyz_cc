<?php require('../../tools/var/variables.php'); ?>
      <head>     
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
          <link rel="stylesheet" type="text/css" href="../exercises/2-1-1/css/styles.css">         
          <link rel="stylesheet" type="text/css" media="" href="../exercises/2-1-1/css/r1x2750.css" >
          <link rel="stylesheet" type="text/css" href="../exercises/2-1-1/css/r1.css">
          <link rel="stylesheet" type="text/css" media="(max-width: 1500px)" href="../exercises/2-1-1/css/r1x1500.css">
          <link rel="stylesheet" type="text/css" media="(max-width: 1100px)" href="../exercises/2-1-1/css/r1x1100.css">
          <link rel="stylesheet" type="text/css" media="(max-width: 800px)" href="../exercises/2-1-1/css/r1x800.css">
          <link rel="stylesheet" type="text/css" media="(max-width: 450px)" href="../exercises/2-1-1/css/r1x450.css">
      </head>
<style type="text/css">
  .contenedorimg {
    width: 107px;
}
/*@media (max-width: 1500px){*/
#contenedorPiezas {
    background: #5561ff00;

    height: 130px;
    float: left;

  
    margin-top: 79px;
}
#contenedorPuzzle img {
    float: left;
    padding: 10px 0px;
    width: 91px;
    height: auto;
    position: relative;
    z-index: 10;
}




@media (max-height: 600px){
#contenedorPiezas{
    background: #5561ff00;
    height: 130px;
    float: left;
    margin: 0 12% 0;
}
#uno, #dos, #tres {
    min-height: 2vh !important;
}

}






/*}*/
</style>
  <?=$titulo?>
 <div class="container">
      <section id="contenedorpuzzle">
          <div class="row">
              <div id="contenedorPiezas" >
                  <ul>                 
                      <li class="contenedorimg">
                      <img class="pieza" id="animal" src="img/1/cangrejo.png" alt="pieza1" >
                      </li>
                      <li class="contenedorimg">
                      <img class="pieza" id="juguete" src="img/1/camion.png" alt="pieza2">
                      </li>
                      <li class="contenedorimg">
                      <img class="pieza" id="dulce" src="img/1/chupeta.png" alt="pieza3" >
                      </li>
                      <li class="contenedorimg">
                      <img class="pieza" id="animal" src="img/1/estrella.png" alt="pieza4" >
                      </li>
                      <li class="contenedorimg">
                      <img class="pieza" id="dulce" src="img/1/caramelo.png" alt="pieza5">
                      </li>
                      <li class="contenedorimg">
                     
                      <img class="pieza" id="juguete" src="img/1/avion.png" alt="pieza6">
                      </li>
                      <li class="contenedorimg">
                     
                      <img class="pieza" id="dulce" src="img/1/pastel.png" alt="pieza7" >
                      </li>
                      <li class="contenedorimg">
                     
                      <img class="pieza" id="animal" src="img/1/pez.png" alt="pieza8" >
                     </li>
                      <li class="contenedorimg">
                     
                      <img class="caballo pieza" id="animal" src="img/1/caballito.png" alt="pieza9" >                     
                      </li>

                  </ul>
              </div>
       
            </div>
                  <div class="row center recibidor" id="recibidor">
                            <div class="col s4">
                                <label>Juguetes</label>
                              <div class="contenedorPieza" id="uno" ></div>
                            </div>
                            <div class="col s4">
                                <label>Dulces</label>
                              <div class="contenedorPieza" id="dos" ></div>
                            </div>
                            <div class="col s4">
                                <label>Animales Marinos</label>
                              <div class="contenedorPieza" id="tres" ></div>
                            </div>
                  </div>
                  <div id="ver"></div>
         </section>
   </div>

                                      <div id="modal1" class="modal">
                                        <div class="modal-content">
                                          <h4>Respuesta correcta</h4>
                                          <center>
                                          <img class="materialboxed"  width="100%" src="img/mate1.png">
                                          </center>
                                        </div>
                                        <div class="modal-footer">
                                          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
                                        </div>
                                      </div>

 <script src="../../js/core.js"></script>
 <?php require('../../tools/botones/botones.php'); ?>

<script type="text/javascript">
    
var nAnimal = 0;
var nJuguete = 0;
var nDulce= 0;


   $(".pieza").draggable( {
         start: function() {
          element=$(this).attr("id");
      }
   } );

   $( "#tres" ).droppable({
    
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },

      drop: function( event, ui ) {
          $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);

        if(element=="animal"){
         nAnimal++
        }
         element.removeClass("pieza");   
          
      }
    });


   $( "#dos" ).droppable({
        
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },

      drop: function( event, ui ) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);

              if(element=="dulce"){
         nDulce++
        }
          element.removeClass("pieza");
      }
    });

   $( "#uno" ).droppable({
          classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },

      drop: function( event, ui ) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);

              if(element=="juguete"){
         nJuguete++
        }
          element.removeClass("pieza");

      }
    });


  function result_tipo_2_1_1(){
      var  min= $('#Minutos').text();
      var  seg= $('#Segundos').text();
      var  milseg= $('#Centesimas').text();
      var tiempo=min+":"+seg+":"+milseg;

            if( nAnimal == 4 && nDulce==3 && nJuguete ==2 ){
               
               localStorage.setItem("Nota2-1-1","2");
              localStorage.setItem("Time2-1-1", tiempo);
                 correcto(); 

            }

            else {

                incorrecto();
                localStorage.setItem("Nota2-1-1","0");
                localStorage.setItem("Time2-1-1", tiempo);
               
            }    
  } 

  
    </script>




