<script type="text/javascript">
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
    function Page_12(){
        start_12();
        inicio();
        count = 3;
    }

    var cant=5;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_8(){
        $("#ventana").load(ruta+'2-4-8/index.php', 
        {
        next: "Page_9()", 
        procesar:"result_tipo_2_4_8()",
        titulo:"<center><h5><span>Observa</span> atentamente los dibujos y <span>arrastra</span> la palabra que los identifique.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "2-4-8",
        nota:cal
        }
        );
        return false;  
    };
    function start_9(){
        $("#ventana").load(ruta+'2-4-9/index.php', 
        {
        next: "Page_10()", 
        procesar:"result_tipo_2_4_9()",
        titulo:"<center><h5><span>Arrastra</span> y <span>completa</span> las palabras.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "2-4-9",
        nota:cal
        }
        );
        return false;  
    };
    function start_10(){
        $("#ventana").load(ruta+'2-4-10/index.php', 
        {
        next: "Page_11()", 
        procesar:"result_tipo_2_4_10()",
        titulo:"<center><h5><span>Selecciona</span> la manera correcta de escribir cada palabra.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "2-4-10",
        nota:cal
        }
        );
        return false;  
    };
    function start_11(){
        $("#ventana").load(ruta+'2-4-11/index.php', 
        {
        next: "Page_12()", 
        procesar:"result_tipo_2_4_11()",
        titulo:"<center><h5><span>Arrastra</span> las palabras en la columna que corresponda.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "2-4-11",
        nota:cal
        }
        );
        return false;  
    };
    function start_12(){
        $("#ventana").load(ruta+'2-4-12/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_4_12()",
        titulo:"<center><h5><span>Busca</span> y <span>selecciona</span> en la sopa de letras, las palabras que contengan <i>mp</i> o <i>mb</i>.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "2-4-12",
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