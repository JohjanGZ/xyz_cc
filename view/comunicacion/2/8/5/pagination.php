<script type="text/javascript">
    function Page_lectura_2_9_5_1(){
        start_lectura_2_9_5_1();
        inicio();
        count = 0;
    }
    function Page_18(){
        start_18();
        inicio();
        count = 3;
    }
    function Page_19(){
        start_19();
        inicio();
        count = 3;
    }
    function Page_20(){
        start_20();
        inicio();
        count = 3;
    }
    function Page_21(){
        start_21();
        inicio();
        count = 3;
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

    var cant=8;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_2_9_5_1(){
        $("#ventana").load(ruta+'lectura2-9-5-1/index.php', 
        {
        next: "Page_18()", 
        procesar:"lectura2-2-1-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_2_9_5_1()",
        dir:ruta,
        cod: "lectura2-9-5-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_18(){
        $("#ventana").load(ruta+'2-9-18/index.php', 
        {
        next: "Page_19()", 
        procesar:"result_tipo_2_9_18()",
        titulo:"<center><h5><span>Lee</span> las siguientes preguntas y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "2-9-18",
        nota:cal
        }
        );
        return false;  
    };
    function start_19(){
        $("#ventana").load(ruta+'2-9-19/index.php', 
        {
        next: "Page_20()", 
        procesar:"result_tipo_2_9_19()",
        titulo:"<center><h5><span>Lee</span> las siguientes preguntas y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_19()",
        dir:ruta,
        cod: "2-9-19",
        nota:cal
        }
        );
        return false;  
    };
    function start_20(){
        $("#ventana").load(ruta+'2-9-20/index.php', 
        {
        next: "Page_21()", 
        procesar:"result_tipo_2_9_20()",
        titulo:"<center><h5><span>Selecciona</span> aquello que le salió a la abuela de Palitroque al meter su nariz al brebaje.</h5></center>",
        restaurar:"start_20()",
        dir:ruta,
        cod: "2-9-20",
        nota:cal
        }
        );
        return false;  
    };
    function start_21(){
        $("#ventana").load(ruta+'2-9-21/index.php', 
        {
        next: "Page_22()", 
        procesar:"result_tipo_2_9_21()",
        titulo:"<center><h5><span>Lee</span> la pregunta y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_21()",
        dir:ruta,
        cod: "2-9-21",
        nota:cal
        }
        );
        return false;  
    };
    function start_22(){
        $("#ventana").load(ruta+'2-9-22/index.php', 
        {
        next: "Page_23()", 
        procesar:"result_tipo_2_9_22()",
        titulo:"<center><h5><span>Completa</span> la lista de compras que Palitroque pidió al señor Malaspintas.</h5></center>",
        restaurar:"start_22()",
        dir:ruta,
        cod: "2-9-22",
        nota:cal
        }
        );
        return false;  
    };
    function start_23(){
        $("#ventana").load(ruta+'2-9-23/index.php', 
        {
        next: "Page_24()", 
        procesar:"result_tipo_2_9_23()",
        titulo:"<center><h5><span>Selecciona</span> <i>Verdadero</i> o <i>Falso</i> según corresponda.</h5></center>",
        restaurar:"start_23()",
        dir:ruta,
        cod: "2-9-23",
        nota:cal
        }
        );
        return false;  
    };
    function start_24(){
        $("#ventana").load(ruta+'2-9-24/index.php', 
        {
        next: "Page_25()", 
        procesar:"result_tipo_2_9_24()",
        titulo:"<center><h5><span>Selecciona</span> la característica que corresponde a cada personaje.</h5></center>",
        restaurar:"start_24()",
        dir:ruta,
        cod: "2-9-24",
        nota:cal
        }
        );
        return false;  
    };
    function start_25(){
        $("#ventana").load(ruta+'2-9-25/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_9_25()",
        titulo:"<center><h5><span>Selecciona</span> la característica que corresponde a cada personaje.</h5></center>",
        restaurar:"start_25()",
        dir:ruta,
        cod: "2-9-25",
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