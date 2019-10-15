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
  echo $_POST['key'];
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
</style>
  <!-- CSS  -->
<div class="content-wrapper libro" style="margin-top: 58px;">
<center><h4 class="TituloGrado"><?=$titulo?></h4></center><br><br>
<div id="indice" data-id="1499880">
<div class="wrap-contenido-indice">
<div class="col-indice col-units" style="margin-left: 0px;">
	<div class="units" id="wrapper">
		<ul id="list-units">
            <li  id='unidad1' class='litema js-indice-tema'>
				<a onclick='ver_ejercicios1()' class='js-tema' data-target=''>
					<span class='number'>2</span>
					<span class='title'>1 - Unidad 1</span>				
				</a>
			</li>
			            <li  id='unidad1' class='litema js-indice-tema disabled'>
				<a  class='js-tema' data-target=''>
					<span class='number'>2</span>
					<span class='title'>2 - Unidad 2</span>				
				</a>
			</li>
			            <li  id='unidad1' class='litema js-indice-tema disabled'>
				<a  class='js-tema' data-target=''>
					<span class='number'>2</span>
					<span class='title'>3 - Unidad 3</span>				
				</a>
			</li>
			            <li  id='unidad1' class='litema js-indice-tema disabled'>
				<a  class='js-tema' data-target=''>
					<span class='number'>2</span>
					<span class='title'>4 - Unidad 4</span>				
				</a>
			</li>
			            <li  id='unidad1' class='litema js-indice-tema disabled'>
				<a  class='js-tema' data-target=''>
					<span class='number'>2</span>
					<span class='title'>5 - Unidad 5</span>				
				</a>
			</li>
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
				var ejercicios=0;
					function ver_ejercicios1(){
						ejer="Ejercicio 1,Ejercicio 2,Ejercicio 3,Ejercicio 4,Ejercicio 5";
						 	$('#actividades').load('contenido_unidad.php', 
								{id_unidad:'1',ejercicios:ejer,nombre:'Unidad 1',enlace:'inicial'});
						 	$('#portada').css('display', 'block !important');
					}
			</script>