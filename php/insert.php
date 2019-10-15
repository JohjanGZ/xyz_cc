  <?php
 session_start();
   include("config.php");




if(isset($_POST['nota']) && isset($_POST['tiempo']) && isset($_SESSION['username']) && isset($_SESSION['ejercicio'])){

 $nota=$_POST['nota'];
 $tiempo=$_POST['tiempo'];
 $alumno=$_SESSION['username'];
 $ejercicio= $_SESSION['ejercicio'];


   $sql = 
   "INSERT INTO 
   		notas 
   			(nota, ejercicio, alumno, tiempo) 
   VALUES 
   			('$nota','$ejercicio','$alumno','$tiempo')";

    $result=$db->query($sql);

   /* if($db->query($sql)===true){
    	$msg = "Nota guardada";
         echo "<SCRIPT type='text/javascript'> 
            alert('$msg');
            </SCRIPT>"; 
    }*/

}









   ?>