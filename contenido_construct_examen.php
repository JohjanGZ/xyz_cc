	<?php
			 $sel=json_encode($_POST['sel']);

    ?>
											
<div class="actividades">
	<div class="title-buttons">							
		<div class="btn-group">
			<button type="button" class="btn btn-primary disabled">Contenido</button>
		</div>

	</div><br><br>

	<center>
        <p>Seleccione las unidades y presione "Empezar"</p>
        <a id="empezar" class="red btn pulse">EMPEZAR</a>
    </center>
</div>
	<script type="text/javascript">
		$("#portada").css("display", "none");
        var select=[];
        
            $("#empezar").click(function(){
                $(".filled-in").each(function(){
                  var  value=$(this).attr("value");
                        if($(this).attr("check")=="on"){
                            select.push(value);
                        }
                     });
                localStorage.setItem("seleccion",select);
                window.location.replace("view/examen/index.php");
            });
	</script>