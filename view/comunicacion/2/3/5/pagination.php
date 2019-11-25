<script type="text/javascript">
   function Page_lectura_2_3_5_1(){
        start_lectura_2_3_5_1();
        inicio();
        count = 0;
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
    function Page_lectura_2_3_5_2(){
        start_lectura_2_3_5_2();
        inicio();
        count = 0;
    }
    function Page_18(){
        start_18();
        inicio();
        count = 3;
    }
    var cant=5;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_2_3_5_1(){
        $("#ventana").load(ruta+'lectura2-3-5-1/index.php', 
        {
        next: "Page_14()", 
        procesar:"lectura2-2-1-1()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_2_3_5_1()",
        dir:ruta,
        cod: "lectura2-3-5-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_14(){
        $("#ventana").load(ruta+'2-3-14/index.php', 
        {
        next: "Page_15()", 
        procesar:"result_tipo_2_3_14()",
        titulo:"<center><h5><span>Responde</span> las siguientes preguntas.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "2-3-14",
        nota:cal
        }
        );
        return false;  
    };
    function start_15(){
        $("#ventana").load(ruta+'2-3-15/index.php', 
        {
        next: "Page_16()", 
        procesar:"result_tipo_2_3_15()",
        titulo:"<center><h5><span>Responde</span> las siguientes preguntas.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "2-3-15",
        nota:cal
        }
        );
        return false;  
    };
    function start_16(){
        $("#ventana").load(ruta+'2-3-16/index.php', 
        {
        next: "Page_17()", 
        procesar:"result_tipo_2_3_16()",
        titulo:"<center><h5><span>Responde</span> las siguientes preguntas.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "2-3-16",
        nota:cal
        }
        );
        return false;  
    };
    function start_17(){
        $("#ventana").load(ruta+'2-3-17/index.php', 
        {
        next: "Page_lectura_2_3_5_2()", 
        procesar:"result_tipo_2_3_17()",
        titulo:"<center><h5><span>Responde</span> las siguientes preguntas.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "2-3-17",
        nota:cal
        }
        );
        return false;  
    };
    function start_lectura_2_3_5_2(){
        $("#ventana").load(ruta+'lectura2-3-5-2/index.php', 
        {
        next: "Page_18()", 
        procesar:"lectura2-2-1-1()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_2_3_5_2()",
        dir:ruta,
        cod: "lectura2-3-5-2",
        nota:cal
        }
        );
        return false;  
    };
    function start_18(){
        $("#ventana").load(ruta+'2-3-18/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_3_18()",
        titulo:"<center><h5><span>Responde</span> las siguientes preguntas.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "2-3-18",
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