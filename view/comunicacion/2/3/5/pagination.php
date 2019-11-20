<script type="text/javascript">
   function Page_12(){
        start_12();
        inicio();
        count = 3;
    }
   function  Page_13(){
        start_13();
        inicio();
         count = 3;
    }
    function Page_14(){
        start_14();
        inicio();
        count = 3;
    }
   function  Page_15(){
        start_15();
        inicio();
         count = 3;
    }
    function Page_16(){
        start_16();
        inicio();
        count = 3;
    }
   function  Page_17(){
        start_17();
        inicio();
         count = 3;
    }
    function Page_18(){
        start_18();
        inicio();
        count = 3;
    }
    var cant=7;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_12(){
        $("#ventana").load(ruta+'2-2-12/index.php', 
        {
        next: "Page_13()", 
        procesar:"result_tipo_2_2_12()",
        titulo:"<center><h5><span>Observa</span> atentamente el listado de sustantivos, luego <span>arrastra</span> en la tabla aquellos que correspondan.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "2-2-12",
        nota:cal
        }
        );
        return false;  
    };
    function start_13(){
        $("#ventana").load(ruta+'2-2-13/index.php', 
        {
        next: "Page_14()", 
        procesar:"result_tipo_2_2_13()",
        titulo:"<center><h5><span>Arrastra</span> el sustantivo que corresponde con la imagen.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "2-2-13",
        nota:cal
        }
        );
        return false;  
    };
    function start_14(){
        $("#ventana").load(ruta+'2-2-14/index.php', 
        {
        next: "Page_15()", 
        procesar:"result_tipo_2_2_14()",
        titulo:"<center><h5><span>Arrastra</span> el nombre de las siguientes imágenes.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "2-2-14",
        nota:cal
        }
        );
        return false;  
    };
    function start_15(){
        $("#ventana").load(ruta+'2-2-15/index.php', 
        {
        next: "Page_16()", 
        procesar:"result_tipo_2_2_15()",
        titulo:"<center><h5><span>Marca</span> <span>propio</span> o <span>común</span> en los siguientes recuadros, según corresponda a cada sustantivo.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "2-2-15",
        nota:cal
        }
        );
        return false;  
    };
    function start_16(){
        $("#ventana").load(ruta+'2-2-16/index.php', 
        {
        next: "Page_17()", 
        procesar:"result_tipo_2_2_16()",
        titulo:"<center><h5><span>Arrastra</span> y <span>clasifica</span> cada sustantivo donde corresponde.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "2-2-16",
        nota:cal
        }
        );
        return false;  
    };
    function start_17(){
        $("#ventana").load(ruta+'2-2-17/index.php', 
        {
        next: "Page_18()", 
        procesar:"result_tipo_2_2_17()",
        titulo:"<center><h5><span>Arrastra</span> y <span>clasifica</span> los siguientes sustantivos en comunes o propios.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "2-2-17",
        nota:cal
        }
        );
        return false;  
    };
    function start_18(){
        $("#ventana").load(ruta+'2-2-18/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_2_18()",
        titulo:"<center><h5><span>Arrastra</span> cada sustantivo propio según corresponda.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "2-2-18",
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