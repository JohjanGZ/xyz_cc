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
    function Page_19(){
        start_19();
        inicio();
        count = 3;
    }

    var cant=4;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
  
    function start_16(){
        $("#ventana").load(ruta+'2-8-16/index.php', 
        {
        next: "Page_17()", 
        procesar:"result_tipo_2_8_16()",
        titulo:"<center><h5><span>Lee</span> atentamente las situaciones, luego <span>selecciona</span> la alternativa que corresponde.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "2-8-16",
        nota:cal
        }
        );
        return false;  
    };
    function start_17(){
        $("#ventana").load(ruta+'2-8-17/index.php', 
        {
        next: "Page_18()", 
        procesar:"result_tipo_2_8_17()",
        titulo:"<center><h5><span>Lee</span> atentamente las situaciones, luego <span>selecciona</span> la alternativa que corresponde.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "2-8-17",
        nota:cal
        }
        );
        return false;  
    };
    function start_18(){
        $("#ventana").load(ruta+'2-8-18/index.php', 
        {
        next: "Page_19()", 
        procesar:"result_tipo_2_8_18()",
        titulo:"<center><h5><span>Observa</span> las siguientes imágenes, luego <span>marca</span> la inferencia correcta.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "2-8-18",
        nota:cal
        }
        );
        return false;  
    };
    function start_19(){
        $("#ventana").load(ruta+'2-8-19/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_8_19()",
        titulo:"<center><h5><span>Observa</span> las siguientes imágenes, luego <span>marca</span> la inferencia correcta.</h5></center>",
        restaurar:"start_19()",
        dir:ruta,
        cod: "2-8-19",
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