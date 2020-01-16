<script type="text/javascript">

    function  Page_18(){
        start_18();
        inicio();
         count = 3;
    }
    function  Page_19(){
        start_19();
        inicio();
         count = 3;
    }
    function  Page_20(){
        start_20();
        inicio();
         count = 3;
    }
    var cant=2;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_18(){   
        $("#ventana").load(ruta+'1-5-18/index.php', 
        { 
        next: "Page_19()", 
        procesar:"result_tipo_1_5_18()",
        titulo:"<center><h5><span class='ftitulo'>Observa</span> atentamente, <span>separa</span> las palabras y <span>escribe</span> la oración.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "1-5-18",
        nota:cal
        }          
        );
        return false;
    };
    function start_19(){   
        $("#ventana").load(ruta+'1-5-19/index.php', 
        { 
        next: "Page_20()", 
        procesar:"result_tipo_1_5_19()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> las palabras y únelas con los dibujos según corresponda.</h5></center>",
        restaurar:"start_19()",
        dir:ruta,
        cod: "1-5-19",
        nota:cal
        }          
        );
        return false;
    };
    function start_20(){   
        $("#ventana").load(ruta+'1-5-20/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_5_20()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> las palabras y únelas con los dibujos según corresponda.</h5></center>",
        restaurar:"start_20()",
        dir:ruta,
        cod: "1-5-20",
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