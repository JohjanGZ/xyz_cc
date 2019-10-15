 <?php require('../../tools/var/variables.php'); ?>
<style>

.imgvf{
    background-image: url(img/2-4/a4.gif);
    background-size: 100% 100%;
    width: 450px;
    height: 240px;
    margin: 0 auto;
    background-repeat: no-repeat;
    }
    .contenedorimg {
    border: solid 1px #dcdcdc00;
    width: 138px;
    height: 0;
    margin: 5px;
    border-radius: 15px;
    float: left;
    }
    .contenedorPieza {
    width: 80px;
    height: auto;
    height: 31px;
    float: left;
    min-height: 30px;
    }
#contenedorPiezas {
    background: #5561ff00;
    width: 100%;
    height: auto;
    float: left;   
}
.item8{    
    font-size: 24px;    
    float: left;
    /* padding: 0px; */
    margin-left: 28px;
    margin-right: 25px;
}
.item7{
    float: left;
    width: 25px;
}
.item6{    
    font-size: 24px;    
    float: left;
    margin-left: 28px;
    margin-right: 25px;
}

.item5{

        float: left;
    width: 25px;
    /* padding: 13px; */
}

.item4{

    font-size: 24px;    
    float: left;
    /* padding: 0px; */
    margin-left: 28px;
    margin-right: 25px;
}

.item3{

    float: left;
  
    
}

.item2{
    font-size: 24px;
     
    float: left;
    /* padding: 0px; */
    margin-left: 28px;
    margin-right: 25px;
}
.item1{
    float: left;
}
#r1{

    border-radius: 5px;
    float: left;
    width: 120px;
    padding: 5px;
    /* border: #6b6b6b91 solid 1px; */
    box-shadow: brown 1px;
    /* border: 1px blue; */
    box-shadow: inset 0px 1px 4px 0px #dadada;
    margin-right: 13px;
    margin-left: 13px;
    text-align: center;
}

#r2{
    border-radius: 5px;
    float: left;
    width: 120px;
    padding: 5px;
    /* border: #6b6b6b91 solid 1px; */
    box-shadow: brown 1px;
    /* border: 1px blue; */
    box-shadow: inset 0px 1px 4px 0px #dadada;
    margin-right: 13px;
    margin-left: 13px;
    text-align: center;
}

#r3{
    border-radius: 5px;
    float: left;
    width: 120px;
    padding: 5px;
    /* border: #6b6b6b91 solid 1px; */
    box-shadow: brown 1px;
    /* border: 1px blue; */
    box-shadow: inset 0px 1px 4px 0px #dadada;
    margin-right: 13px;
    margin-left: 13px;
    text-align: center;
}

#r4{
       border-radius: 5px;
    float: left;
    width: 120px;
    padding: 5px;
    /* border: #6b6b6b91 solid 1px; */
    box-shadow: brown 1px;
    /* border: 1px blue; */
    box-shadow: inset 0px 1px 4px 0px #dadada;
    margin-right: 13px;
    margin-left: 13px;
    text-align: center;
}

#r5{
       border-radius: 5px;
    float: left;
    width: 120px;
    padding: 5px;
    /* border: #6b6b6b91 solid 1px; */
    box-shadow: brown 1px;
    /* border: 1px blue; */
    box-shadow: inset 0px 1px 4px 0px #dadada;
    margin-right: 13px;
    margin-left: 13px;
    text-align: center;
}

