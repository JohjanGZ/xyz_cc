<script type="text/javascript">
   function Page_lectura_3_0_4_1(){
        start_lectura_3_0_4_1();
        inicio();
        count = 0;
    }
    function Page_11(){
        start_11();
        inicio();
        count = 3;
    }
   function  Page_12(){
        start_12();
        inicio();
         count = 3;
    }
    function Page_13(){
        start_13();
        inicio();
        count = 3;
    }
    function Page_lectura_3_0_4_2(){
        start_lectura_3_0_4_2();
        inicio();
        count = 0;
    }
    function  Page_14(){
        start_14();
        inicio();
         count = 3;
    }
    function  Page_15(){
        start_15();
        inicio();
         count = 3;
    }

    var cant=5;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
    // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_3_0_4_1(){
        $("#ventana").load(ruta+'lectura3-0-4-1/index.php', 
        {
        next: "Page_11()", 
        procesar:"lectura2-1-1-1()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_3_0_4_1()",
        dir:ruta,
        cod: "lectura3-0-4-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_11(){
        $("#ventana").load(ruta+'3-0-11/index.php', 
        { 
        next: "Page_12()", 
        procesar:"result_tipo_3_0_11()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "3-0-11",
        nota:cal
        }
        );
        return false;
    };
    function start_12(){
        $("#ventana").load(ruta+'3-0-12/index.php', 
        { 
        next: "Page_13()", 
        procesar:"result_tipo_3_0_12()",
        titulo:"<center><h5><span>Lee</span> la pregunta y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "3-0-12",
        nota:cal
        }
        );
        return false;
    };
    function start_13(){
        $("#ventana").load(ruta+'3-0-13/index.php', 
        { 
        next: "Page_lectura_3_0_4_2()", 
        procesar:"result_tipo_3_0_13()",
        titulo:"<center><h5><span>Selecciona</span> las características que correspondan con el personaje que se menciona.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "3-0-13",
        nota:cal
        }
        );
        return false;
    };
    function start_lectura_3_0_4_2(){
        $("#ventana").load(ruta+'lectura3-0-4-2/index.php', 
        {
        next: "Page_14()", 
        procesar:"lectura2-1-1-1()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_3_0_4_2()",
        dir:ruta,
        cod: "lectura3-0-4-2",
        nota:cal
        }
        );
        return false;  
    };
    function start_14(){
        $("#ventana").load(ruta+'3-0-14/index.php', 
        { 
        next: "Page_15()", 
        procesar:"result_tipo_3_0_14()",
        titulo:"<center><h5><span>Lee</span> la pregunta y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "3-0-14",
        nota:cal
        }
        );
        return false;
    };
    function start_15(){
        $("#ventana").load(ruta+'3-0-15/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_3_0_15()",
        titulo:"<center><h5><span>Selecciona</span> las características que correspondan con el personaje que se menciona.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "3-0-15",
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