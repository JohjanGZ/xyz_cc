	<?php
			$_POST['id_unidad'];
			$ejercicios=$_POST['ejercicios'];
			$_POST['nombre'];
			$link=$_POST['link'];
    ?>
    <style type="text/css">
    	ul .btn{
    		float: right !important;
    	}
    </style>
<center><h5><?= $_POST['nombre']?></h5></center>						
							<br><br>							
<!--<a href="view/<?=$link?>" class="btn amber waves-effect waves-light pulse">Empezar ></a>	-->	
<div class="actividades">
	<div class="title-buttons">							
		<div class="btn-group">
			<button type="button" class="btn btn-primary disabled">Contenido de la Unidad</button>
		</div>
	</div><br><br>
		<ul class="js-list-activities js-droppable-receiver" data-drag-target="js-list-activities">
			<?php
				$t=1;
				foreach ($ejercicios as $i){
				    echo "<hr><li  class='li-contenido'>- ".$i."</li><a class='btn amber waves-effect waves-light' href='view/".$link."/".$t."'><i class='material-icons'>play_arrow</i></a>";
				    $t++;
				}
			?>
		</ul>
</div>
	<script type="text/javascript">
		$("#portada").css("display", "none");
	</script>