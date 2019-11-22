<script type="text/javascript">
    function Page_lectura_2_1_6_1(){
        start_lectura_2_1_6_1();
        inicio();
        count = 0;
    }
    function Page_lectura_2_1_6_2(){
        start_lectura_2_1_6_2();
        inicio();
        count = 0;
    }
    function Page_lectura_2_1_6_3(){
        start_lectura_2_1_6_3();
        inicio();
        count = 0;
    }
    function Page_lectura_2_1_6_4(){
        start_lectura_2_1_6_4();
        inicio();
        count = 0;
    }
   function Page_21(){
        start_21();
        inicio();
        count = 3;
    }
   function  Page_22(){
        start_22();
        inicio();
         count = 3;
    }
    function Page_23(){
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
    var cant=5;

    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_2_1_6_1(){
        $("#ventana").load(ruta+'lectura2-1-6-1/index.php', 
        {
        next: "Page_lectura_2_1_6_2()", 
        procesar:"lectura2-1-6-1()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_2_1_6_1()",
        dir:ruta,
        cod: "lectura2-1-6-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_lectura_2_1_6_2(){
        $("#ventana").load(ruta+'lectura2-1-6-2/index.php', 
        {
        next: "Page_lectura_2_1_6_3()", 
        procesar:"lectura2-1-6-2()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_2_1_6_2()",
        dir:ruta,
        cod: "lectura2-1-6-2",
        nota:cal
        }
        );
        return false;  
    };
    function start_lectura_2_1_6_3(){
        $("#ventana").load(ruta+'lectura2-1-6-3/index.php', 
        {
        next: "Page_lectura_2_1_6_4()", 
        procesar:"lectura2-1-6-3()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_2_1_6_3()",
        dir:ruta,
        cod: "lectura2-1-6-3",
        nota:cal
        }
        );
        return false;  
    };
    function start_lectura_2_1_6_4(){
        $("#ventana").load(ruta+'lectura2-1-6-4/index.php', 
        {
        next: "Page_21()", 
        procesar:"lectura2-1-6-4()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_2_1_6_4()",
        dir:ruta,
        cod: "lectura2-1-6-4",
        nota:cal
        }
        );
        return false;  
    };
    function start_21(){
        $("#ventana").load(ruta+'2-1-21/index.php', 
        {
        next: "Page_22()", 
        procesar:"result_tipo_2_1_21()",
        titulo:"<center><h5>¿En dónde ocurren los hechos narrados? <span>Selecciona</span> la respuesta.</h5></center>",
        restaurar:"start_21()",
        dir:ruta,
        cod: "2-1-21",
        nota:cal
        }
        );
        return false;  
    };
    function start_22(){
        $("#ventana").load(ruta+'2-1-22/index.php', 
        { 
        next: "Page_23()", 
        procesar:"result_tipo_2_1_22()",
        titulo:"<center><h5><span>Señala</span> verdadero o falso según corresponda.</h5></center>",
        restaurar:"start_22()",
        dir:ruta,
        cod: "2-1-22",
        nota:cal
        }
        );
        return false;
    };
    function start_23(){
        $("#ventana").load(ruta+'2-1-23/index.php', 
        {
        next: "Page_24()", 
        procesar:"result_tipo_2_1_23()",
        titulo:"<center><h5><span>Arrastra</span> y <span>ordena</span> las siguientes escenas:</h5></center>",
        restaurar:"start_23()",
        dir:ruta,
        cod: "2-1-23",
        nota:cal
        }
        );
        return false;  
    };
    function start_24(){
        $("#ventana").load(ruta+'2-1-24/index.php', 
        {
        next: "Page_25()", 
        procesar:"result_tipo_2_1_24()",
        titulo:"<center><h5><span>Escribe</span> en los recuadros y <span>completa</span> los enunciados de acuerdo con la información del cuento.</h5></center>",
        restaurar:"start_24()",
        dir:ruta,
        cod: "2-1-24",
        nota:cal
        }
        );
        return false;  
    };
    function start_25(){
        $("#ventana").load(ruta+'2-1-25/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_1_25()",
        titulo:"<center><h5>En el siguiente enunciado, ¿Qué término puede reemplazar a la palabra subrayada? <span>Selecciona</span> la respuesta.</h5></center>",
        restaurar:"start_25()",
        dir:ruta,
        cod: "2-1-25",
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