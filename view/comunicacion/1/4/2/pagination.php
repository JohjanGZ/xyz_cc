<script type="text/javascript">
    function  Page_4(){
        start_4();
        inicio();
         count = 3;
    }
   function Page_5(){
        start_5();
        inicio();
        count = 3;
    }
    function  Page_6(){
        start_6();
        inicio();
         count = 3;
    }
   function Page_lectura4_1(){
        start_lectura4_1();
        inicio();
        count = 3;
    }
    function  Page_lectura4_2(){
        start_lectura4_2();
        inicio();
         count = 3;
    }
   function Page_lectura4_3(){
        start_lectura4_3();
        inicio();
        count = 3;
    }
    function Page_lectura4_4(){
        start_lectura4_4();
        inicio();
        count = 3;
    }
   
   
   
    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_4(){   
        $("#ventana").load(ruta+'1-4-4/index.php', 
        { 
        next: "Page_5()", 
        procesar:"result_tipo_1_4_4()",
        titulo:"<center><h5><span>Selecciona</span> los personajes principales del cuento.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "1-4-4",
        nota:cal
        }          
        );
        return false;
    };
    function start_5(){   
        $("#ventana").load(ruta+'1-4-5/index.php', 
        { 
        next: "Page_6()", 
        procesar:"result_tipo_1_4_5()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "1-4-5",
        nota:cal
        }          
        );
        return false;
    };
    function start_6(){   
        $("#ventana").load(ruta+'1-4-6/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_4_6()",
        titulo:"<center><h5><span>Observa</span> las imágenes y coloca los números del 1 al 4 tal como sucedieron los hechos.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "1-4-6",
        nota:cal
        }          
        );
        return false;
    };
    function start_lectura4_1(){   
        $("#ventana").load(ruta+'lectura1-4-4-1/index.php', 
        { 
        next: "Page_lectura4_2()", 
        procesar:"result_tipo_1_4_16()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y <span>responde</span> las preguntas.</h5></center>",
        restaurar:"start_lectura4_1()",
        dir:ruta,
        cod: "lectura1-4-4-1",
        nota:cal
        }          
        );
        return false;
    };
    function start_lectura4_2(){   
        $("#ventana").load(ruta+'lectura1-4-4-2/index.php', 
        { 
        next: "Page_lectura4_3()", 
        procesar:"result_tipo_1_4_16()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y <span>responde</span> las preguntas.</h5></center>",
        restaurar:"start_lectura4_2()",
        dir:ruta,
        cod: "lectura1-4-4-2",
        nota:cal
        }          
        );
        return false;
    };
    function start_lectura4_3(){   
        $("#ventana").load(ruta+'lectura1-4-4-3/index.php', 
        { 
        next: "Page_lectura4_4()", 
        procesar:"result_tipo_1_4_16()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y <span>responde</span> las preguntas.</h5></center>",
        restaurar:"start_lectura4_3()",
        dir:ruta,
        cod: "lectura1-4-4-3",
        nota:cal
        }          
        );
        return false;
    };
    function start_lectura4_4(){   
        $("#ventana").load(ruta+'lectura1-4-4-4/index.php', 
        { 
        next: "Page_4()", 
        procesar:"result_tipo_1_4_16()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y <span>responde</span> las preguntas.</h5></center>",
        restaurar:"start_lectura4_4()",
        dir:ruta,
        cod: "lectura1-4-4-4",
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