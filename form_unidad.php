<?php
  session_start();
  if( !(isset($_SESSION['login_user'])) && !($_SESSION['login_user']==true)){
    header('location: login.php');
  }   

include('php/config.php');


//echo $grado=$_POST['grado'];

 			$sql="select * from ejercicios";
      $result = $db->query($sql);               
?>
<div id="sql"></div>
<button onclick="BackHome()" class="btn-back btn red"><i class="material-icons mediun">arrow_back</i></button>
<div class="container">
	<br>
  <br>
	     <div class="card-panel grey lighten-5 z-depth-1">
	     	<center><h4 class="ShadownInner">Crear Unidad</h4></center><br><br>
          <div class="row valign-wrapper ">
    <div class="col s10 offset-s1">

        <form  id="formUnidad" enctype="multipart/form-data" method="POST"  action="verdatos.php"  class="col s12">
          <div class="row">
            <div class="input-field  tooltipped"  data-position="right" data-tooltip="Aqui el nombre descriptivo de la unidad">
              <input id="nombre" name="nombre" placeholder="Nombre de la unidad" id="first_name" type="text" class="validate">
              <label for="first_name">Nombre</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field tooltipped"  data-position="right" data-tooltip="Las unidades se organizaran segun el numero que coloques">
              <input id="posicion" name="unidad" placeholder="Coloque el  numero de la unidad segun su posición" id="first_name" type="number" class="validate">
              <label for="first_name">Numero de Unidad</label>
            </div>
          </div>

           <label>Grado</label>
      	  <div class="input-field">

      	    <select  id="grado" class="browser-default" name="grado">
      	      <option class="selec" value="" disabled selected>Selecciones una Opcion</option>
      	      <option class="selec" value="1">1°</option>
      	      <option class="selec" value="2">2°</option>
      	      <option class="selec" value="3">3°</option>
      	      <option class="selec" value="4">4°</option>
      	      <option class="selec" value="5">5°</option>
      	      <option class="selec" value="6">6°</option>
      	    </select>
      	   
      	  </div>
          <br>
<div id="check">
          	<h6>Ejercicios</h6>
          <?php       

                      while($ejercicio = $result->fetch_array(MYSQLI_ASSOC)){         

                                  $tipo=$ejercicio['tipo_ejercicio'];
                                  $id=$ejercicio['id_ejercicio'];
                                  $nombre=$ejercicio['nombre'];

                              echo "<p><label><input id='ejercicio' value='".$id."' name='ejercicio[]' type='checkbox'/><span>id: ".$id.' - '.$nombre."</span></label></p>";

          			       }     	

          ?>
</div>
          <br>
          <br>
          <br>
          
        </form>
        <br><br><br>
        <button id="test" type="input" class="btn btn-primary">Enviar</button>
    </div>
</div>
</div>
</div>

	<script src="js/materialize.min.js"></script>

	<script type="text/javascript">

$(document).ready(function() {
    $('#test').click(function(){
      var  nombre= $('#nombre').val();
      var  posicion= $('#posicion').val();
      var  grado= $('#grado').val();



        var ejercicio = '';    
        $('#formUnidad input[type=checkbox]').each(function(){
            if (this.checked) {
                ejercicio += $(this).val()+', ';
            }
        }); 


    $('#sql').load('php/insert-unidad.php',
     
         {
        
          ejercicios:ejercicio,
          nombre:nombre,
          posicion:posicion,
          grado:grado

         }

         );


        return false;
    });         
});    



      		  $(document).ready(function(){

      	    $('.tooltipped').tooltip();

      	    $('select').formSelect();

	  	      });

	</script>
    <!--
 <input id='test".$id."' type='checkbox' name='ejercicio[]' value='".$nombre."' />
     						<label value='".$nombre."' for='test".$id."'>".$id.' '.$nombre."</label></p>;
   -->