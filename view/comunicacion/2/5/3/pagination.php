<script type="text/javascript">
    
    function Page_lectura_2_5_3_1(){
        start_lectura_2_5_3_1();
        inicio();
        count = 0;
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
    function Page_lectura_2_5_3_2(){
        start_lectura_2_5_3_2();
        inicio();
        count = 0;
    }
    function Page_13(){
        start_13();
        inicio();
        count = 3;
    }

    var cant=5;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
    // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_lectura_2_5_3_1(){
        $("#ventana").load(ruta+'lectura2-5-3-1/index.php', 
        {
        next: "Page_9", 
        procesar:"lectura2-2-1-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y <span>contesta</span> las preguntas.</h5></center>",
        restaurar:"start_lectura_2_5_3_1()",
        dir:ruta,
        cod: "lectura2-5-3-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_9(){
        $("#ventana").load(ruta+'2-5-9/index.php', 
        {
        next: "Page_10()", 
        procesar:"result_tipo_2_5_9()",
        titulo:"<center><h5><span>Responde</span> las siguientes preguntas.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "2-5-9",
        nota:cal
        }
        );
        return false;  
    };
    function start_10(){
        $("#ventana").load(ruta+'2-5-10/index.php', 
        {
        next: "Page_11()", 
        procesar:"result_tipo_2_5_10()",
        titulo:"<center><h5><span>Responde</span> las siguientes preguntas.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "2-5-10",
        nota:cal
        }
        );
        return false;  
    };
    function start_11(){
        $("#ventana").load(ruta+'2-5-11/index.php', 
        {
        next: "Page_12()", 
        procesar:"result_tipo_2_5_11()",
        titulo:"<center><h5><span>Responde</span> las siguientes preguntas.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "2-5-11",
        nota:cal
        }
        );
        return false;  
    };
    function start_12(){
        $("#ventana").load(ruta+'2-5-12/index.php', 
        {
        next: "Page_lectura_2_5_3_2()", 
        procesar:"result_tipo_2_5_12()",
        titulo:"<center><h5><span>Responde</span> las siguientes preguntas.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "2-5-12",
        nota:cal
        }
        );
        return false;  
    };
    function start_lectura_2_5_3_2(){
        $("#ventana").load(ruta+'lectura2-5-3-2/index.php', 
        {
        next: "Page_13", 
        procesar:"lectura2-2-1-2()",
        titulo:"<center><h5><span>Lee</span> atentamente y <span>contesta</span> las preguntas.</h5></center>",
        restaurar:"start_lectura_2_5_3_2()",
        dir:ruta,
        cod: "lectura2-5-3-2",
        nota:cal
        }
        );
        return false;  
    };
    function start_13(){
        $("#ventana").load(ruta+'2-5-13/index.php', 
        {
        next: "Page_14()", 
        procesar:"result_tipo_2_5_13()",
        titulo:"<center><h5><span>Responde</span> las siguientes preguntas.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "2-5-13",
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