<script type="text/javascript">
    function Page_lectura_2_5_8_1(){
        start_lectura_2_5_8_1();
        inicio();
        count = 0;
    }
    function Page_22(){
        start_22();
        inicio();
        count = 3;
    } 
    function Page_23(){
        start_23();
        inicio();
        count = 3;
    } 
    function Page_24(){
        start_24();
        inicio();
        count = 3;
    } 
    function Page_25(){
        start_25();
        inicio();
        count = 3;
    } 
    var cant=4;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_lectura_2_5_8_1(){
        $("#ventana").load(ruta+'lectura2-5-8-1/index.php', 
        {
        next: "Page_22()", 
        procesar:"lectura2-2-1-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y responde las preguntas.</h5></center>",
        restaurar:"start_lectura_2_5_8_1()",
        dir:ruta,
        cod: "lectura2-5-8-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_22(){
        $("#ventana").load(ruta+'2-5-22/index.php', 
        {
        next: "Page_23()", 
        procesar:"result_tipo_2_5_22()",
        titulo:"<center><h5><span>Marca</span> la respuesta correcta.</h5></center>",
        restaurar:"start_22()",
        dir:ruta,
        cod: "2-5-22",
        nota:cal
        }
        );
        return false;  
    };
    function start_23(){
        $("#ventana").load(ruta+'2-5-23/index.php', 
        {
        next: "Page_24()", 
        procesar:"result_tipo_2_5_23()",
        titulo:"<center><h5><span>Relaciona</span> la palabra resaltada con su respectivo sinónimo.</h5></center>",
        restaurar:"start_23()",
        dir:ruta,
        cod: "2-5-23",
        nota:cal
        }
        );
        return false;  
    };
    function start_24(){
        $("#ventana").load(ruta+'2-5-24/index.php', 
        {
        next: "Page_25()", 
        procesar:"result_tipo_2_5_24()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_24()",
        dir:ruta,
        cod: "2-5-24",
        nota:cal
        }
        );
        return false;  
    };
    function start_25(){
        $("#ventana").load(ruta+'2-5-25/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_5_25()",
        titulo:"<center><h5><span>Arrastra</span> las características de los personajes donde correspondan.</h5></center>",
        restaurar:"start_25()",
        dir:ruta,
        cod: "2-5-25",
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