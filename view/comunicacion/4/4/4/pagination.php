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

    var cant=5;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
   
    function start_12(){
        $("#ventana").load(ruta+'4-4-12/index.php', 
        {
        next: "Page_13()", 
        procesar:"result_tipo_4_4_12()",
        titulo:"<center><h5><span>Selecciona</span> si las siguientes palabras forman diptongos o triptongos.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "4-4-12",
        nota:cal
        }
        );
        return false;  
    };
    function start_13(){
        $("#ventana").load(ruta+'4-4-13/index.php', 
        {
        next: "Page_14()", 
        procesar:"result_tipo_4_4_13()",
        titulo:"<center><h5><span>Arrastra</span> los diptongos para <span>completar</span> las palabras.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "4-4-13",
        nota:cal
        }
        );
        return false;  
    };
    function start_14(){
        $("#ventana").load(ruta+'4-4-14/index.php', 
        {
        next: "Page_15()", 
        procesar:"result_tipo_4_4_14()",
        titulo:"<center><h5><span>Lee</span> la palabra y <span>selecciona</span> si es <i>diptongo, hiato o triptongo</i>.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "4-4-14",
        nota:cal
        }
        );
        return false;  
    };
    function start_15(){
        $("#ventana").load(ruta+'4-4-15/index.php', 
        {
        next: "Page_16()", 
        procesar:"result_tipo_4_4_15()",
        titulo:"<center><h5><span>Arrastra</span> las palabras con hiatos y diptongos en donde corresponden.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "4-4-15",
        nota:cal
        }
        );
        return false;  
    };
    function start_16(){
        $("#ventana").load(ruta+'4-4-16/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_4_16()",
        titulo:"<center><h5><span>Lee</span> las preguntas y <span>selecciona</span> la respuesta.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "4-4-16",
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