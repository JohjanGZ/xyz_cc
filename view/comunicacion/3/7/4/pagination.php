<script type="text/javascript">
   function Page_lectura_3_7_4_1(){
        start_lectura_3_7_4_1();
        inicio();
        count = 0;
    }
   function Page_12(){
        start_12();
        inicio();
        count = 3;
    }
   function  Page_13(){
        start_13();
        inicio();
         count = 3;
    }
    var cant=2;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_3_7_4_1(){
        $("#ventana").load(ruta+'lectura3-7-4-1/index.php', 
        {
        next: "Page_12()", 
        procesar:"lectura3-7-4-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y <span>responde</span> las preguntas.</h5></center>",
        restaurar:"start_lectura_3_7_4_1()",
        dir:ruta,
        cod: "lectura3-7-4-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_12(){
        $("#ventana").load(ruta+'3-7-12/index.php', 
        {
        next: "Page_13()", 
        procesar:"result_tipo_3_7_12()",
        titulo:"<center><h5><span>Relaciona</span> las palabras con su significado.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "3-7-12",
        nota:cal
        }
        );
        return false;  
    };
    function start_13(){
        $("#ventana").load(ruta+'3-7-13/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_3_7_13()",
        titulo:"<center><h5><span>Selecciona</span> las respuestas correctas.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "3-7-13",
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