.pieza{
        border: 0;
    color: #686967;
    text-align: center;
    font-size: 11px;
    font-family: sans-serif;
    padding: 10px 56px;
    margin-left: -5;
    background: -moz-linear-gradient(center top , #CDEB8E 0%, #A5C956 100%) repeat scroll 0 0 transparent;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f7f7f7), color-stop(100%,#eaeaea));
    -moz-border-radius: 10px;
    -webkit-border-radius: 5px;
    -moz-box-shadow: 0px 6px 0 #819F45;
    -webkit-box-shadow: 0px 1px 0 #a0a09f;
 

}
.piezag {
    border: 0;
    color: #686967;
    text-align: center;
    font-size: 11px;
    font-family: sans-serif;
    padding: 10px 18px;
    margin-left: -5;
    background: -moz-linear-gradient(center top , #CDEB8E 0%, #A5C956 100%) repeat scroll 0 0 transparent;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f7f7f7), color-stop(100%,#eaeaea));
    -moz-border-radius: 10px;
    -webkit-border-radius: 5px;
    -moz-box-shadow: 0px 6px 0 #819F45;
    -webkit-box-shadow: 0px 1px 0 #a0a09f;
}
.recibidores {
    position: relative;
    top: 40px;
    width: 870px;
    margin: 0 auto;
    font-size: 150%;
}
@media (max-height: 680px){
.recibidores {
    color: crimson;
    transform: translate(17vw, -28vh);
    position: relative;
    top: 40px;
    width: 870px;
    margin: 0 auto;
    font-size: 150%;
}
.imgvf {
    transform: translate(-34vw, 10vh);
    background-size: 100% 100%;
    width: 357px;
    height: 205px;
    margin: 0 auto;
    background-repeat: no-repeat;
}

.pieza,.piezag{
  color: #025681 !important;
  font-weight: 900;
   
}
#r1,#r2,#r3,#r4,#r5 {
    border-radius: 5px;
    float: left;
    width: 140px;
    height: 46px;
    padding: 5px;  
}


}
</style>
       <script>
          var count = 3;  
      </script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <!--<link rel="stylesheet" type="text/css" media="(max-width: 2750px)" href="../exercises/2-1-4/css/r4x2750.css">
    <link rel="stylesheet" type="text/css" media="(max-width: 1500px)" href="../exercises/2-1-4/responsive/r4x1500.css">
    <link rel="stylesheet" type="text/css" media="(max-width: 1100px)" href="../exercises/2-1-4/responsive/r4x1100.css">
    <link rel="stylesheet" type="text/css" media="(max-width: 800px)" href="../exercises/2-1-4/responsive/r4x800.css">
    <link rel="stylesheet" type="text/css" media="(max-width: 450px)" href="responsive/r4x450.css">-->
 <?=$titulo?>
   
<div class="container" >

<section id="contenedorpuzzle">
      <div class="row" ><div class="imgvf" ></div>
       <div class="recibidores" >
         <div class="row" >
    <span class="item1"> • Sábado y domingo son elementos de </span> 
    <div class="contenedorPieza" id="r1" ></div>
    <span class="item3">y también de</span> 
    <div class="contenedorPieza" id="r2"  ></div>
  </div>
   <div class="row" >
   <span class="item5"> •  </span>
   <div class="contenedorPieza" id="r3"  ></div>
   <span class="item6">  es </span>
   <div class="contenedorPieza" id="r4"  ></div> 
   <span class="item7">de</span>
   <div class="contenedorPieza" id="r5"  ></div>
   </div>

            <div class="row">
            <center>
           <div id="contenedorPiezas" >
                <ul>
                        <div class="">
                        <li class="contenedorimg">   
                           <span class="pieza"  id="t1"  alt="s" >S</span>
                        </li>
                        </div>
                         <div class="">
                        <li class="contenedorimg">   
                          <span class="pieza" id="t2"  alt="t" >T</span>
                        </li>
                          </div>
                         <div class="">
                        <li class="contenedorimg">   
                          <span class="piezag pieza" id="t3" alt="sub">SUBCONJUNTO</span>
                        </li>
                          </div>
                        <div class="">
                        <li class="contenedorimg">   
                          <span class="pieza" id="t4" alt="s" >S</span>
                        </li>
                        </div>
                           <div class="">
                        <li class="contenedorimg">   
                          <span class="pieza" id="t5" alt="t" >T</span>
                        </li>
                        </div>

                </ul>
          </div>
          </center>
     </div>


  </div>


        
    </section> 
                                       <div id="modal1" class="modal">
                                        <div class="modal-content">
                                          <h4>Respuesta correcta</h4>
                                          <center>
                                          <img class="materialboxed"  width="100%" src="img/mate4.png">
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
    
var r1 = 0;
var r2 = 0;
var r3 = 0;
var r4 = 0;
var r5 = 0;


   $(".pieza").draggable({
         start: function() {
          element=$(this).attr("alt");
      }
   });

   $( "#r1" ).droppable({
    
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },

      drop: function( event, ui ) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);

        if(element=="t"){
         r1++
        }
        element.removeClass("pieza");
          
      }
    });


   $( "#r2" ).droppable({
        
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },

      drop: function( event, ui ) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);

              if(element=="s"){
         r2++
        } 
        element.removeClass("pieza");         
    }

    });

   $( "#r3" ).droppable({
        
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },

      drop: function( event, ui ) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);

              if(element=="t"){
         r3++
        }   
        element.removeClass("pieza");       
    }

    });

   $( "#r4" ).droppable({
        
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },

      drop: function( event, ui ) {
          $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);

              if(element=="sub"){
         r4++
        } 
        element.removeClass("pieza");         
    }

    });

   $( "#r5" ).droppable({
        
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },

      drop: function( event, ui ) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);

              if(element=="s"){
         r5++
        }  
        element.removeClass("pieza");        
    }

    });


 function result_tipo_2_1_4(){
      var  min= $('#Minutos').text();
     var  seg= $('#Segundos').text();
     var  milseg= $('#Centesimas').text();
     var tiempo=min+":"+seg+":"+milseg;

            if(r1==1 && r2==1 && r3==1 && r4==1 && r5==1)

    {
       
       localStorage.setItem("Nota2-1-4","2");
      localStorage.setItem("Time2-1-4", tiempo);
         correcto(); 

    }

    else {

        incorrecto();
        localStorage.setItem("Nota2-1-4","0");
        localStorage.setItem("Time2-1-4", tiempo);
       
    }    
} 



</script>


