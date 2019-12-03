<script type="text/javascript">
    function Page_lectura_2_2_6_1(){
        start_lectura_2_2_6_1();
        inicio();
        count = 0;
    }
    function Page_lectura_2_2_6_2(){
        start_lectura_2_2_6_2();
        inicio();
        count = 0;
    }
    function Page_lectura_2_2_6_3(){
        start_lectura_2_2_6_3();
        inicio();
        count = 0;
    }
    function Page_lectura_2_2_6_4(){
        start_lectura_2_2_6_4();
        inicio();
        count = 0;
    }
    function Page_19(){
        start_19();
        inicio();
        count = 3;
    }
   function  Page_20(){
        start_20();
        inicio();
         count = 3;
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
    var cant=7;

    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_2_2_6_1(){
        $("#ventana").load(ruta+'lectura2-2-6-1/index.php', 
        {
        next: "Page_lectura_2_2_6_2()", 
        procesar:"lectura2-2-6-1()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_2_2_6_1()",
        dir:ruta,
        cod: "lectura2-2-6-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_lectura_2_2_6_2(){
        $("#ventana").load(ruta+'lectura2-2-6-2/index.php', 
        {
        next: "Page_lectura_2_2_6_3()", 
        procesar:"lectura2-2-6-2()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_2_2_6_2()",
        dir:ruta,
        cod: "lectura2-2-6-2",
        nota:cal
        }
        );
        return false;  
    };
    function start_lectura_2_2_6_3(){
        $("#ventana").load(ruta+'lectura2-2-6-3/index.php', 
        {
        next: "Page_lectura_2_2_6_4()", 
        procesar:"lectura2-2-6-3()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_2_1_6_3()",
        dir:ruta,
        cod: "lectura2-2-6-3",
        nota:cal
        }
        );
        return false;  
    };
    function start_lectura_2_2_6_4(){
        $("#ventana").load(ruta+'lectura2-2-6-4/index.php', 
        {
        next: "Page_19()", 
        procesar:"lectura2-2-6-4()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_2_1_6_4()",
        dir:ruta,
        cod: "lectura2-2-6-4",
        nota:cal
        }
        );
        return false;  
    };
    function start_19(){
        $("#ventana").load(ruta+'2-2-19/index.php', 
        {
        next: "Page_20()", 
        procesar:"result_tipo_2_2_19()",
        titulo:"<center><h5><span>Selecciona</span> al personaje principal.</h5></center>",
        restaurar:"start_19()",
        dir:ruta,
        cod: "2-2-19",
        nota:cal
        }
        );
        return false;  
    };
    function start_20(){
        $("#ventana").load(ruta+'2-2-20/index.php', 
        {
        next: "Page_21()", 
        procesar:"result_tipo_2_2_20()",
        titulo:"<center><h5>¿Por qué Gepetto fue a buscar pasto? <span>Selecciona</span> la respuesta.</h5></center>",
        restaurar:"start_20()",
        dir:ruta,
        cod: "2-2-20",
        nota:cal
        }
        );
        return false;  
    };
    function start_21(){
        $("#ventana").load(ruta+'2-2-21/index.php', 
        {
        next: "Page_22()", 
        procesar:"result_tipo_2_2_21()",
        titulo:"<center><h5>¿Qué encontró Gepetto en la cueva? <span>Selecciona</span> la respuesta.</h5></center>",
        restaurar:"start_21()",
        dir:ruta,
        cod: "2-2-21",
        nota:cal
        }
        );
        return false;  
    };
    function start_22(){
        $("#ventana").load(ruta+'2-2-22/index.php', 
        { 
        next: "Page_23()", 
        procesar:"result_tipo_2_2_22()",
        titulo:"<center><h5><span>Señala</span> verdadero o falso según corresponda.</h5></center>",
        restaurar:"start_22()",
        dir:ruta,
        cod: "2-2-22",
        nota:cal
        }
        );
        return false;
    };
    function start_23(){
        $("#ventana").load(ruta+'2-2-23/index.php', 
        {
        next: "Page_24()", 
        procesar:"result_tipo_2_2_23()",
        titulo:"<center><h5><span>Arrastra</span> y <span>ordena</span> las siguientes escenas:</h5></center>",
        restaurar:"start_23()",
        dir:ruta,
        cod: "2-2-23",
        nota:cal
        }
        );
        return false;  
    };
    function start_24(){
        $("#ventana").load(ruta+'2-2-24/index.php', 
        {
        next: "Page_25()", 
        procesar:"result_tipo_2_2_24()",
        titulo:"<center><h5>¿Qué tipo de texto es Gepetto en la montaña?<span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_24()",
        dir:ruta,
        cod: "2-2-24",
        nota:cal
        }
        );
        return false;  
    };
    function start_25(){
        $("#ventana").load(ruta+'2-2-25/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_2_25()",
        titulo:"<center><h5><span>Relaciona</span> las palabras que tienen significado parecido.</h5></center>",
        restaurar:"start_25()",
        dir:ruta,
        cod: "2-2-25",
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