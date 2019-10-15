
<?php
 session_start();
   include("config.php");

 $name= $_POST['nombre'];
 $grado= $_POST['grado'];
 $posicion=$_POST['posicion'];
 $ejer= $_POST['ejercicios'];



		if( isset($_POST['nombre']) && isset($_POST['grado']) && isset($_POST['posicion']) && isset($_POST['ejercicios']) ){

				$ejercicios= substr($ejer, 0, -1);
				$nombre=utf8_decode($name);


			$sql = "INSERT INTO unidad (ejercicios, nombre, posicion, grado )  VALUES ('$ejercicios','$nombre', $posicion, $grado)";
			if($db->query($sql)===true)
			{

				$msg = "!Unidad Creada Satisfactoriamente!";
        		 echo "<SCRIPT type='text/javascript'> 
        		  $('#portada').css('display', 'none');
           
            		alert('$msg');

 
       $('#cuerpo').load('contenido.php', {grado:'$grado'});
            </SCRIPT>"; 



		}


}
?>