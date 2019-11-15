<script type="text/javascript">
    function  Page_lectura_7_1(){
        start_lectura_7_1();
        inicio();
         count = 3;
    }
    function  Page_lectura_7_2(){
        start_lectura_7_2();
        inicio();
         count = 3;
    }
    function  Page_lectura_7_3(){
        start_lectura_7_3();
        inicio();
         count = 3;
    }
    function  Page_lectura_7_4(){
        start_lectura_7_4();
        inicio();
         count = 3;
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
    function Page_5(){
        start_5();
        inicio();
        count = 3;
    }
    function Page_6(){
        start_6();
        inicio();
        count = 3;
    }
   
    var cant=6;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_7_1(){   
        $("#ventana").load(ruta+'lectura1-7-1-1/index.php', 
        { 
        next: "Page_lectura_7_2()", 
        procesar:"result_tipo_1_4_1()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y responde.</h5></center>",
        restaurar:"start_lectura_7_1()",
        dir:ruta,
        cod: "lectura1-7-1-1",
        nota:cal
        }          
        );
        return false;
    };
    function start_lectura_7_2(){   
        $("#ventana").load(ruta+'lectura1-7-1-2/index.php', 
        { 
        next: "Page_lectura_7_3()", 
        procesar:"result_tipo_1_4_1()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y responde.</h5></center>",
        restaurar:"start_lectura_7_2()",
        dir:ruta,
        cod: "lectura1-7-1-2",
        nota:cal
        }          
        );
        return false;
    };
    function start_lectura_7_3(){   
        $("#ventana").load(ruta+'lectura1-7-1-3/index.php', 
        { 
        next: "Page_lectura_7_4()", 
        procesar:"result_tipo_1_4_1()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y responde.</h5></center>",
        restaurar:"start_lectura_7_3()",
        dir:ruta,
        cod: "lectura1-7-1-3",
        nota:cal
        }          
        );
        return false;
    };
    function start_lectura_7_4(){   
        $("#ventana").load(ruta+'lectura1-7-1-4/index.php', 
        { 
        next: "Page_1()", 
        procesar:"result_tipo_1_4_1()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y responde.</h5></center>",
        restaurar:"start_lectura_7_4()",
        dir:ruta,
        cod: "lectura1-7-1-4",
        nota:cal
        }          
        );
        return false;
    };
    function start_1(){   
        $("#ventana").load(ruta+'1-7-1/index.php', 
        { 
        next: "Page_2()", 
        procesar:"result_tipo_1_7_1()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_1()",
        dir:ruta,
        cod: "1-7-1",
        nota:cal
        }          
        );
        return false;
    };
    function start_2(){   
        $("#ventana").load(ruta+'1-7-2/index.php', 
        { 
        next: "Page_3()", 
        procesar:"result_tipo_1_7_2()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_2()",
        dir:ruta,
        cod: "1-7-2",
        nota:cal
        }          
        );
        return false;
    };
    function start_3(){   
        $("#ventana").load(ruta+'1-7-3/index.php', 
        { 
        next: "Page_4()", 
        procesar:"result_tipo_1_7_3()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "1-7-3",
        nota:cal
        }          
        );
        return false;
    };
    function start_4(){   
        $("#ventana").load(ruta+'1-7-4/index.php', 
        { 
        next: "Page_5()", 
        procesar:"result_tipo_1_7_4()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "1-7-4",
        nota:cal
        }          
        );
        return false;
    };
    function start_5(){   
        $("#ventana").load(ruta+'1-7-5/index.php', 
        { 
        next: "Page_6()", 
        procesar:"result_tipo_1_7_5()",
        titulo:"<center><h5><span>Busca</span> las palabras en la sopa de letras.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "1-7-5",
        nota:cal
        }          
        );
        return false;
    };
    function start_6(){   
        $("#ventana").load(ruta+'1-7-6/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_7_6()",
        titulo:"<center><h5><span>Observa</span> y <span>ordena</span> las imágenes tal como sucedieron los hechos.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "1-7-6",
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