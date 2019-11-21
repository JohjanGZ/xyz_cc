  <link rel="stylesheet" type="text/css" href="../../../../tools/pantalla-inicio/css/pantalla-inicio.css">
        <div id="portada" class="Portada scale-transition">    
			  <div class="contenedor-top">
          <button class="btn-back btn red"><a href="../../../../../" style="color:inherit!important;"><i class="material-icons mediun">arrow_back</i></a></button>
          <h3 class="unidad-tema nombre-unidad"></h3>
          <h4 style="margin-left: 40px;" class="unidad-tema nombre-tema"></h4>
        </div>
     		<center><img width="7vw" src="../../../../../LOGO.png"></center>    
            <p id="Frase-Presentacion"> Hola, presiona "Empezar" para iniciar la actividad</p> 
               
            <button id="Ready" class="btn waves-effect waves-light white black-text scale-transition" onclick="IniciarCronometro()" >Empezar
            </button> 
                          
		</div>
<script src="../../../../../js/core.js"></script>
<script>
  var data = JSON.parse(localStorage.getItem("data"));
  var ruta = window.location.pathname;
  var tema = ruta.substr(-2,1);
  var unidad = ruta.substr(-4,1);

  if(unidad == "/"){
    unidad = ruta.substr(-5,1);
    tema = ruta.substr(-3,2);
  }

  $(".nombre-unidad").html(data[unidad].nombre);
  $(".nombre-tema").html(data[unidad].temas[tema-1]);



</script>