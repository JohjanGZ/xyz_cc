<script type="text/javascript">
  
   function Page_9(){
        start_9();
        inicio();
        count = 3;
    }

    var cant=1;
    var cal= 20/20;
    var ruta="../../../../exercises/inicial/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
   
    function start_9(){
        $("#ventana").load(ruta+'4-0-9/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_0_9()",
        titulo:"<center><h5><span>Selecciona</span> los medios de comunicación.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "4-0-9",
        nota:cal
        }
        );
        return false;  
    };
   
    function resultado(){
        $("#ventana").load('../../../../exercises/resultado/resultado.php');
        return false;
    };
</script>