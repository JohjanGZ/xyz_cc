<script type="text/javascript">
    function  Page_30(){
        start_30();
        inicio();
         count = 3;
    }
   function Page_31(){
        start_31();
        inicio();
        count = 3;
    }
    function  Page_32(){
        start_32();
        inicio();
         count = 3;
    }
    function Page_33(){
        start_33();
        inicio();
        count = 3;
    }
    function  Page_34(){
        start_34();
        inicio();
         count = 3;
    }
    var cant=5;
    var cal= 26/26;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_30(){   
        $("#ventana").load(ruta+'1-5-30/index.php', 
        { 
        next: "Page_31()", 
        procesar:"result_tipo_1_5_30()",
        titulo:"<center><h5><span>Observa</span> y <span>arrastra</span> dos palabras sinónimas para cada dibujo.</h5></center>",
        restaurar:"start_30()",
        dir:ruta,
        cod: "1-5-30",
        nota:cal
        }          
        );
        return false;
    };
    function start_31(){   
        $("#ventana").load(ruta+'1-5-31/index.php', 
        { 
        next: "Page_32()", 
        procesar:"result_tipo_1_5_31()",
        titulo:"<center><h5><span>Lee</span> las palabras de la parte inferior y <span>arrástralas</span> a donde correspondan.</h5></center>",
        restaurar:"start_31()",
        dir:ruta,
        cod: "1-5-31",
        nota:cal
        }          
        );
        return false;
    };
    function start_32(){   
        $("#ventana").load(ruta+'1-5-32/index.php', 
        { 
        next: "Page_33()", 
        procesar:"result_tipo_1_5_32()",
        titulo:"<center><h5><span>Lee</span> las palabras de la parte inferior y <span>arrástralas</span> a donde correspondan.</h5></center>",
        restaurar:"start_32()",
        dir:ruta,
        cod: "1-5-32",
        nota:cal
        }          
        );
        return false;
    };
    function start_33(){   
        $("#ventana").load(ruta+'1-5-33/index.php', 
        { 
        next: "Page_34()", 
        procesar:"result_tipo_1_5_33()",
        titulo:"<center><h5><span>Lee</span> las palabras de la parte inferior y <span>arrástralas</span> a donde correspondan.</h5></center>",
        restaurar:"start_33()",
        dir:ruta,
        cod: "1-5-33",
        nota:cal
        }          
        );
        return false;
    };
    function start_34(){   
        $("#ventana").load(ruta+'1-5-34/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_5_34()",
        titulo:"<center><h5><span>Lee</span> las palabras de la parte inferior y <span>arrástralas</span> a donde correspondan.</h5></center>",
        restaurar:"start_34()",
        dir:ruta,
        cod: "1-5-34",
        nota:cal
        }          
        );
        return false;
    };
    function resultado(){
        $("#ventana").load('../../../exercises/resultado/resultado.php');
        return false;
    };
</script>