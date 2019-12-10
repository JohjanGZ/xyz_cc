<script type="text/javascript">
    function Page_lectura_3_5_5_1(){
        start_lectura_3_5_5_1();
        inicio();
        count = 0;
    }
    function  Page_10(){
        start_10();
        inicio();
         count = 3;
    }
    function  Page_11(){
        start_11();
        inicio();
         count = 3;
    }
    var cant=2;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_3_5_5_1(){
        $("#ventana").load(ruta+'lectura3-5-5-1/index.php', 
        {
        next: "Page_10()", 
        procesar:"lectura3-5-5-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_3_5_5_1()",
        dir:ruta,
        cod: "lectura3-5-5-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_10(){
        $("#ventana").load(ruta+'3-5-10/index.php', 
        {
        next: "Page_11()", 
        procesar:"result_tipo_3_5_10()",
        titulo:"<center><h5><span>Lee</span> las preguntas y <span>selecciona</span> las respuestas correctas.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "3-5-10",
        nota:cal
        }
        );
        return false;  
    };
    function start_11(){
        $("#ventana").load(ruta+'3-5-11/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_3_5_11()",
        titulo:"<center><h5><span>Lee</span> las preguntas y <span>selecciona</span> las respuestas correctas.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "3-5-11",
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