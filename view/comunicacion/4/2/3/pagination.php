<script type="text/javascript">
   
   function Page_7(){
        start_7();
        inicio();
        count = 3;
    }
   function  Page_8(){
        start_8();
        inicio();
         count = 3;
    }
    function  Page_9(){
        start_9();
        inicio();
         count = 3;
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

    var cant=5;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_7(){
        $("#ventana").load(ruta+'3-2-7/index.php', 
        {
        next: "Page_8()", 
        procesar:"result_tipo_3_2_7()",
        titulo:"<center><h5><span>Observa</span> la imagen y <span>responde</span> las preguntas.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "3-2-7",
        nota:cal
        }
        );
        return false;  
    };
    function start_8(){
        $("#ventana").load(ruta+'3-2-8/index.php', 
        {
        next: "Page_9()", 
        procesar:"result_tipo_3_2_8()",
        titulo:"<center><h5><span>Selecciona</span> los recuadros que tengan las características básicas de toda exposición oral.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "3-2-8",
        nota:cal
        }
        );
        return false;  
    };
    function start_9(){
        $("#ventana").load(ruta+'3-2-9/index.php', 
        {
        next: "Page_10()", 
        procesar:"result_tipo_3_2_9()",
        titulo:"<center><h5><span>Selecciona</span> la postura correcta que debes tener durante una exposición.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "3-2-9",
        nota:cal
        }
        );
        return false;  
    };
    function start_10(){
        $("#ventana").load(ruta+'3-2-10/index.php', 
        {
        next: "Page_11()", 
        procesar:"result_tipo_3_2_10()",
        titulo:"<center><h5><span>Observa</span> las imágenes y luego <span>selecciona</span> la alternativa correcta en cada caso.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "3-2-10",
        nota:cal
        }
        );
        return false;  
    };
    function start_11(){
        $("#ventana").load(ruta+'3-2-11/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_3_2_11()",
        titulo:"<center><h5><span>Observa</span> las imágenes y luego <span>selecciona</span> la alternativa correcta en cada caso.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "3-2-11",
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