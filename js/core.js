$("html").click(function(){
  document.getElementById('click').play();
});

$( ".pieza" ).hover(function(){
  $( ".pieza" ).css({"box-shadow": "none"});
  $(this).css({"box-shadow": "2px 3px 8px 0px grey"});
  document.getElementById('hover').play();
});

    if (document.querySelector('#contenedorPiezas ul')) {
      var ul = document.querySelector('#contenedorPiezas ul');
    for (var i = ul.children.length; i >= 0; i--) {
        ul.appendChild(ul.children[Math.random() * i | 0]);
    }
    }

$(document).ready(function(){
   $("html").mouseup(function(){
        $(this).css({"cursor":"url(../asset/cursor/cursor_pointer.png),auto"})
    });

       $("html").mousedown(function(){
        $(this).css({"cursor":"url(../asset/cursor/cursor.png),pointer !important"})
    });
});


var centesimas = 0;
var segundos = 0;
var minutos = 0;
var horas = 0;
function inicio() {
 control = setInterval(cronometro,10);
}
function parar () {
  clearInterval(control);
}
function reinicio() {
  clearInterval(control);
  centesimas = 0;
  segundos = 0;
  minutos = 0;
  horas = 0;
  Centesimas.innerHTML = "00";
  Segundos.innerHTML = "00";
  Minutos.innerHTML = "00";
  Horas.innerHTML = "00";
}
function cronometro(){
  if (centesimas < 99) {
    centesimas++;
    if (centesimas < 10) { centesimas = "0"+centesimas }
    Centesimas.innerHTML = centesimas;
  }
  if (centesimas == 99) {
    centesimas = -1;
  }
  if (centesimas == 0) {
    segundos ++;
    if (segundos < 10) { segundos = "0"+segundos }
    Segundos.innerHTML = segundos;
  }
  if (segundos == 59) {
    segundos = -1;
  }
  if ( (centesimas == 0)&&(segundos == 0) ) {
    minutos++;
    if (minutos < 10) { minutos = "0"+minutos }
    Minutos.innerHTML = minutos;
  }
  if (minutos == 59) {
    minutos = -1;
  }
  if ( (centesimas == 0)&&(segundos == 0)&&(minutos == 0) ) {
    horas ++;
    if (horas < 10) { horas = "0"+horas }
    Horas.innerHTML = horas;
  }
}
// --------------------------------- CRONOMETRO  GENERAL------------------------------
////////////////////////////////////////////////////////////////////////////////////////
//---------------------------  correcto e incorrecto   -----------------------------------------
function correcto(){ 

document.getElementById('bien').play();

          $('#correcto').css("display","block");
         $('#correcto').css("z-index","55");  

       // $(".btnEnviar").css("opacity", "0.3");
        $(".btnEnviar").css("pointer-events", "none");
        $(".btnEnviar").addClass("disabled");
        $(".btnCorregir").addClass("disabled");
        $(".btnSiguiente").removeClass("disabled");
        $(".btn6").addClass("disabled");


     var  min= $('#Minutos').text();
     var  seg= $('#Segundos').text();
     var  milseg= $('#Centesimas').text();
     var tiempo=min+":"+seg+":"+milseg;

        reinicio();
        parar();
          return true;
}

$('#intentos').html(count);  

function incorrecto(){ 
        document.getElementById('fallo').play();
      $('#incorrecto').css("display","block");
         $('#incorrecto').css("z-index","55");
          count--; 
           $('#intentos').html(count);
            if (count==0){

             var  min= $('#Minutos').text();
             var  seg= $('#Segundos').text();
             var  milseg= $('#Centesimas').text();
             var tiempo=min+":"+seg+":"+milseg;

           $(".btnEnviar").css("opacity", "0.3"); 
           $(".btnCorregir").css("opacity", "0.3");
           $(".btnEnviar").addClass("disabled");
           $(".btnCorregir").addClass("disabled");
           $(".btn6").addClass("disabled");
           $("#respuesta").css("display", "block");

           $(".btn-intentos").css("background-image", "linear-gradient(to right, rgb(230, 66, 66), rgb(255, 0, 0))");            
           $(".btnSiguiente").removeClass("disabled");

            reinicio();
            parar();            

                        }
            return false;  
  }
$( ".modal-close" ).click(function() {
  $('#incorrecto').css("display","none");
  $('#correcto').css("display","none")
});


 //-------------------------------------------  Menu lateral -----------------------------------------------
    $(document).ready(function(){
    $('.sidenav').sidenav();
    });

 //-------------------------------------------  tooltip comentarios -----------------------------------------------

    $(document).ready(function(){
    $('.tooltipped').tooltip();
    });

//-------------------------------------------  Boton Flotante -----------------------------------------------
    $(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();
    });
        
//------------------------  MODAL COMENTARIOS DE AYUDA ---------------
  $(document).ready(function(){
    $('.modal').modal();
  });
  $(document).ready(function(){
    $('#correcto').modal();
  });
  $(document).ready(function(){
    $('#incorrecto').modal();
  });




