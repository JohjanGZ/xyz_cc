<script type="text/javascript">
  
    function Page_lectura4_6_5_1(){
        start_lectura4_6_5_1();
        inicio();
    }
    function  Page_12(){
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

    function start_lectura4_6_5_1(){
        $("#ventana").load(ruta+'lectura4-6-5-1/index.php', 
        { 
        next: "Page_12()", 
        procesar:"result_tipo_lectura4_6_5_1()",
        titulo:"<center><h5><span>Lee</span> atentamente y <span>contesta</span> las preguntas.</h5></center>",
        restaurar:"start_lectura4_6_5_1()",
        dir:ruta,
        cod: "lectura4-6-5-1",
        nota:cal
        }
        );
        return false;
    }; 
    function start_12(){
        $("#ventana").load(ruta+'4-6-12/index.php', 
        { 
        next: "Page_13()", 
        procesar:"result_tipo_4_6_12()",
        titulo:"<center><h5><span>Lee</span> las preguntas y <span>selecciona</span> las respuestas correctas.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "4-6-12",
        nota:cal
        }
        );
        return false;
    };
    function start_13(){
        $("#ventana").load(ruta+'4-6-13/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_4_6_13()",
        titulo:"<center><h5><span>Lee</span> las preguntas y <span>selecciona</span> las respuestas correctas.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "4-6-13",
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