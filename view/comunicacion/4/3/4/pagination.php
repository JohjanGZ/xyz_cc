<script type="text/javascript">
   function Page_lectura_4_3_4_1(){
        start_lectura_4_3_4_1();
        inicio();
        count = 0;
    }
   function Page_10(){
        start_10();
        inicio();
        count = 3;
    }
   function  Page_11(){
        start_11();
        inicio();
         count = 3;
    }
    function Page_12(){
        start_12();
        inicio();
        count = 3;
    }

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_4_3_4_1(){
        $("#ventana").load(ruta+'lectura4-3-4-1/index.php', 
        {
        next: "Page_10()", 
        procesar:"lectura1-1-1-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y <span>contesta</span> las preguntas.</h5></center>",
        restaurar:"start_lectura_4_3_4_1()",
        dir:ruta,
        cod: "lectura4-3-4-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_10(){
        $("#ventana").load(ruta+'4-3-10/index.php', 
        {
        next: "Page_11()", 
        procesar:"result_tipo_4_3_10()",
        titulo:"<center><h5><span>Selecciona</span> las respuestas correctas.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "4-3-10",
        nota:cal
        }
        );
        return false;  
    };
    function start_11(){
        $("#ventana").load(ruta+'4-3-11/index.php', 
        { 
        next: "Page_12()", 
        procesar:"result_tipo_4_3_11()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "4-3-11",
        nota:cal
        }
        );
        return false;
    };
    function start_12(){
        $("#ventana").load(ruta+'4-3-12/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_3_12()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "4-3-12",
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