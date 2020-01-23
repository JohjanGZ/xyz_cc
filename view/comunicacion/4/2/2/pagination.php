<script type="text/javascript">
   
   function Page_4(){
        start_4();
        inicio();
        count = 3;
    }
   function  Page_5(){
        start_5();
        inicio();
         count = 3;
    }
    function Page_6(){
        start_6();
        inicio();
        count = 3;
    }
   function  Page_7(){
        start_7();
        inicio();
         count = 3;
    }
    function Page_8(){
        start_8();
        inicio();
        count = 3;
    }

    var cant=5;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
   
    function start_4(){
        $("#ventana").load(ruta+'4-2-4/index.php', 
        {
        next: "Page_5()", 
        procesar:"result_tipo_4_2_4()",
        titulo:"<center><h5><span>Selecciona</span> si las siguientes palabras forman diptongos o triptongos.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "4-2-4",
        nota:cal
        }
        );
        return false;  
    };
    function start_5(){
        $("#ventana").load(ruta+'4-2-5/index.php', 
        {
        next: "Page_6()", 
        procesar:"result_tipo_4_2_5()",
        titulo:"<center><h5><span>Arrastra</span> los diptongos para <span>completar</span> las palabras.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "4-2-5",
        nota:cal
        }
        );
        return false;  
    };
    function start_6(){
        $("#ventana").load(ruta+'4-2-6/index.php', 
        {
        next: "Page_7()", 
        procesar:"result_tipo_4_2_6()",
        titulo:"<center><h5><span>Lee</span> la palabra y <span>selecciona</span> si es <i>diptongo, hiato o triptongo</i>.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "4-2-6",
        nota:cal
        }
        );
        return false;  
    };
    function start_7(){
        $("#ventana").load(ruta+'4-2-7/index.php', 
        {
        next: "Page_8()", 
        procesar:"result_tipo_4_2_7()",
        titulo:"<center><h5><span>Arrastra</span> las palabras con hiatos y diptongos en donde corresponden.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "4-2-7",
        nota:cal
        }
        );
        return false;  
    };
    function start_8(){
        $("#ventana").load(ruta+'4-2-8/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_2_8()",
        titulo:"<center><h5><span>Lee</span> las preguntas y <span>selecciona</span> la respuesta.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "4-2-8",
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