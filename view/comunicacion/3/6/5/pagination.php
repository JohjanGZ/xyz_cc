<script type="text/javascript">
    
   
    function Page_17(){
        start_17();
        inicio();
        count = 3;
    }
    function Page_18(){
        start_18();
        inicio();
        count = 3;
    }
    function Page_19(){
        start_19();
        inicio();
        count = 3;
    }

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    
    function start_17(){
        $("#ventana").load(ruta+'2-7-17/index.php', 
        {
        next: "Page_18()", 
        procesar:"result_tipo_2_7_17()",
        titulo:"<center><h5><span>Selecciona</span> y <span>arrastra</span> las palabras al recuadro que corresponda.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "2-7-17",
        nota:cal
        }
        );
        return false;  
    };
    function start_18(){
        $("#ventana").load(ruta+'2-7-18/index.php', 
        {
        next: "Page_19()", 
        procesar:"result_tipo_2_7_18()",
        titulo:"<center><h5><span>Une</span> las siguientes palabras para formar oraciones.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "2-7-18",
        nota:cal
        }
        );
        return false;  
    };
    function start_19(){
        $("#ventana").load(ruta+'2-7-19/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_7_19()",
        titulo:"<center><h5><span>Completa</span> las oraciones <span>arrastrando</span> un pronombre personal.</h5></center>",
        restaurar:"start_19()",
        dir:ruta,
        cod: "2-7-19",
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