<script type="text/javascript">
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
    function  Page_20(){
        start_20();
        inicio();
         count = 3;
    }
   function Page_21(){
        start_21();
        inicio();
        count = 3;
    }
    var cant=4;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_18(){   
        $("#ventana").load(ruta+'1-8-18/index.php', 
        { 
        next: "Page_19()", 
        procesar:"result_tipo_1_8_18()",
        titulo:"<center><h5><span>Observa</span> y <span>arrastra</span> dos palabras sinónimas para cada dibujo.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "1-8-18",
        nota:cal
        }          
        );
        return false;
    };
    function start_19(){   
        $("#ventana").load(ruta+'1-8-19/index.php', 
        { 
        next: "Page_20()", 
        procesar:"result_tipo_1_8_19()",
        titulo:"<center><h5><span>Lee</span> las palabras de la parte inferior y <span>arrástralas</span> a donde correspondan.</h5></center>",
        restaurar:"start_19()",
        dir:ruta,
        cod: "1-8-19",
        nota:cal
        }          
        );
        return false;
    };
    function start_20(){   
        $("#ventana").load(ruta+'1-8-20/index.php', 
        { 
        next: "Page_21()", 
        procesar:"result_tipo_1_8_20()",
        titulo:"<center><h5><span>Lee</span> las palabras de la parte inferior y <span>arrástralas</span> a donde correspondan.</h5></center>",
        restaurar:"start_20()",
        dir:ruta,
        cod: "1-8-20",
        nota:cal
        }          
        );
        return false;
    };
    function start_21(){   
        $("#ventana").load(ruta+'1-8-21/index.php', 
        { 
        next: "Page_22()", 
        procesar:"result_tipo_1_8_21()",
        titulo:"<center><h5><span>Lee</span> las palabras de la parte inferior y <span>arrástralas</span> a donde correspondan.</h5></center>",
        restaurar:"start_21()",
        dir:ruta,
        cod: "1-8-21",
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