<?php
$var=date("d".'-'."m".'-'."Y");

  $v=strtotime($var);
if ($v <= strtotime('04-03-2020')){  
   $procesar= $_POST['procesar'];
   $next=$_POST['next'];
   $titulo=$_POST['titulo'];
   $restaurar=$_POST['restaurar'];
   $ejercicio=$_POST['ejercicio'];
   $nota=$_POST['nota'];
   $ruta=$_POST['dir'];
   $cod=$_POST['cod'];
   $dir=$ruta.$cod;
}
?>
            <script type="text/javascript">
              
              var nota = <?=$nota?>
            </script>