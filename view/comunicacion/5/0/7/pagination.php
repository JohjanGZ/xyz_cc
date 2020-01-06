<script type="text/javascript">

function Page_lectura_5_0_7_1(){
        start_lectura_5_0_7_1();
        inicio();
        count = 0;
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

    var cant=5;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_5_0_7_1(){
        $("#ventana").load(ruta+'lectura5-0-7-1/index.php', 
        {
        next: "Page_21()", 
        procesar:"lectura2-1-1-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_5_0_7_1()",
        dir:ruta,
        cod: "lectura5-0-7-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_21(){
        $("#ventana").load(ruta+'5-0-21/index.php', 
        {
        next: "Page_22()", 
        procesar:"result_tipo_5_0_21()",
        titulo:"<center><h5><span>Selecciona</span> las respuestas correctas.</h5></center>",
        restaurar:"start_21()",
        dir:ruta,
        cod: "5-0-21",
        nota:cal
        }
        );
        return false;  
    };
    function start_22(){
        $("#ventana").load(ruta+'5-0-22/index.php', 
        {
        next: "Page_23()", 
        procesar:"result_tipo_5_0_22()",
        titulo:"<center><h5><span>Selecciona</span> y <span>coloca</span> las siguientes características al personaje que corresponde.</h5></center>",
        restaurar:"start_22()",
        dir:ruta,
        cod: "5-0-22",
        nota:cal
        }
        );
        return false;  
    };
    function start_23(){
        $("#ventana").load(ruta+'5-0-23/index.php', 
        {
        next: "Page_24()", 
        procesar:"result_tipo_5_0_23()",
        titulo:"<center><h5><span>Marca</span> <i>Verdadero</i> o <i>Falso</i> según corresponda.</h5></center>",
        restaurar:"start_23()",
        dir:ruta,
        cod: "5-0-23",
        nota:cal
        }
        );
        return false;  
    };
    function start_24(){
        $("#ventana").load(ruta+'5-0-24/index.php', 
        {
        next: "Page_25()", 
        procesar:"result_tipo_5_0_24()",
        titulo:"<center><h5><span>Observa</span> las imágenes, luego <span>selecciona</span> aquella que crees que represente a una aldea aguaruna.</h5></center>",
        restaurar:"start_24()",
        dir:ruta,
        cod: "5-0-24",
        nota:cal
        }
        );
        return false;  
    };
    function start_25(){
        $("#ventana").load(ruta+'5-0-25/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_5_0_25()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_25()",
        dir:ruta,
        cod: "5-0-25",
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