<script type="text/javascript">
   
   function Page_5(){
        start_5();
        inicio();
        count = 3;
    }
   function  Page_6(){
        start_6();
        inicio();
         count = 3;
    }
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
   function  Page_10(){
        start_10();
        inicio();
         count = 3;
    }
    function  Page_11(){
        start_11();
        inicio();
         count = 3;
    }

    var cant=6;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_5(){
        $("#ventana").load(ruta+'4-4-5/index.php', 
        {
        next: "Page_6()", 
        procesar:"result_tipo_4_4_5()",
        titulo:"<center><h5><span>Relaciona</span> las palabras que forman un mismo campo semántico.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "4-4-5",
        nota:cal
        }
        );
        return false;  
    };
    function start_6(){
        $("#ventana").load(ruta+'4-4-6/index.php', 
        {
        next: "Page_7()", 
        procesar:"result_tipo_4_4_6()",
        titulo:"<center><h5><span>Selecciona</span> el campo semántico de cada grupo de palabras.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "4-4-6",
        nota:cal
        }
        );
        return false;  
    };
    function start_7(){
        $("#ventana").load(ruta+'4-4-7/index.php', 
        {
        next: "Page_8()", 
        procesar:"result_tipo_4_4_7()",
        titulo:"<center><h5><span>Arrastra</span> el nombre de cada campo semántico.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "4-4-7",
        nota:cal
        }
        );
        return false;  
    };
    function start_8(){
        $("#ventana").load(ruta+'4-4-8/index.php', 
        {
        next: "Page_9()", 
        procesar:"result_tipo_4_4_8()",
        titulo:"<center><h5><span>Observa</span> las imágenes y <span>selecciona</span> su campo semántico.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "4-4-8",
        nota:cal
        }
        );
        return false;  
    };
    function start_9(){
        $("#ventana").load(ruta+'4-4-9/index.php', 
        {
        next: "Page_10()", 
        procesar:"result_tipo_4_4_9()",
        titulo:"<center><h5><span>Selecciona</span> la palabra intrusa de cada campo semántico.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "4-4-9",
        nota:cal
        }
        );
        return false;  
    };
    function start_10(){
        $("#ventana").load(ruta+'4-4-10/index.php', 
        {
        next: "Page_11()", 
        procesar:"result_tipo_4_4_10()",
        titulo:"<center><h5><span>Busca</span> los 10 animales de la lista, en la sopa de letras.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "4-4-10",
        nota:cal
        }
        );
        return false;  
    };
    function start_11(){
        $("#ventana").load(ruta+'4-4-11/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_4_11()",
        titulo:"<center><h5><span>Arrastra</span> las palabras para completar las oraciones.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "4-4-11",
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