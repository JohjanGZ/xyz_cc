<script type="text/javascript">
   
   function Page_7(){
        start_7();
        inicio();
        count = 3;
    }
   function  Page_8(){
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
    function Page_11(){
        start_11();
        inicio();
        count = 3;
    }

    var cant=5;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    function start_7(){
        $("#ventana").load(ruta+'4-1-7/index.php', 
        {
        next: "Page_8()", 
        procesar:"result_tipo_4_1_7()",
        titulo:"<center><h5><span>Arrastra</span> el nombre de las imágenes y <span>forma</span> la palabra compuesta.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "4-1-7",
        nota:cal
        }
        );
        return false;  
    };
    function start_8(){
        $("#ventana").load(ruta+'4-1-8/index.php', 
        {
        next: "Page_9()", 
        procesar:"result_tipo_4_1_8()",
        titulo:"<center><h5><span>Relaciona</span> y <span>forma</span> palabras compuestas.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "4-1-8",
        nota:cal
        }
        );
        return false;  
    };
    function start_9(){
        $("#ventana").load(ruta+'4-1-9/index.php', 
        {
        next: "Page_10()", 
        procesar:"result_tipo_4_1_9()",
        titulo:"<center><h5><span>Busca</span> las siguientes palabras en la sopa de letras.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "4-1-9",
        nota:cal
        }
        );
        return false;  
    };
    function start_10(){
        $("#ventana").load(ruta+'4-1-10/index.php', 
        {
        next: "Page_11()", 
        procesar:"result_tipo_4_1_10()",
        titulo:"<center><h5><span>Arrastra</span> las palabras para <span>formar</span> la palabra compuesta.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "4-1-10",
        nota:cal
        }
        );
        return false;  
    };
    function start_11(){
        $("#ventana").load(ruta+'4-1-11/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_1_11()",
        titulo:"<center><h5><span>Clasifica</span> las siguientes palabras en simples o compuestas.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "4-1-11",
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