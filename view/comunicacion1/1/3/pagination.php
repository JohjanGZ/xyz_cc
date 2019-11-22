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
   function Page_9(){
        start_9();
        inicio();
          count = 3;
    }

    var cant=2;
    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
   
    function start_7(){
        $("#ventana").load(ruta+'1-1-7/index.php', 
        {
        next: "Page_8()", 
        procesar:"result_tipo_1_1_7()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "1-1-7",
        nota:cal
        }
        );
        return false;  
    };
    function start_8(){
        $("#ventana").load(ruta+'1-1-8/index.php', 
        { 
        next: "Page_9()", 
        procesar:"result_tipo_1_1_8()",
        titulo:"<center><h5>¿A dónde se fue el patito?<span class='ftitulo'> Selecciona</span> la respuesta.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "1-1-8",
        nota:cal
        }
        );
        return false;
    };
    function start_9(){   
        $("#ventana").load(ruta+'1-1-9/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_1_9()",
        titulo:"<center><h5>¿Cómo estaban los papás del patito cuando se perdió?<span class='ftitulo'> Selecciona</span>.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "1-1-9",
        nota:cal
        }          
        );
        return false;
    };
    function resultado(){
        $("#ventana").load('../../../exercises/resultado/resultado.php');
        return false;
    };
</script>