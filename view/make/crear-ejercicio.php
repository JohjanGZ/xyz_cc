<?php
  session_start();
  if( !(isset($_SESSION['login_user'])) && !($_SESSION['login_user']==true)){
    header('location: ../../login.php');
  
  } 

  include('../../php/config.php');
 // include('../../header.php');
   include('carga.php');

?>
  <head>
    <title>Arca de Papel</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>



      <!-- Compiled and minified CSS -->
     
      <!-- Compiled and minified JavaScript -->
     <script src="../../js/materialize.min.js"></script>

     <style> 
    input[type="file"] { 
    display:block; 
    } 

    .imageThumb { 
    max-height: 75px; 
    border: 2px solid; 
    margin: 10px 10px 0 0; 
    padding: 1px; 
    } 


#btn-ayuda{
  display: none;
}

.ver-ejercicio{
  cursor: pointer;
}
.active {
  background-color: red !important;
}

.indigo:active{
    background:red !important;
}

.lista .indigo {
    padding: 10px;
    border-radius: 44px;

}

    </style>
  </head>
  <div id="sql"></div>
  <div class="row center">
      <h3>Crear Ejercicio</h3>
  </div>

  <div class="row">
   <div class="col s12 m1 l2"> 
    
     <center><h5>Ejercicios Creados</h5></center>
<div id="creados" ></div>

      

   </div>
      <div class="col s12 m10 l8">
          
  
  <label>Agregar Ejercicio</label>
  <div class="card-panel blue-grey lighten-4 z-depth-1 row">
   
                  <div class="input-field">
                        <select id="ejer" required="required" name="crear"  class="browser-default">
                          <option  value="null" id="null" disabled selected>Elige Una opción</option>
                         
                          <option class="vBoton" id="e2-1-1" value="agrupar">Agrupar</option>
                          <option class="vBoton" id="e2-1-2" value="leeyclasifica">Lee y Clasifica</option>
                          <option  class="vBoton" id="e2-1-3" value="observaycoloca_vf">Observa y Coloca</option>
                        </select>
                  </div>
                  <div id="btnCrear">

                   <button  class="btn black tooltipped" onclick="CrearEjercicio()" data-position="right" data-tooltip="Guardar ejercicio" id=""> <i class="material-icons">send</i></button>
                   </div>

  </div>
  
          <br>
          <br>
     
          <div id="cargar">     
          </div>
         

     
      </div>
      <div class="col s12 m1 l2"> <a class="waves-effect waves-light amber  btn-floating btn-small modal-trigger tooltipped "  id="btn-ayuda" href="#modal1" data-position="right" 
        data-tooltip="Ayuda"><i class="small material-icons white-text">live_help</i></a></div>

  </div>
</br>
</br>
</br>
</br>
</br>
</br>
  
  <script type="text/javascript">
 $("#creados").load('ejercicios-creados.php');

  function loader()
    {

  
  $("#portada").css("display", "block");

    }


function CrearEjercicio(){
        loader();
      ejercicio=$('#ejer').val();

            
        $("#sql").load('../../php/insert-crear-ejercicio.php',
          {
          ejercicio:ejercicio
          }
          );

      }

      jQuery(".ver-ejercicio .card-panel").click(function(){
        jQuery(".ver-ejercicio .card-panel").removeClass('active');
        jQuery(this).toggleClass('active'); 
});

/*
 function agrupar(){

  var  id= $('#id_ejercicio').text();
  var  nombre= $('#nombre_ejercicio').text();

        $("#btn-ayuda").css("display", "block");

        $("#cargar").load('agrupar.php',
          {
          id:id, 
          nombre:nombre
          }
          );



    };

function leeyclasifica(){

  var  id= $('#id_ejercicio').text();
  var  nombre= $('#nombre_ejercicio').text();
       
        $("#btn-ayuda").css("display", "block");

        $("#cargar").load('leeyclasifica.php',
          {
          id:id, 
          nombre:nombre
          }
          );

    };


*/






    //---------------------------------  CAMBIAR FORMULARIOS SEGUN EL TIPO  ---------------------------------onChange="mostrar(this.value);"----------------------


//---------------------------------AGRUPA -------------------------------------------------------


        //---------------- SELECT Input------------------------

            $(document).ready(function(){
            $('select').formSelect();
            });


        //------------------------  TOOLTIP COMENTARIOS DE AYUDA ---------------

            $(document).ready(function(){
            $('.tooltipped').tooltip();
            });


        //------------------------  MODAL COMENTARIOS DE AYUDA ---------------

            $(document).ready(function(){
            $('.modal').modal();
            });

       //------------------------ materialboxed Ampliar imagen con click ---------------

            $(document).ready(function(){
            $('.materialboxed').materialbox();
            });


  </script>