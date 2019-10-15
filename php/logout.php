<?php /*destruye todos los datos de la sesion del usuario y lo envia al index nuevamente*/
	session_start();
	
	unset ($SESSION['login_user']);
	session_destroy();	 
	header('Location:../login.php');
?>