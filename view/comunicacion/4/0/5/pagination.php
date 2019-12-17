<script type="text/javascript">
    function Page_16(){
        start_16();
        inicio();
        count = 3;
    }
   function  Page_17(){
        start_17();
        inicio();
         count = 3;
    }
    function Page_18(){
        start_18();
        inicio();
        count = 3;
    }
    function  Page_19(){
        start_19();
        inicio();
         count = 3;
    }
    function  Page_20(){
        start_20();
        inicio();
         count = 3;
    }

    var cant=5;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
    // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_16(){
        $("#ventana").load(ruta+'3-0-16/index.php', 
        { 
        next: "Page_17()", 
        procesar:"result_tipo_3_0_16()",
        titulo:"<center><h5><span>Arrastra</span> los medios de cada medio de comunicación.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "3-0-16",
        nota:cal
        }
        );
        return false;
    };
    function start_17(){
        $("#ventana").load(ruta+'3-0-17/index.php', 
        { 
        next: "Page_18()", 
        procesar:"result_tipo_3_0_17()",
        titulo:"<center><h5><span>Lee</span> la pregunta y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "3-0-17",
        nota:cal
        }
        );
        return false;
    };
    function start_18(){
        $("#ventana").load(ruta+'3-0-18/index.php', 
        { 
        next: "Page_19()", 
        procesar:"result_tipo_3_0_18()",
        titulo:"<center><h5><span>Observa</span> la imagen y <span>selecciona</span> su significado.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "3-0-18",
        nota:cal
        }
        );
        return false;
    };
    function start_19(){
        $("#ventana").load(ruta+'3-0-19/index.php', 
        { 
        next: "Page_20()", 
        procesar:"result_tipo_3_0_19()",
        titulo:"<center><h5><span>Arrastra</span> qué tipo de comunicación están usando los siguientes personajes.</h5></center>",
        restaurar:"start_19()",
        dir:ruta,
        cod: "3-0-19",
        nota:cal
        }
        );
        return false;
    };
    function start_20(){
        $("#ventana").load(ruta+'3-0-20/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_3_0_20()",
        titulo:"<center><h5>Un policia colocó un cartel en el parque <span>Completa</span> la información.</h5></center>",
        restaurar:"start_20()",
        dir:ruta,
        cod: "3-0-20",
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