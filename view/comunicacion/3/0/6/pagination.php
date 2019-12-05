<script type="text/javascript">
   function Page_lectura_3_0_6_1(){
        start_lectura_3_0_6_1();
        inicio();
        count = 0;
    }
    function Page_21(){
        start_21();
        inicio();
        count = 3;
    }
    function Page_lectura_3_0_6_2(){
        start_lectura_3_0_6_2();
        inicio();
        count = 0;
    }
    function  Page_22(){
        start_22();
        inicio();
         count = 3;
    }

    var cant=2;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
    // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_3_0_6_1(){
        $("#ventana").load(ruta+'lectura3-0-6-1/index.php', 
        {
        next: "Page_21()", 
        procesar:"lectura2-1-1-1()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_3_0_6_1()",
        dir:ruta,
        cod: "lectura3-0-6-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_21(){
        $("#ventana").load(ruta+'3-0-21/index.php', 
        { 
        next: "Page_lectura_3_0_6_2()", 
        procesar:"result_tipo_3_0_21()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_21()",
        dir:ruta,
        cod: "3-0-21",
        nota:cal
        }
        );
        return false;
    };
    function start_lectura_3_0_6_2(){
        $("#ventana").load(ruta+'lectura3-0-6-2/index.php', 
        {
        next: "Page_22()", 
        procesar:"lectura2-1-1-1()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_3_0_6_2()",
        dir:ruta,
        cod: "lectura3-0-6-2",
        nota:cal
        }
        );
        return false;  
    };
    function start_22(){
        $("#ventana").load(ruta+'3-0-22/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_3_0_22()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_22()",
        dir:ruta,
        cod: "3-0-22",
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