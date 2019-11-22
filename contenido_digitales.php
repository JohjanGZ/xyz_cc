	<?php
			$libros=$_POST['digital'];
			$_POST['id_unidad'];
			$ejercicios=$_POST['ejercicios'];
			$_POST['nombre'];
			$enlace=$_POST['enlace'];
    ?>
<center><h5><?= $_POST['nombre']?></h5></center>												
<div class="actividades">
	<div class="title-buttons">							
		<div class="btn-group">
			<button type="button" class="btn btn-primary disabled">Contenido</button>
		</div>
	</div><br><br>
	<?php
				$t=0;
				foreach ($libros as $i){
					echo 
					"<center><a href='view/digitales/".$libros[$t]['enlace']."/index.php' target='_blank' class='btn-digitales btn green waves-effect waves-light'>
					".$libros[$t]['title']."
					</a></center><br>";
				    $t++;
				}
	?>

</div>
	<script type="text/javascript">
		$("#portada").css("display", "none");
	</script>