<script type="text/javascript">
   
  
    function Page_22(){
        start_22();
        inicio();
        count = 3;
    }

    var cant=1;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
   
    function start_22(){
        $("#ventana").load(ruta+'4-4-22/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_4_22()",
        titulo:"<center><h5><span>Completa</span> el mapa semántico.</h5></center>",
        restaurar:"start_22()",
        dir:ruta,
        cod: "4-4-22",
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