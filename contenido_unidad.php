	<?php
			$grado=$_POST['grado'];
			$id=$_POST['id'];
			$ejercicios=$_POST['ejercicios'];
			$_POST['nombre'];
			$link=$_POST['link'];
    ?>
    <style type="text/css">
    	ul .btn-temas{
    		float: right !important;
    	}
		.btn-examen-temas{
			margin:50px auto;	
		}
    </style>
<center><h5><?= $_POST['nombre']?></h5></center>						
							<br><br>							

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
				    echo "<hr><li  class='li-contenido'>- ".$i."</li><a class='btn btn-temas amber waves-effect waves-light' href='view/".$link.'/'.$grado.'/'.$id.'/'.$t."'><i class='material-icons'>play_arrow</i></a>";
				    $t++;
				};
				echo "<br><center><a class='btn btn-examen-temas blue waves-effect waves-light' href='view/".$link."/".$grado."/".$id."/examen'>Examen</a></center>";
			?>
			
		</ul>
</div>
	<script type="text/javascript">
		$("#portada").css("display", "none");
	</script>