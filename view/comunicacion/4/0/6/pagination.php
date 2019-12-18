<script type="text/javascript">
   function Page_lectura_4_0_6_1(){
        start_lectura_4_0_6_1();
        inicio();
        count = 0;
    }
    function Page_22(){
        start_22();
        inicio();
        count = 3;
    }
    function  Page_23(){
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

    function start_lectura_4_0_6_1(){
        $("#ventana").load(ruta+'lectura4-0-6-1/index.php', 
        {
        next: "Page_23()", 
        procesar:"lectura2-1-1-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_4_0_6_1()",
        dir:ruta,
        cod: "lectura4-0-6-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_22(){
        $("#ventana").load(ruta+'4-0-22/index.php', 
        {
        next: "Page_23()", 
        procesar:"result_tipo_4_0_22()",
        titulo:"<center><h5><span>Selecciona</span> las características físicas y de personalidad del genio.</h5></center>",
        restaurar:"start_22()",
        dir:ruta,
        cod: "4-0-22",
        nota:cal
        }
        );
        return false;  
    };
    function start_23(){
        $("#ventana").load(ruta+'4-0-23/index.php', 
        {
        next: "Page_24()", 
        procesar:"result_tipo_4_0_23()",
        titulo:"<center><h5><span>Selecciona</span> <i>Verdadero</i> si el enunciado es correcto o <i>Falso</i> si no lo es.</h5></center>",
        restaurar:"start_23()",
        dir:ruta,
        cod: "4-0-23",
        nota:cal
        }
        );
        return false;  
    };
    function start_24(){
        $("#ventana").load(ruta+'4-0-24/index.php', 
        {
        next: "Page_25()", 
        procesar:"result_tipo_4_0_24()",
        titulo:"<center><h5><span>Lee</span> la pregunta y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_24()",
        dir:ruta,
        cod: "4-0-24",
        nota:cal
        }
        );
        return false;  
    };
    function start_25(){
        $("#ventana").load(ruta+'4-0-25/index.php', 
        {
        next: "resultado()",
        procesar:"result_tipo_4_0_25()",
        titulo:"<center><h5><span>Lee</span> las preguntas y <span>selecciona</span> las respuestas correctas.</h5></center>",
        restaurar:"start_25()",
        dir:ruta,
        cod: "4-0-25",
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