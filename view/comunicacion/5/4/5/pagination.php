<script type="text/javascript">
   
    function Page_17(){
        start_17();
        inicio();
        count = 3;
    }
   function  Page_18(){
        start_18();
        inicio();
         count = 3;
    }
    function Page_19(){
        start_19();
        inicio();
        count = 3;
    }
    function Page_20(){
        start_20();
        inicio();
        count = 3;
    }
    function Page_21(){
        start_21();
        inicio();
        count = 3;
    }

    var cant=5;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
   
   
    function start_17(){
        $("#ventana").load(ruta+'4-4-17/index.php', 
        {
        next: "Page_18()", 
        procesar:"result_tipo_4_4_17()",
        titulo:"<center><h5><span>Arrastra</span> el pronombre personal que corresponde a cada caso.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "4-4-17",
        nota:cal
        }
        );
        return false;  
    };
    function start_18(){
        $("#ventana").load(ruta+'4-4-18/index.php', 
        {
        next: "Page_19()", 
        procesar:"result_tipo_4_4_18()",
        titulo:"<center><h5><span>Selecciona</span> el pronombre adecuado para cada caso.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "4-4-18",
        nota:cal
        }
        );
        return false;  
    };
    function start_19(){
        $("#ventana").load(ruta+'4-4-19/index.php', 
        {
        next: "Page_20()", 
        procesar:"result_tipo_4_4_19()",
        titulo:"<center><h5><span>Completa</span> las siguientes oraciones con pronombres personales.</h5></center>",
        restaurar:"start_19()",
        dir:ruta,
        cod: "4-4-19",
        nota:cal
        }
        );
        return false;  
    };
    function start_20(){
        $("#ventana").load(ruta+'4-4-20/index.php', 
        {
        next: "Page_21()", 
        procesar:"result_tipo_4_4_20()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_20()",
        dir:ruta,
        cod: "4-4-20",
        nota:cal
        }
        );
        return false;  
    };
    function start_21(){
        $("#ventana").load(ruta+'4-4-21/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_4_21()",
        titulo:"<center><h5><span>Completa</span> con pronombres relativos las siguientes oraciones.</h5></center>",
        restaurar:"start_21()",
        dir:ruta,
        cod: "4-4-21",
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