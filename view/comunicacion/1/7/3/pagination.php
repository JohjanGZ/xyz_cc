<script type="text/javascript">
    
    function Page_6(){
        start_6();
        inicio();
        count = 3;
    }
    function Page_7(){
        start_7();
        inicio();
        count = 3;
    }
    function Page_8(){
        start_8();
        inicio();
        count = 3;
    }
    function Page_9(){
        start_9();
        inicio();
        count = 3;
    }
    function Page_10(){
        start_10();
        inicio();
        count = 3;
    }
    
   
    var cant=5;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    
    function start_6(){   
        $("#ventana").load(ruta+'1-7-6/index.php', 
        { 
        next: "Page_7()", 
        procesar:"result_tipo_1_7_6()",
        titulo:"<center><h5><span>Escribe</span> los nombres de cada imagen según corresponda.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "1-7-6",
        nota:cal
        }          
        );
        return false;
    };
    function start_7(){   
        $("#ventana").load(ruta+'1-7-7/index.php', 
        { 
        next: "Page_8()", 
        procesar:"result_tipo_1_7_7()",
        titulo:"<center><h5><span>Completa</span> las oraciones con palabras de la pizarra.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "1-7-7",
        nota:cal
        }          
        );
        return false;
    };
    function start_8(){   
        $("#ventana").load(ruta+'1-7-8/index.php', 
        { 
        next: "Page_9()", 
        procesar:"result_tipo_1_7_8()",
        titulo:"<center><h5><span>Completa</span> las oraciones con palabras de la pizarra.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "1-7-8",
        nota:cal
        }          
        );
        return false;
    };
    function start_9(){   
        $("#ventana").load(ruta+'1-7-9/index.php', 
        { 
        next: "Page_10()", 
        procesar:"result_tipo_1_7_9()",
        titulo:"<center><h5><span>Completa</span> las siguientes palabras con las silabas <span>pra, pre, pri, pro, pru</span>.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "1-7-9",
        nota:cal
        }          
        );
        return false;
    };
    function start_10(){   
        $("#ventana").load(ruta+'1-7-10/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_7_10()",
        titulo:"<center><h5><span>Ordena</span> las siguientes silabas y <span>escribe</span> las palabras.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "1-7-10",
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