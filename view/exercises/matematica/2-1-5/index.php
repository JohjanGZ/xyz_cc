 <?php require('../../../tools/var/variables.php'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
 <link rel="stylesheet" type="text/css"  href="responsive/r1-5.css">
 <style type="text/css">
    .contenedorPieza {
      min-height: 70px;
    }
    .ej1, .ej2 {
        width: 800px !important;
        padding: 7% 0 2%;
            height: 30vh;
        margin: 0 auto;
    }
    @media only screen and (max-width: 800px) and (orientation: landscape){
    h5 {
        font-size: 100%;
        line-height: 14px;
        width: 400px;
        margin: -71px auto 0;
        position: absolute;
        margin-left: 19%;
    }
    .container, .content-wrapper {
        margin: -91px auto;
        transform: scale(1);
    }
    #uno, #dos {
        box-shadow: inset 0px 1px 3px 0px #7d7c7c;
        width: 61px;
        height: 7vh;
        background-color: #f2f0ff40;
        margin: 16px auto;
    }

    section {
        margin-top: 20px;
    }
    }
    @media only screen and (max-width: 1300px) and (orientation: landscape){
    .container, .content-wrapper {
        position: fixed;
        margin: 0 auto;
        width: 100%;
        max-width: 100%;
        transform: scale(1.3) translate(8vw, 10px);
    }
    }

    @media (max-height: 680px){
.ej1, .ej2 {
    width: 800px !important;
    padding: 0% 0 0%;
    height: auto;
    margin: 0 auto;
}
ul{ margin-top: 0 }

#contenedorPuzzle img {
        top: -14px;
    left: -44px;
}
#contenedorPuzzle{
  margin-top: 38px;
}
}
    
 </style>
 <?=$titulo?>
  <div class="container" >
  <div class="conjuntos" >
<section  id="contenedorPuzzle">
<div class="row ej1">
  <div class="col s4 m4"> 
          <div class="conj1">        
          </div>
  </div>

      <div class="col s4">       
              <div class="row">
                <span class="lpd" >P ∩ D = { </span>               
                <div class="col s4 m6 center">                 
                  <div class="contenedorPieza" id="uno" > </div>
                </div>
                  <span  class="lpd2">}</span>               
              </div>
              <div class="row">
                <div id="contenedorPiezas" >
                    <ul>
                      <li  class="">
                      <img  class="pieza" id="muneca" src="img/2-5/muneca.png" alt="muneca" >
                      </li>
                      <li  class="">
                      <img class="pieza" id="tren" src="img/2-5/tren.png" alt="tren" >
                      </li>
                      <li  class="">
                      <img class="pieza" id="oso" src="img/2-5/oso.png" alt="oso" >
                      </li>
                      <li  class="">
                      <img class="pieza" id="pelota" src="img/2-5/pelota.png" alt="pelota" >
                      </li>
                      <li  class="">
                      <img class="pieza" id="cubo" src="img/2-5/cubo.png" alt="cubo" >
                      </li>
                      <li  class="">
                      <img class="pieza" id="avion" src="img/2-5/avion.png" alt="avion" >
                      </li>
                    </ul>
              	</div>
              </div>
      </div>
      </div>   

  <div class="row ej2">
      <div class="col s4 m4"> 
    <div class="conj2">        
    </div>
     </div>
      <div class="col s4">   
        <div class="row" > 
                  <span class="lpd" >F ∩ G = {</span>
                  <div class="col s4 m6 center">
                  <div class="contenedorPieza" id="dos" > </div>
                  </div>
                  <span class="lpd2" >}</span>           
        </div>
        <div class="row">
          <div id="contenedorPiezas">
            <ul>
              <li  class="">
                <img class="pieza" id="triangulo" src="img/2-5/triangulo.png" alt="triangulo" >
              </li>
              <li  class="">
                <img class="pieza" id="cuadrado" src="img/2-5/cuadrado.png" alt="cuadrado" >
              </li>
              <li  class="">
                <img class="pieza" id="estrella" src="img/2-5/estrella.png" alt="estrella" >
              </li>
              <li  class="">
                <img class="pieza" id="rombo" src="img/2-5/rombo.png" alt="rombo" >
              </li>
              <li  class="">
                <img class="pieza" id="rectangulo" src="img/2-5/rectangulo.png" alt="rectangulo" >
              </li>
              <li  class="">
                <img class="pieza" id="corazon" src="img/2-5/corazon.png" alt="corazon" >
              </li>
            </ul>
      	  </div>
        </div>    
      </div>   
    </div>  
 </section>
</div>
                        <div id="modal1" class="modal">
                            <div class="modal-content">
                              <h4>Respuesta correcta</h4>
                              <center>
                              <img class="materialboxed"  width="70%" src="img/mate5.png">
                              </center>
                            </div>
                            <div class="modal-footer">
                              <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
                            </div>
                        </div>
</div>
<script src="../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript">
  var r1 = 0;
  var r2 = 0;

   $(".pieza").draggable({
         start: function() {
          element=$(this).attr("alt");
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

        if(element=="pelota" || element=="oso"){
         r1++
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

              if(element=="estrella" || element=="corazon"){
         r2++
        } 
        element.removeClass("pieza");         
    }
    });

function result_tipo_2_1_5(){
      var  min= $('#Minutos').text();
     var  seg= $('#Segundos').text();
     var  milseg= $('#Centesimas').text();
     var tiempo=min+":"+seg+":"+milseg;

    if(r1==2 && r2==2)
       {
       
       localStorage.setItem("Nota2-1-5","2");
       localStorage.setItem("Time2-1-5", tiempo);
         correcto(); 

    }

    else {

        incorrecto();
      localStorage.setItem("Nota2-1-5","0");
      localStorage.setItem("Time2-1-5", tiempo);
    }
    
}

</script>

