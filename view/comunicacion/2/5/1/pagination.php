<script type="text/javascript">
    function Page_lectura_2_5_1_1(){
        start_lectura_2_5_1_1();
        inicio();
        count = 0;
    }
   function Page_1(){
        start_1();
        inicio();
        count = 3;
    }
    function Page_2(){
        start_2();
        inicio();
        count = 3;
    }
    function Page_3(){
        start_3();
        inicio();
        count = 3;
    }
    function Page_4(){
        start_4();
        inicio();
        count = 3;
    }

    var cant=4;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_2_5_1_1(){
        $("#ventana").load(ruta+'lectura2-5-1-1/index.php', 
        {
        next: "Page_1()", 
        procesar:"lectura2-2-1-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_2_5_1_1()",
        dir:ruta,
        cod: "lectura2-5-1-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_1(){
        $("#ventana").load(ruta+'2-5-1/index.php', 
        {
        next: "Page_2()", 
        procesar:"result_tipo_2_5_1()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_1()",
        dir:ruta,
        cod: "2-5-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_2(){
        $("#ventana").load(ruta+'2-5-2/index.php', 
        {
        next: "Page_3()", 
        procesar:"result_tipo_2_5_2()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_2()",
        dir:ruta,
        cod: "2-5-2",
        nota:cal
        }
        );
        return false;  
    };
    function start_3(){
        $("#ventana").load(ruta+'2-5-3/index.php', 
        {
        next: "Page_4()", 
        procesar:"result_tipo_2_5_3()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "2-5-3",
        nota:cal
        }
        );
        return false;  
    };
    function start_4(){
        $("#ventana").load(ruta+'2-5-4/index.php', 
        {
        next: "Page_5()", 
        procesar:"result_tipo_2_5_4()",
        titulo:"<center><h5><span>Lee</span> los siguientes hechos y <span>arrastra</span> el número que le corresponde según el texto.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "2-5-4",
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