<?php
 session_start();
   include("config.php");


if(isset($_POST['ejercicio'])) {
	$ejercicio=$_POST['ejercicio'];
			
			switch ($ejercicio) {
				case 'agrupar':
						$nombre="Agrupar";
					break;
				case 'leeyclasifica':
						$nombre="Lee y Clasifica";
					break;
				case 'observaycoloca_vf':
						$nombre="Observa y Coloca(v-f)";
					break;
				
			}



			$sql = "INSERT INTO ejercicios (tipo_ejercicio, nombre)  VALUES ('$ejercicio','$nombre')";
			if($db->query($sql)===true){
					

				
         echo "<SCRIPT type='text/javascript'> 
           

            	$('#portada').css('display', 'none');
              $('#creados').load('ejercicios-creados.php');
            </SCRIPT>"; 
				}

}
else{

	echo 'No se agrego el ejercico';
}

?>