<?php require('../../../tools/var/variables.php'); ?>
      <head>     
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
          <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">         
          <link rel="stylesheet" type="text/css" media="" href="<?= $dir ?>/css/r1x2750.css" >
          <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/r1.css">
          <link rel="stylesheet" type="text/css" media="(max-width: 1500px)" href="<?= $dir ?>/css/r1x1500.css">
          <link rel="stylesheet" type="text/css" media="(max-width: 1100px)" href="<?= $dir ?>/css/r1x1100.css">
          <link rel="stylesheet" type="text/css" media="(max-width: 800px)" href="<?= $dir ?>/css/r1x800.css">
          <link rel="stylesheet" type="text/css" media="(max-width: 450px)" href="<?= $dir ?>/css/r1x450.css">
      </head>
<style type="text/css">
.contenedorimg {
    width: 107px;
}

@media (max-width: 1500px){
  .recibidor {
      width: 80%;
  }
}
/*@media (max-width: 1500px){*/
#contenedorPiezas {
    background: #5561ff00;
    height: 130px;
    float: left;
    margin-top: 79px;
    padding-top: 30px;
}
#contenedorPuzzle img {
    float: left;
    padding: 10px 0px;
    width: 91px;
    height: auto;
    position: relative;
    z-index: 10;
}

#ulClass li img{
  width: 60px!important;
  height: auto!important;
}
#ulClass li{
  width: 100px!important;

}
.row .col.s4 {
  display: grid;
  justify-items: center;
}
@media (max-height: 600px){
#contenedorPiezas{
    background: #5561ff00;
    height: 130px;
    float: left;
    margin: 0 12% 0;
}
.recibidor{
  padding-top: 30px;
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
              <div id="contenedorPiezas">
                  <ul id="ulClass">                 
                      <li class="contenedorimg">
                      <img class="ficha" id="animal" src="img/1-1/perro.png" alt="pieza1" >
                      </li>
                      <li class="contenedorimg">
                      <img class="ficha" id="figura" src="img/1-1/cuadrado.png" alt="pieza2">
                      </li>
                      <li class="contenedorimg">
                      <img class="ficha" id="animal" src="img/1-1/perro-2.png" alt="pieza3" >
                      </li>
                      <li class="contenedorimg">
                      <img class="ficha" id="figura" src="img/1-1/triangulo.png" alt="pieza4" >
                      </li>
                      <li class="contenedorimg">
                      <img class="ficha" id="regla" src="img/1-1/regla-3.png" alt="pieza5">
                      </li>
                      <li class="contenedorimg">
                     
                      <img class="ficha" id="figura" src="img/1-1/circulo.png" alt="pieza6">
                      </li>
                      <li class="contenedorimg">
                     
                      <img class="ficha" id="regla" src="img/1-1/regla.png" alt="pieza7" >
                      </li>
                      <li class="contenedorimg">
                     
                      <img class="ficha" id="animal" src="img/1-1/perro-3.png" alt="pieza8" >
                     </li>
                      <li class="contenedorimg">
                     
                      <img class="ficha" id="regla" src="img/1-1/regla-2.png" alt="pieza9" >                     
                      </li>

                  </ul>
              </div>
       
            </div>
                  <div class="row center recibidor" id="recibidor">
                            <div class="col s4">
                                <label>Figuras geométricas</label>
                              <div class="contenedorPieza" id="uno" ></div>
                            </div>
                            <div class="col s4">
                                <label>Reglas</label>
                              <div class="contenedorPieza" id="dos" ></div>
                            </div>
                            <div class="col s4">
                                <label>Perritos</label>
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
                                          <img class="materialboxed"  width="100%" src="img/1-1/respuesta.png">
                                          </center>
                                        </div>
                                        <div class="modal-footer">
                                          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
                                        </div>
                                      </div>

 <script src="../../../../../js/core.js"></script>
 <?php require('../../../tools/botones/botones.php'); ?><script>$("#next").attr("onclick","<?=$next?>");</script>

<script type="text/javascript">
    
var nAnimal = 0;
var nFigura = 0;
var nRegla= 0;
var element;

   $(".ficha").draggable( {
         revert: false,
         start: function() {
          element=$(this).attr("id");
      }
   } );

   $( "#tres" ).droppable({
      

      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },
      accept: "#animal",
      drop: function( event, ui ) {
          $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
          //$( this ).target.append(event.target);

        if(element=="animal"){
         nAnimal++;
        }
         element.removeClass("pieza");   
          
      }
    });


   $( "#dos" ).droppable({
      
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },
      accept: "#regla",
      drop: function( event, ui ) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        //$( this ).target.append(event.target);

              if(element=="regla"){
         nRegla++
        }
          element.removeClass("pieza");
      }
    });

   $( "#uno" ).droppable({
          classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },
      accept: "#figura",
      drop: function( event, ui ) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        //$( this ).target.append(event.target);

              if(element=="figura"){
         nFigura++
        }
          element.removeClass("pieza");

      }
    });


  function result_tipo_2_0_2(){
      var  min= $('#Minutos').text();
      var  seg= $('#Segundos').text();
      var  milseg= $('#Centesimas').text();
      var tiempo=min+":"+seg+":"+milseg;

            if( nAnimal == 3 && nRegla==3 && nFigura == 3 ){
               
               localStorage.setItem("Nota2-0-2","2");
               localStorage.setItem("Time2-0-2", tiempo);
                correcto(); 
            }

            else {

                
                localStorage.setItem("Nota2-0-2","0");
                localStorage.setItem("Time2-0-2", tiempo);
                incorrecto();
            }    
  } 

  
    </script>




