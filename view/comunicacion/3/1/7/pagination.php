<script type="text/javascript">
    function Page_lectura_3_1_7_1(){
        start_lectura_3_1_7_1();
        inicio();
        count = 0;
    }
    function Page_22(){
        start_22();
        inicio();
        count = 3;
    }

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_3_1_7_1(){
        $("#ventana").load(ruta+'lectura3-1-7-1/index.php', 
        {
        next: "Page_22()", 
        procesar:"lectura2-1-5-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_3_1_7_1()",
        dir:ruta,
        cod: "lectura3-1-7-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_22(){
        $("#ventana").load(ruta+'3-1-22/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_3_1_22()",
        titulo:"<center><h5><span>Selecciona</span> las respuestas correctas.</h5></center>",
        restaurar:"start_22()",
        dir:ruta,
        cod: "3-1-22",
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