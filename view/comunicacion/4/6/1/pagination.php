<script type="text/javascript">
   function Page_lectura_3_6_1_1(){
        start_lectura_3_6_1_1();
        inicio();
        count = 0;
    }
   function Page_1(){
        start_1();
        inicio();
        count = 3;
    }
   function  Page_2(){
        start_2();
        inicio();
         count = 3;
    }
    function  Page_3(){
        start_3();
        inicio();
         count = 3;
    }
    function Page_lectura_3_6_1_2(){
        start_lectura_3_6_1_2();
        inicio();
        count = 0;
    }
   function Page_4(){
        start_4();
        inicio();
        count = 3;
    }
   function  Page_5(){
        start_5();
        inicio();
         count = 3;
    }
    function  Page_6(){
        start_6();
        inicio();
         count = 3;
    }

    var cant=6;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_3_6_1_1(){
        $("#ventana").load(ruta+'lectura3-6-1-1/index.php', 
        {
        next: "Page_1()", 
        procesar:"lectura3-6-1-1()",
        titulo:"<center><h5><span>Observa</span> atentamente la receta y <span>contesta</span> las preguntas.</h5></center>",
        restaurar:"start_lectura_3_6_1_1()",
        dir:ruta,
        cod: "lectura3-6-1-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_1(){
        $("#ventana").load(ruta+'3-6-1/index.php', 
        {
        next: "Page_2()", 
        procesar:"result_tipo_3_6_1()",
        titulo:"<center><h5><span>Lee</span> y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_1()",
        dir:ruta,
        cod: "3-6-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_2(){
        $("#ventana").load(ruta+'3-6-2/index.php', 
        {
        next: "Page_3()", 
        procesar:"result_tipo_3_6_2()",
        titulo:"<center><h5><span>Lee</span> y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_2()",
        dir:ruta,
        cod: "3-6-2",
        nota:cal
        }
        );
        return false;  
    };
    function start_3(){
        $("#ventana").load(ruta+'3-6-3/index.php', 
        {
        next: "Page_lectura_3_6_1_2()", 
        procesar:"result_tipo_3_6_3()",
        titulo:"<center><h5><span>Lee</span> y <span>ordena</span> los pasos según la receta.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "3-6-3",
        nota:cal
        }
        );
        return false;  
    };
    function start_lectura_3_6_1_2(){
        $("#ventana").load(ruta+'lectura3-6-1-2/index.php', 
        {
        next: "Page_4()", 
        procesar:"lectura3-6-1-2()",
        titulo:"<center><h5><span>Observa</span> atentamente la receta y <span>contesta</span> las preguntas.</h5></center>",
        restaurar:"start_lectura_3_6_1_2()",
        dir:ruta,
        cod: "lectura3-6-1-2",
        nota:cal
        }
        );
        return false;  
    };
    function start_4(){
        $("#ventana").load(ruta+'3-6-4/index.php', 
        {
        next: "Page_5()", 
        procesar:"result_tipo_3_6_4()",
        titulo:"<center><h5><span>Lee</span> y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "3-6-4",
        nota:cal
        }
        );
        return false;  
    };
    function start_5(){
        $("#ventana").load(ruta+'3-6-5/index.php', 
        {
        next: "Page_6()", 
        procesar:"result_tipo_3_6_5()",
        titulo:"<center><h5><span>Lee</span> y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "3-6-5",
        nota:cal
        }
        );
        return false;  
    };
    function start_6(){
        $("#ventana").load(ruta+'3-6-6/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_3_6_6()",
        titulo:"<center><h5><span>Lee</span> y <span>ordena</span> los pasos según la receta.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "3-6-6",
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