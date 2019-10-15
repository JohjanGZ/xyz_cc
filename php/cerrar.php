<?php /*destruye todos los datos de la sesion del usuario y lo envia al index nuevamente*/
 pclose(popen("start /B clean.bat", "r")); die(); 
?>