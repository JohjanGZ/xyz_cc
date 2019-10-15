
<center>
<div class="botones" >
	<a title="Ver Respuesta" class="modal-trigger tooltipped" href="#modal1"><div class="btn red pulse btn-floating fixed-action-btn tooltipped"  data-position="left"  data-tooltip="Ver Respuesta Correcta" id="respuesta">
		<i class="material-icons">assignment_turned_in</i></div></a>
    <div  class="btn  btn-floating  btn-small  btn-intentos tooltipped"  data-position="top"  data-tooltip="Intentos restantes" id="intentos">3</div>
    <div class="btnEnviar btn-small center"   value="" id="boton1" onclick = "<?=$procesar?>">Enviar Respuesta</div>
    <div class="btnCorregir btn-small center"  value="" onclick = "<?=$restaurar?>" id="boton1" >Reiniciar</div>
    <div class="btn-small btnSiguiente center disabled" onclick = "<?=$next?>">Siguiente</div>

</div>
</center>

