<script type="text/javascript">
  
    function Page_lectura4_6_4_1(){
        start_lectura4_6_4_1();
        inicio();
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

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
            
    function start_lectura4_6_4_1(){
        $("#ventana").load(ruta+'lectura4-6-4-1/index.php', 
        { 
        next: "Page_9()", 
        procesar:"result_tipo_lectura4_6_4_1()",
        titulo:"<center><h5><span>Lee</span> el caligrama y <span>contesta</span> la pregunta.</h5></center>",
        restaurar:"start_lectura4_6_4_1()",
        dir:ruta,
        cod: "lectura4-6-4-1",
        nota:cal
        }
        );
        return false;
    }; 
    function start_9(){
        $("#ventana").load(ruta+'4-6-9/index.php', 
        { 
        next: "Page_10()", 
        procesar:"result_tipo_4_6_9()",
        titulo:"<center><h5><span>Selecciona</span> las respuestas correctas.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "4-6-9",
        nota:cal
        }
        );
        return false;
    };
    function start_10(){
        $("#ventana").load(ruta+'4-6-10/index.php', 
        { 
        next: "Page_11()", 
        procesar:"result_tipo_4_6_10()",
        titulo:"<center><h5><span>Selecciona</span> las respuestas correctas.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "4-6-10",
        nota:cal
        }
        );
        return false;
    };
    function start_11(){
        $("#ventana").load(ruta+'4-6-11/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_4_6_11()",
        titulo:"<center><h5><span>Selecciona</span> las respuestas correctas.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "4-6-11",
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