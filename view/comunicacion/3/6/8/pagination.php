<script type="text/javascript">
    function Page_lectura_3_6_8_1(){
        start_lectura_3_6_8_1();
        inicio();
        count = 0;
    }
    function  Page_23(){
        start_23();
        inicio();
         count = 3;
    }
    function  Page_24(){
        start_24();
        inicio();
         count = 3;
    }
    function  Page_25(){
        start_25();
        inicio();
         count = 3;
    }

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
   
    function start_lectura_3_6_8_1(){
        $("#ventana").load(ruta+'lectura3-6-8-1/index.php', 
        {
        next: "Page_23()", 
        procesar:"lectura3-6-8-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y responde las preguntas.</h5></center>",
        restaurar:"start_lectura_3_6_8_1()",
        dir:ruta,
        cod: "lectura3-6-8-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_23(){
        $("#ventana").load(ruta+'3-6-23/index.php', 
        {
        next: "Page_24()", 
        procesar:"result_tipo_3_6_23()",
        titulo:"<center><h5><span>Selecciona</span> las respuestas correctas.</h5></center>",
        restaurar:"start_23()",
        dir:ruta,
        cod: "3-6-23",
        nota:cal
        }
        );
        return false;  
    };
    function start_24(){
        $("#ventana").load(ruta+'3-6-24/index.php', 
        {
        next: "Page_25()", 
        procesar:"result_tipo_3_6_24()",
        titulo:"<center><h5><span>Selecciona</span> las características del dragón.</h5></center>",
        restaurar:"start_24()",
        dir:ruta,
        cod: "3-6-24",
        nota:cal
        }
        );
        return false;  
    };
    function start_25(){
        $("#ventana").load(ruta+'3-6-25/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_3_6_25()",
        titulo:"<center><h5><span>Ordena</span> los hechos según pasaron en la historia.</h5></center>",
        restaurar:"start_25()",
        dir:ruta,
        cod: "3-6-25",
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