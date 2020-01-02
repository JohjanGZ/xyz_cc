<script type="text/javascript">
    function Page_lectura_4_2_6_1(){
        start_lectura_4_2_6_1();
        inicio();
        count = 0;
    }
    function Page_17(){
        start_17();
        inicio();
        count = 3;
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

    var cant=9;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    function start_lectura_4_2_6_1(){
        $("#ventana").load(ruta+'lectura4-2-6-1/index.php', 
        {
        next: "Page_17()", 
        procesar:"lectura1-1-6-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y <span>contesta</span> las preguntas.</h5></center>",
        restaurar:"start_lectura_4_2_6_1()",
        dir:ruta,
        cod: "lectura4-2-6-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_17(){
        $("#ventana").load(ruta+'4-2-17/index.php', 
        {
        next: "Page_18()", 
        procesar:"result_tipo_4_2_17()",
        titulo:"<center><h5><span>Selecciona</span>la respuesta correcta.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "4-2-17",
        nota:cal
        }
        );
        return false;  
    };
    function start_18(){
        $("#ventana").load(ruta+'4-2-18/index.php', 
        {
        next: "Page_19()", 
        procesar:"result_tipo_4_2_18()",
        titulo:"<center><h5><span>Lee</span> el contenido de las cajas y <span>ordena</span> los hechos según ocurrieron en el cuento.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "4-2-18",
        nota:cal
        }
        );
        return false;  
    };
    function start_19(){
        $("#ventana").load(ruta+'4-2-19/index.php', 
        {
        next: "Page_20()", 
        procesar:"result_tipo_4_2_19()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta que se infiere a partir del enunciado.</h5></center>",
        restaurar:"start_19()",
        dir:ruta,
        cod: "4-2-19",
        nota:cal
        }
        );
        return false;  
    };
    function start_20(){
        $("#ventana").load(ruta+'4-2-20/index.php', 
        {
        next: "Page_21()", 
        procesar:"result_tipo_4_2_20()",
        titulo:"<center><h5><span>Selecciona</span>la respuesta correcta.</h5></center>",
        restaurar:"start_20()",
        dir:ruta,
        cod: "4-2-20",
        nota:cal
        }
        );
        return false;  
    };
    function start_21(){
        $("#ventana").load(ruta+'4-2-21/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_2_21()",
        titulo:"<center><h5><span>Selecciona</span> las características de la esposa y la hija del rey.</h5></center>",
        restaurar:"start_21()",
        dir:ruta,
        cod: "4-2-21",
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