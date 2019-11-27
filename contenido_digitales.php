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
	<style>
		#list-digitales img{
			width:130px;
			opacity:0.6;
		}
		#list-digitales{
			margin-top:0px !important;
		}
		#list-digitales li{
			padding-top: 15px;
		}
		#list-digitales li:hover{
			transition:0.3s;
			transform: scale(1.1);
    		z-index: 55;
		}
		#list-digitales li:hover img{
			opacity:1;
		}
		#list-digitales label {
    		color:#424242;
		}
		.carousel label {
    		color: #424242;
			font-size: 16px;
		}
		.carousel {

   		 margin-top: -115px;
		}

	</style>
	<center>
	<div class="carousel">
	<?php
				$t=0;
				foreach ($libros as $i){

echo "<a class='carousel-item' href='view/digitales/".$libros[$t]['enlace']."/index.php' target='_blank'><label>".$libros[$t]['title']."</label><img src='img/digitales/".$libros[$t]['portada']."'></a>";
				    $t++;
				}
	?>
    
  </div>
</center>
</div>
	<script type="text/javascript">
		$("#portada").css("display", "none");
		$(document).ready(function(){
    	$('.carousel').carousel({duration:5});
  		});
      
	</script>