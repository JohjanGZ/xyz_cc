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
   $curso=$_POST['curso'];
   $grado=$_POST['grado'];
?>
<script>var data=libros[<?=$curso?>][<?=$grado?>]
console.log(data.titulo);
</script>
<?php
  $titulo=$_POST['titulo'];
  $color=$_POST['color'];

  $datos= json_encode($_POST['unidades']);
  $libros=json_encode($_POST['libros']);
 ?>

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
<center><h4 class="TituloGrado"></h4></center><br><br>
<div id="indice" data-id="1499880">
<div class="wrap-contenido-indice">
<div class="col-indice col-units" style="margin-left: 0px;">
	<div class="units" id="wrapper">
		<ul id="list-units">
			<li class='btn-libros'><a class='js-tema' ><span class='number'>2</span><span class='title'>Libros Digitales</span></a></li>
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
					var grado = data.grado;
					 var unidades = data.unidades;
					 
					 var color = data.color;
					 var curso=data.curso;
					 $('h4').html(data.titulo);
					 $('h4').css("color",color);
				$('.btn-libros').click(function(){
					$('#actividades').load('contenido_digitales.php');
					$('#portada').css('display', 'block !important');
				});
					function ver_ejercicios(temas,name,i,g){
						 	$('#actividades').load('contenido_unidad.php', 
								{ejercicios:temas,nombre:name, link:curso,id:i,grado:g});
						 	$('#portada').css('display', 'block !important');
					}
					for (let i in unidades){						
					 $("#list-units").append("<li  id='unidad"+i+"' class='litema js-indice-tema'><a onclick='' class='js-tema' ><span class='number'>2</span><span class='title'>"+unidades[i].nombre+"</span></a></li>");					  
					 $("#unidad"+i).click(function(){ ver_ejercicios(unidades[i].temas,unidades[i].nombre,i,grado) });
					}
						localStorage.setItem("data", JSON.stringify(unidades)); 
						localStorage.setItem("color", color);
						localStorage.setItem("curso", curso);
						localStorage.setItem("grado", grado);
						



                        function BackHome() {
                            $('#cuerpo').load('libros.php',{data: libros});
                        }
                    </script>
 
