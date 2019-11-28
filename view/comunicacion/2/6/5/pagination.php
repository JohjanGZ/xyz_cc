<script type="text/javascript">
    
   
    function Page_16(){
        start_16();
        inicio();
        count = 3;
    }
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

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_16(){
        $("#ventana").load(ruta+'2-6-16/index.php', 
        {
        next: "Page_17()", 
        procesar:"result_tipo_2_6_16()",
        titulo:"<center><h5><span>Selecciona</span> las oraciones que cumplen con la regla de concordancia.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "2-6-16",
        nota:cal
        }
        );
        return false;  
    };
    function start_17(){
        $("#ventana").load(ruta+'2-6-17/index.php', 
        {
        next: "Page_18()", 
        procesar:"result_tipo_2_6_17()",
        titulo:"<center><h5><span>Arrastra</span> y <span>completa</span> cada frase con los siguientes adjetivos.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "2-6-17",
        nota:cal
        }
        );
        return false;  
    };
    function start_18(){
        $("#ventana").load(ruta+'2-6-18/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_6_18()",
        titulo:"<center><h5><span>Relaciona</span> cada sustantivo con su adjetivo correspondiente.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "2-6-18",
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