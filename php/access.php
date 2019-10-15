<?php

session_start();

   include("config.php");

   
  $username = $_POST['username'];
  $password = $_POST['password'];

  
      $main = "SELECT id FROM user WHERE (nombre = '$username' OR email= '$username') and pass = '$password'";
     
      $alumno="SELECT id_alumno, main FROM alumnos WHERE (user = '$username' OR email= '$username')  and pass = '$password'";


      $result1 = $db->query($main);

      $result2 = $db->query($alumno);



     $admin = $result1->fetch_array(MYSQLI_ASSOC);

     $alumno = $result2->fetch_array(MYSQLI_ASSOC);
     
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($result1->num_rows > 0) {
        
         $_SESSION['username'] = $username;

         $_SESSION['login_user'] = true;
         
         $_SESSION['main']= $admin['id'];

         $_SESSION['identificador']="Soy un Admin";


    echo "<SCRIPT type='text/javascript'> 
        window.location.replace(\"../index.php\");
        </SCRIPT>";
      }

      elseif ($result2->num_rows > 0) {


        $_SESSION['username'] = $username;

         $_SESSION['login_user'] = true;
         
         $_SESSION['main']= $alumno['main'];

         $_SESSION['alumno']=$alumno['id_alumno'];

         $_SESSION['identificador']="Soy un Alumno";

        echo "<SCRIPT type='text/javascript'> 
        window.location.replace(\"../index.php\");
        </SCRIPT>";
      }
      


      else {
        
        $msg = "Usuario o Contraseña Incorrecto!";
        
      echo "<SCRIPT type='text/javascript'> 
        alert('$msg');
        window.location.replace(\"../login.php\");
        </SCRIPT>";
      }
   

?>
 