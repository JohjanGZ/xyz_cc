<script type="text/javascript">
   
   function Page_16(){
        start_16();
        inicio();
        count = 3;
    }
   function  Page_17(){
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
    var cal= 16/16;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    function start_16(){
        $("#ventana").load(ruta+'5-1-16/index.php', 
        {
        next: "Page_17()", 
        procesar:"result_tipo_5_1_16()",
        titulo:"<center><h5><span>Selecciona</span> el concepto correspondiente con la historieta.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "5-1-16",
        nota:cal
        }
        );
        return false;  
    };
    function start_17(){
        $("#ventana").load(ruta+'5-1-17/index.php', 
        {
        next: "Page_18()", 
        procesar:"result_tipo_5_1_17()",
        titulo:"<center><h5><span>Selecciona</span> las partes que pertenecen a la historieta.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "5-1-17",
        nota:cal
        }
        );
        return false;  
    };
    function start_18(){
        $("#ventana").load(ruta+'5-1-18/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_5_1_18()",
        titulo:"<center><h5><span>Emplea</span> <i>el, los, las, la</i> a cada sustantivo e <span>indica</span> el género de cada uno.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "5-1-18",
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