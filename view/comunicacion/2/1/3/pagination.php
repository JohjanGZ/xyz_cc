<script type="text/javascript">
   
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
        $("#ventana").load(ruta+'2-1-7/index.php', 
        {
        next: "Page_8()", 
        procesar:"result_tipo_2_1_7()",
        titulo:"<center><h5><span>Observa</span> atentamente los dibujos y <span>arrastra</span> la palabra que los identifique. </h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "2-1-7",
        nota:cal
        }
        );
        return false;  
    };
    function start_8(){
        $("#ventana").load(ruta+'2-1-8/index.php', 
        {
        next: "Page_9()", 
        procesar:"result_tipo_2_1_8()",
        titulo:"<center><h5><span>Arrastra</span> y <span>completa</span> las palabras.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "2-1-8",
        nota:cal
        }
        );
        return false;  
    };
    function start_9(){
        $("#ventana").load(ruta+'2-1-9/index.php', 
        {
        next: "Page_10()", 
        procesar:"result_tipo_2_1_9()",
        titulo:"<center><h5><span>Selecciona</span> la manera correcta de escribir cada palabra. </h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "2-1-9",
        nota:cal
        }
        );
        return false;  
    };
    function start_10(){
        $("#ventana").load(ruta+'2-1-10/index.php', 
        {
        next: "Page_11()", 
        procesar:"result_tipo_2_1_10()",
        titulo:"<center><h5><span>Arrastra</span> las palabras en las columnas que corresponda.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "2-1-10",
        nota:cal
        }
        );
        return false;  
    };
    function start_11(){
        $("#ventana").load(ruta+'2-1-11/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_1_11()",
        titulo:"<center><h5><span>Busca</span> y <span>seleccionala</span> en la sopa de letras, las palabras que contengan <i>mp</i> o <i>mb</i>.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "2-1-11",
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