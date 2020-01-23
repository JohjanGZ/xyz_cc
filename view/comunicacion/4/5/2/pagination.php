<script type="text/javascript">
    function Page_lectura_4_5_2_1(){
        start_lectura_4_5_2_1();
        inicio();
        count = 0;
    }
    function  Page_3(){
        start_3();
        inicio();
         count = 3;
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
   

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_4_5_2_1(){
        $("#ventana").load(ruta+'lectura4-5-2-1/index.php', 
        {
        next: "Page_3()", 
        procesar:"lectura1-1-1-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y <span>contesta</span> las preguntas.</h5></center>",
        restaurar:"start_lectura_4_5_2_1()",
        dir:ruta,
        cod: "lectura4-5-2-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_3(){
        $("#ventana").load(ruta+'4-5-3/index.php', 
        { 
        next: "Page_4()", 
        procesar:"result_tipo_4_5_3()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "4-5-3",
        nota:cal
        }
        );
        return false;
    };
    function start_4(){
        $("#ventana").load(ruta+'4-5-4/index.php', 
        {
        next: "Page_5()", 
        procesar:"result_tipo_4_5_4()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "4-5-4",
        nota:cal
        }
        );
        return false;  
    };
    function start_5(){
        $("#ventana").load(ruta+'4-5-5/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_5_5()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "4-5-5",
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