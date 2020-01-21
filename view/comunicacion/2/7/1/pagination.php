<script type="text/javascript">
    function Page_lectura_2_7_1_1(){
        start_lectura_2_7_1_1();
        inicio();
    }
    function Page_1(){
        start_1();
        inicio();
        count = 3;
    }
    function Page_2(){
        start_2();
        inicio();
        count = 3;
    }
    function Page_3(){
        start_3();
        inicio();
        count = 3;
    }
    function Page_4(){
        start_4();
        inicio();
        count = 3;
    }
    function Page_5(){
        start_5();
        inicio();
        count = 3;
    }
    function Page_6(){
        start_6();
        inicio();
        count = 3;
    }
    function Page_7(){
        start_7();
        inicio();
        count = 3;
    }
    function Page_8(){
        start_8();
        inicio();
        count = 3;
    }

    var cant=8;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_2_7_1_1(){
        $("#ventana").load(ruta+'lectura2-7-1-1/index.php', 
        {
        next: "Page_1()", 
        procesar:"lectura2-2-1-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y <span>contesta</span> las preguntas.</h5></center>",
        restaurar:"start_lectura_2_7_1_1()",
        dir:ruta,
        cod: "lectura2-7-1-1",
        nota:cal
        }
        );
        return false;  
    };
    function Page_1(){
        $("#ventana").load(ruta+'2-7-1/index.php', 
        {
        next: "Page_2()", 
        procesar:"result_tipo_2_7_1()",
        titulo:"<center><h5><span>Lee</span> las siguientes preguntas y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_1()",
        dir:ruta,
        cod: "2-7-1",   
        nota:cal
        }
        );
        return false;  
    };
    function start_2(){
        $("#ventana").load(ruta+'2-7-2/index.php', 
        {
        next: "Page_3()", 
        procesar:"result_tipo_2_7_2()",
        titulo:"<center><h5><span>Lee</span> las siguientes preguntas y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_2()",
        dir:ruta,
        cod: "2-7-2",
        nota:cal
        }
        );
        return false;  
    };
    function start_3(){
        $("#ventana").load(ruta+'2-7-3/index.php', 
        {
        next: "Page_4()", 
        procesar:"result_tipo_2_7_3()",
        titulo:"<center><h5><span>Selecciona</span> aquello que le salió a la abuela de Palitroque al meter su nariz al brebaje.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "2-7-3",
        nota:cal
        }
        );
        return false;  
    };
    function start_4(){
        $("#ventana").load(ruta+'2-7-4/index.php', 
        {
        next: "Page_5()", 
        procesar:"result_tipo_2_7_4()",
        titulo:"<center><h5><span>Lee</span> la pregunta y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "2-7-4",
        nota:cal
        }
        );
        return false;  
    };
    function start_5(){
        $("#ventana").load(ruta+'2-7-5/index.php', 
        {
        next: "Page_6()", 
        procesar:"result_tipo_2_7_5()",
        titulo:"<center><h5><span>Completa</span> la lista de compras que Palitroque pidió al señor Malaspintas.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "2-7-5",
        nota:cal
        }
        );
        return false;  
    };
    function start_6(){
        $("#ventana").load(ruta+'2-7-6/index.php', 
        {
        next: "Page_7()", 
        procesar:"result_tipo_2_7_6()",
        titulo:"<center><h5><span>Selecciona</span> <i>Verdadero</i> o <i>Falso</i> según corresponda.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "2-7-6",
        nota:cal
        }
        );
        return false;  
    };
    function start_7(){
        $("#ventana").load(ruta+'2-7-7/index.php', 
        {
        next: "Page_8()", 
        procesar:"result_tipo_2_7_7()",
        titulo:"<center><h5><span>Selecciona</span> la característica que corresponde a cada personaje.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "2-7-7",
        nota:cal
        }
        );
        return false;  
    };
    function start_8(){
        $("#ventana").load(ruta+'2-7-8/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_7_8()",
        titulo:"<center><h5><span>Selecciona</span> la característica que corresponde a cada personaje.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "2-7-8",
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