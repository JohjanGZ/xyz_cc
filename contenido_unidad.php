	<?php
			$_POST['id_unidad'];
			$ejercicios=$_POST['ejercicios'];
			$_POST['nombre'];
			$enlace=$_POST['enlace'];
    ?>
<center><h5><?= $_POST['nombre']?></h5></center>						
							<br><br>							
<a href="view/<?=$enlace?>" class="btn amber waves-effect waves-light">Empezar ></a>		
<div class="actividades">
	<div class="title-buttons">							
		<div class="btn-group">
			<button type="button" class="btn btn-primary disabled">Contenido de la Unidad</button>
		</div>
	</div><br><br>
		<ul class="js-list-activities js-droppable-receiver" data-drag-target="js-list-activities">
			<?php
				$res = explode(",", $ejercicios);
				foreach ($res as $i){
				    echo "<hr><li  class='li-contenido'>- ".$i."</li>";
				}
			?>
		</ul>
</div>
	<script type="text/javascript">
		$("#portada").css("display", "none");
	</script>