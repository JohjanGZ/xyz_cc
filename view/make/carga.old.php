  <link rel="stylesheet" type="text/css" href="../../css/carga.css">
<style>


.loader {
    border-top: 16px solid #ffb000;
    border-right: 16px solid #5068ed;
    border-bottom: 16px solid #ac0296;
    border-left: 16px solid #01b8d1;
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
    margin: 0 auto;
    position: relative;
    top: 30%;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

</style>

  

        <div id="portada" class="Portada scale-transition">         
                 <div class="loader" onclick="Iniciar()"></div>
               <!--  <img id="Ready" src="loader.gif" onclick="Iniciar()"-->          
                
 </div>
<script type="text/javascript">
	
	function Iniciar()
    {

    $("#portada").css("display", "none");


    }
</script>