<script type="text/javascript">
    
    function Page_4(){
        start_4();
        inicio();
        count = 3;
    }
    function Page_5(){
        start_5();
        inicio();
        count = 3;
    }
    function Page_6(){
        start_6();
        inicio();
        count = 3;
    }
    function Page_7(){
        start_7();
        inicio();
        count = 3;
    }
    function Page_8(){
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
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_4(){
        $("#ventana").load(ruta+'2-8-4/index.php', 
        {
        next: "Page_5()", 
        procesar:"result_tipo_2_8_4()",
        titulo:"<center><h5><span>Selecciona</span> la alternativa que responda correctamente la pregunta.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "2-8-4",
        nota:cal
        }
        );
        return false;  
    };
    function start_5(){
        $("#ventana").load(ruta+'2-8-5/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_8_5()",
        titulo:"<center><h5><span>Selecciona</span> la alternativa que responda correctamente la pregunta.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "2-8-5",
        nota:cal
        }
        );
        return false;  
    };
    function start_6(){
        $("#ventana").load(ruta+'2-8-6/index.php', 
        {
        next: "Page_7()", 
        procesar:"result_tipo_2_8_6()",
        titulo:"<center><h5><span>Observa</span> la imagen y selecciona <i>verdadero</i> o <i>falso</i> según corresponda.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "2-8-6",
        nota:cal
        }
        );
        return false;  
    };
    function start_7(){
        $("#ventana").load(ruta+'2-8-7/index.php', 
        {
        next: "Page_8()", 
        procesar:"result_tipo_2_8_7()",
        titulo:"<center><h5><span>Ordena</span> las palabras de modo que formen oraciones.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "2-8-7",
        nota:cal
        }
        );
        return false;  
    };
    function start_8(){
        $("#ventana").load(ruta+'2-8-8/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_8_8()",
        titulo:"<center><h5><span>Ordena</span> las palabras de modo que formen oraciones.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "2-8-8",
        nota:cal
        }
        );
        return false;  
    };
    function start_9(){
        $("#ventana").load(ruta+'2-8-9/index.php', 
        {
        next: "Page_10()", 
        procesar:"result_tipo_2_8_9()",
        titulo:"<center><h5><span>Lee</span> atentamente el diálogo, luego <span>completa</span> el enunciado.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "2-8-9",
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