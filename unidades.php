<button onclick="BackHome()" class="btn-back btn red"><i class="material-icons mediun">arrow_back</i></button>
		<script type="text/javascript">
		$("#portada").css("display", "none");    
		</script>
<style>
	#indice .units ul li.active:not(.disabled), body:not(.isTablet) #indice .units ul li:hover:not(.disabled), #indice .units ul li:focus:not(.disabled) {
	    background: #017c9e;
	    cursor: pointer;
	}
	#indice .units ul li {
	    background: #017c9e38;
	    margin-bottom: 10px;
	}
	a:hover, a:active, a:focus {
	    outline: 0;
	    color: #5561ff;
	    text-decoration: none;
	}
	#indice .units ul li {
    	width: 80%;
	}
</style>
<?php 
  $grado=$_POST['grado'];
  $titulo=$_POST['titulo'];
  $color=$_POST['color'];
  $enlace=$_POST['enlace'];
  $datos= json_encode($_POST['data']);
  $libros=json_encode($_POST['libros']);
 ?>
 <script type="text/javascript">
 	var enlace = <?=$enlace?>;

 </script>
	<style type="text/css">
	.TituloGrado{
		-webkit-text-stroke: 1px #f6c303;
	    font-size: 50px;
	    font-weight: 900;
	    text-shadow: 2px 2px #acaaaa;
	    font-family: sans-serif;
	    color: <?=$color?>;
	}

	.btn-libros{
		background: #019e0d !important;
		color:white !important;
	}
		.btn-libros:hover{
		background: #017c9e !important;
	}
	.btn-libros .title{
		color:white !important;
	}
	</style>
  <!-- CSS  -->
<div class="content-wrapper libro" style="margin-top: 58px;">
<center><h4 class="TituloGrado"><?=$titulo?></h4></center><br><br>
<div id="indice" data-id="1499880">
<div class="wrap-contenido-indice">
<div class="col-indice col-units" style="margin-left: 0px;">
	<div class="units" id="wrapper">
		<ul id="list-units">
			<li class=' btn-libros'><a class='js-tema' ><span class='number'>2</span><span class='title'>Libros Digitales</span></a></li>

		</ul>
	</div>
</div>
		<div id="contenido" class="col-indice col-main">
			<div class="card unit-content js-unit-content showFromBottomToTop active" data-id="">
					<div class="content" id="actividades">
						Selecciona una Unidad
						<br><br><br> 
					</div> 
			</div>	
		</div> 
</div> 
</div> 
</div>
			<script type='text/javascript'>
				 	var unidades = <?=$datos?>;
				 	var color = "<?=$color?>";
					function ver_ejercicios(ejer,n,name){
						 	$('#actividades').load('contenido_unidad.php', 
								{ejercicios:ejer,nombre:name, link:n});
						 	$('#portada').css('display', 'block !important');
					}

					for (let i in unidades){						
					 $("#list-units").append("<li  id='unidad"+i+"' class='litema js-indice-tema'><a onclick='' class='js-tema' ><span class='number'>2</span><span class='title'>"+unidades[i].nombre+"</span></a></li>");					  
					 $("#unidad"+i).click(function(){ ver_ejercicios(unidades[i].temas,unidades[i].ruta,unidades[i].nombre) });
					}

							localStorage.setItem("data", JSON.stringify(unidades)); 
							localStorage.setItem("color", color);

			</script>
