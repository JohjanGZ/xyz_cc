<?php
 session_start();
   include("config.php");





//-------------------------------------------//-insert tipo Agrupar-//-------------------------------------------------------

//-------------------- recibidor 1----------------------------------
				if (
				isset($_POST['id_ejercicio']) &&	
				isset($_POST['titulo1']) && 
				isset($_POST['titulo2']) && 
				isset($_POST['titulo3']) && 
				isset($_FILES['files']['name']) && 
				isset($_FILES['files2']['name']) && 
				isset($_FILES['files3']['name'])
				)
		{

	

	$id_ejercicio=$_POST['id_ejercicio'];
	$titulo1=$_POST['titulo1'];

				$sqltitle1 = "INSERT INTO tipo_agrupa (grupo, item, tipo, id_ejercicio)  VALUES ('$titulo1','$titulo1','titulo1','$id_ejercicio')";
				

			$total1 = count($_FILES['files']['name']);
			$files1=0;
					// Loop through each file
			for( $i=0 ; $i < $total1 ; $i++ ) {

		 //Get the temp file path
			$imagen =$_FILES['files']['name'][$i];
				$sql1 = "INSERT INTO tipo_agrupa (grupo, item, tipo, id_ejercicio)  VALUES ('$titulo1','$imagen','img', '$id_ejercicio')";
				if($db->query($sql1)===true){
					$files1++;
				}

		   	$tmpFilePath1 = $_FILES['files']['tmp_name'][$i];

		 //Make sure we have a file path
		  	if ($tmpFilePath1 != ""){
		    //Setup our new file path
		    $newFilePath1 = "../img/2/agrupar/" . $_FILES['files']['name'][$i];

		    //Upload the file into the temp dir
		    if(move_uploaded_file($tmpFilePath1, $newFilePath1)) {

				
				


			    }
			  }
			}


//-------------------- recibidor 2----------------------------------

		$titulo2=$_POST['titulo2'];

		$sqltitle2 = "INSERT INTO tipo_agrupa (grupo, item, tipo, id_ejercicio)  VALUES ('$titulo2','$titulo2','titulo2', '$id_ejercicio')";
			
			$files2=0;
			$total2 = count($_FILES['files2']['name']);
		// Loop through each file
			for( $i=0 ; $i < $total2 ; $i++ ) {

		 //Get the temp file path
			$imagen = $_FILES['files2']['name'][$i];
			$sql2 = "INSERT INTO tipo_agrupa (grupo, item, tipo, id_ejercicio)  VALUES ('$titulo2','$imagen','img', '$id_ejercicio')";
			if($db->query($sql2)===true){
					$files2++;
				}
		   	$tmpFilePath2 = $_FILES['files2']['tmp_name'][$i];

		 //Make sure we have a file path
		  	if ($tmpFilePath2 != ""){
		    //Setup our new file path
		    $newFilePath2 = "../img/2/agrupar/" . $_FILES['files2']['name'][$i];

		    //Upload the file into the temp dir
		    if(move_uploaded_file($tmpFilePath2, $newFilePath2)) {

		    	
				  
		    	

			    }
			  }
			 
			}


//-------------------- recibidor 3----------------------------------

		$titulo3=$_POST['titulo3'];
		$sqltitle3 = "INSERT INTO tipo_agrupa (grupo, item, tipo, id_ejercicio)  VALUES ('$titulo3','$titulo3', 'titulo3', $id_ejercicio)";
						

					$total3 = count($_FILES['files3']['name']);
				// Loop through each file
					$files3=0;
					for( $i=0 ; $i < $total3 ; $i++ ) {

				 //Get the temp file path
					 $imagen = $_FILES['files3']['name'][$i];
					$sql3 = "INSERT INTO tipo_agrupa (grupo, item, tipo, id_ejercicio)  VALUES ('$titulo3','$imagen', 'img', $id_ejercicio)";
					if($db->query($sql3)===true){
					$files3++;
						}

				   	$tmpFilePath3 = $_FILES['files3']['tmp_name'][$i];

				 //Make sure we have a file path
				  	if ($tmpFilePath3 != ""){
				    //Setup our new file path
				    $newFilePath3 = "../img/2/agrupar/" . $_FILES['files3']['name'][$i];

				    //Upload the file into the temp dir
				   // if(move_uploaded_file($tmpFilePath3, $newFilePath3)) {

				    	
						 
				    	

			    }
			  }
			 
			}
	
//echo $files1.'-'.$total1.' / '.$files2.'-'.$total2.' / '.$files3.'-'.$total3


if( $files1===$total1 && $files2===$total2 && $files3===$total3 && $db->query($sqltitle1) === TRUE  && $db->query($sqltitle2) === TRUE  && $db->query($sqltitle3) === TRUE )
{


    	$msg = "Ejercicio Creado";
         echo "<SCRIPT type='text/javascript'> 
            alert('$msg');
             window.location.replace(\"../view/make/crear-ejercicio.php\");
            </SCRIPT>"; 


}


?>