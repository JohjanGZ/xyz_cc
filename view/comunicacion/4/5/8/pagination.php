<script type="text/javascript">
   function Page_lectura_4_5_8_1(){
        start_lectura_4_5_8_1();
        inicio();
        count = 0;
    }
    function  Page_23(){
        start_23();
        inicio();
         count = 3;
    }
    function  Page_24(){
        start_24();
        inicio();
         count = 3;
    }
    function  Page_25(){
        start_25();
        inicio();
         count = 3;
    }
    function  Page_26(){
        start_26();
        inicio();
         count = 3;
    }

    var cant=4;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
    // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_lectura_4_5_8_1(){
        $("#ventana").load(ruta+'lectura4-5-8-1/index.php', 
        {
        next: "Page_23()", 
        procesar:"lectura1-1-1-1()",
        titulo:"<center><h5><span>Lee</span> el caligrama y <span>contesta</span> las preguntas.</h5></center>",
        restaurar:"start_lectura_4_5_8_1()",
        dir:ruta,
        cod: "lectura4-5-8-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_23(){
        $("#ventana").load(ruta+'4-5-23/index.php', 
        { 
        next: "Page_24()", 
        procesar:"result_tipo_4_5_23()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_23()",
        dir:ruta,
        cod: "4-5-23",
        nota:cal
        }
        );
        return false;
    };
    function start_24(){
        $("#ventana").load(ruta+'4-5-24/index.php', 
        { 
        next: "Page_25()", 
        procesar:"result_tipo_4_5_24()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_24()",
        dir:ruta,
        cod: "4-5-24",
        nota:cal
        }
        );
        return false;
    };
    function start_25(){
        $("#ventana").load(ruta+'4-5-25/index.php', 
        { 
        next: "Page_26()", 
        procesar:"result_tipo_4_5_25()",
        titulo:"<center><h5><span>Selecciona</span> las respuestas correctas.</h5></center>",
        restaurar:"start_25()",
        dir:ruta,
        cod: "4-5-25",
        nota:cal
        }
        );
        return false;
    };
    function start_26(){
        $("#ventana").load(ruta+'4-5-26/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_4_5_26()",
        titulo:"<center><h5><span>Ordena</span> a los personajes conforme se fueron uniendo al ganso.</h5></center>",
        restaurar:"start_26()",
        dir:ruta,
        cod: "4-5-26",
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