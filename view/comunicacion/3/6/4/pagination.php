<script type="text/javascript">
   
    function  Page_13(){
        start_13();
        inicio();
         count = 3;
    }
    function  Page_14(){
        start_14();
        inicio();
         count = 3;
    }
    function  Page_15(){
        start_15();
        inicio();
         count = 3;
    }
    function  Page_16(){
        start_16();
        inicio();
         count = 3;
    }
    function  Page_17(){
        start_17();
        inicio();
         count = 3;
    }

    var cant=5;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
   
    
    function start_13(){
        $("#ventana").load(ruta+'3-6-13/index.php', 
        {
        next: "Page_14()", 
        procesar:"result_tipo_3_6_13()",
        titulo:"<center><h5><span>Observa</span> las imágenes y <span>arrastra</span> sus respectivos nombres.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "3-6-13",
        nota:cal
        }
        );
        return false;  
    };
    function start_14(){
        $("#ventana").load(ruta+'3-6-14/index.php', 
        {
        next: "Page_15()", 
        procesar:"result_tipo_3_6_14()",
        titulo:"<center><h5><span>Arrastra</span> los números según los pasos para preparar ensalada de frutas.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "3-6-14",
        nota:cal
        }
        );
        return false;  
    };
    function start_15(){
        $("#ventana").load(ruta+'3-6-15/index.php', 
        {
        next: "Page_16()", 
        procesar:"result_tipo_3_6_15()",
        titulo:"<center><h5><span>Arrastra</span> los números según los pasos para preparar ensalada de frutas.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "3-6-15",
        nota:cal
        }
        );
        return false;  
    };
    function start_16(){
        $("#ventana").load(ruta+'3-6-16/index.php', 
        {
        next: "Page_17()", 
        procesar:"result_tipo_3_6_16()",
        titulo:"<center><h5><span>Arrastra</span> los números según los pasos para preparar ensalada de frutas.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "3-6-16",
        nota:cal
        }
        );
        return false;  
    };
    function start_17(){
        $("#ventana").load(ruta+'3-6-17/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_3_6_17()",
        titulo:"<center><h5><span>Arrastra</span> los números según los pasos para preparar ensalada de frutas.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "3-6-17",
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