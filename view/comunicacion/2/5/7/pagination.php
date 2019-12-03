<script type="text/javascript">
    function Page_lectura_2_6_7_1(){
        start_lectura_2_6_7_1();
        inicio();
        count = 0;
    }
   function Page_22(){
        start_22();
        inicio();
        count = 3;
    }
    function Page_23(){
        start_23();
        inicio();
        count = 3;
    }
    function Page_24(){
        start_24();
        inicio();
        count = 3;
    }
    function Page_25(){
        start_25();
        inicio();
        count = 3;
    }
    var cant=4;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_2_6_7_1(){
        $("#ventana").load(ruta+'lectura2-6-7-1/index.php', 
        {
        next: "Page_22()", 
        procesar:"lectura2-2-1-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_2_6_7_1()",
        dir:ruta,
        cod: "lectura2-6-7-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_22(){
        $("#ventana").load(ruta+'2-6-22/index.php', 
        {
        next: "Page_23()", 
        procesar:"result_tipo_2_6_22()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_22()",
        dir:ruta,
        cod: "2-6-22",
        nota:cal
        }
        );
        return false;  
    };
    function start_23(){
        $("#ventana").load(ruta+'2-6-23/index.php', 
        {
        next: "Page_24()", 
        procesar:"result_tipo_2_6_23()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correctax.</h5></center>",
        restaurar:"start_23()",
        dir:ruta,
        cod: "2-6-23",
        nota:cal
        }
        );
        return false;  
    };
    function start_24(){
        $("#ventana").load(ruta+'2-6-24/index.php', 
        {
        next: "Page_25()", 
        procesar:"result_tipo_2_6_24()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_24()",
        dir:ruta,
        cod: "2-6-24",
        nota:cal
        }
        );
        return false;  
    };
    function start_25(){
        $("#ventana").load(ruta+'2-6-25/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_6_25()",
        titulo:"<center><h5><span>Lee</span> los siguientes hechos y <span>arrastra</span> el número que le corresponde según el texto.</h5></center>",
        restaurar:"start_25()",
        dir:ruta,
        cod: "2-6-25",
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