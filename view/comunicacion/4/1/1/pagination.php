<script type="text/javascript">
   function Page_lectura_4_1_1_1(){
        start_lectura_4_1_1_1();
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
    function Page_3(){
        start_3();
        inicio();
        count = 3;
    }

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_4_1_1_1(){
        $("#ventana").load(ruta+'lectura4-1-1-1/index.php', 
        {
        next: "Page_1()", 
        procesar:"lectura1-1-1-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_4_1_1_1()",
        dir:ruta,
        cod: "lectura4-1-1-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_1(){
        $("#ventana").load(ruta+'4-1-1/index.php', 
        {
        next: "Page_2()", 
        procesar:"result_tipo_4_1_1()",
        titulo:"<center><h5><span>Completa</span> las oraciones según la lectura.</h5></center>",
        restaurar:"start_1()",
        dir:ruta,
        cod: "4-1-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_2(){
        $("#ventana").load(ruta+'4-1-2/index.php', 
        { 
        next: "Page_3()", 
        procesar:"result_tipo_4_1_2()",
        titulo:"<center><h5><span>Lee</span> y <span>selecciona</span> si es <i>Verdadero</i> o <i>Falso</i>.</h5></center>",
        restaurar:"start_2()",
        dir:ruta,
        cod: "4-1-2",
        nota:cal
        }
        );
        return false;
    };
    function start_3(){
        $("#ventana").load(ruta+'4-1-3/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_1_3()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta que se infiere de los siguientes enunciados.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "4-1-3",
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