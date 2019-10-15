   <link rel="stylesheet" type="text/css" href="css/carga.css">
<style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      #loader {
  /* Uncomment this to make it run! */
  /*
     animation: loader 5s linear infinite; 
  */
  
  position: absolute;
  top: calc(50% - 20px);
  left: calc(50% - 20px);
}
@keyframes loader {
  0% { left: -100px }
  100% { left: 110%; }
}
#box {
  width: 50px;
  height: 50px;
  background: #fff;
  animation: animate .5s linear infinite;
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 3px;
}
@keyframes animate {
  17% { border-bottom-right-radius: 3px; }
  25% { transform: translateY(9px) rotate(22.5deg); }
  50% {
    transform: translateY(18px) scale(1,.9) rotate(45deg) ;
    border-bottom-right-radius: 40px;
  }
  75% { transform: translateY(9px) rotate(67.5deg); }
  100% { transform: translateY(0) rotate(90deg); }
} 
#shadow { 
  width: 50px;
  height: 5px;
  background: #000;
  opacity: 0.1;
  position: absolute;
  top: 59px;
  left: 0;
  border-radius: 50%;
  animation: shadow .5s linear infinite;
}
@keyframes shadow {
  50% {
    transform: scale(1.2,1);
  }
}

#portada{
  display: none;
}

</style>

  

        <div id="portada" class="Portada scale-transition" onclick="Iniciar()">         
                  <div id="loader">
                    <div id="shadow"></div>
                    <div id="box"></div>
                          </div>
               <!--  <img id="Ready" src="loader.gif" onclick="Iniciar()"-->          
                
 </div>
<script type="text/javascript">
	 
</script>