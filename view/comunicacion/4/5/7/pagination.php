<script type="text/javascript">
   function Page_lectura_4_5_7_1(){
        start_lectura_4_5_7_1();
        inicio();
        count = 0;
    }
    function  Page_22(){
        start_22();
        inicio();
         count = 3;
    }

    var cant=1;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
    // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_lectura_4_5_7_1(){
        $("#ventana").load(ruta+'lectura4-5-7-1/index.php', 
        {
        next: "Page_22()", 
        procesar:"lectura1-1-1-1()",
        titulo:"<center><h5><span>Lee</span> el caligrama y <span>contesta</span> las preguntas.</h5></center>",
        restaurar:"start_lectura_4_5_7_1()",
        dir:ruta,
        cod: "lectura4-5-7-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_22(){
        $("#ventana").load(ruta+'4-5-22/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_4_5_22()",
        titulo:"<center><h5><span>Selecciona</span> las respuestas correctas.</h5></center>",
        restaurar:"start_22()",
        dir:ruta,
        cod: "4-5-22",
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