<script type="text/javascript">
    function  Page_7(){
        start_7();
        inicio();
         count = 3;
    }
    function  Page_8(){
        start_8();
        inicio();
         count = 3;
    }
   function Page_9(){
        start_9();
        inicio();
        count = 3;
    }
    function  Page_10(){
        start_10();
        inicio();
         count = 3;
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
    function  Page_14(){
        start_14();
        inicio();
         count = 3;
    }
   function Page_15(){
        start_15();
        inicio();
        count = 3;
    }
   
    var cant=9;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_7(){   
        $("#ventana").load(ruta+'1-3-7/index.php', 
        { 
        next: "Page_8()", 
        procesar:"result_tipo_1_3_7()",
        titulo:"<center><h5><span>Lectura: </span>Un cuento.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "1-3-7",
        nota:cal
        }          
        );
        return false;
    };
    function start_8(){   
        $("#ventana").load(ruta+'1-3-8/index.php', 
        { 
        next: "Page_9()", 
        procesar:"result_tipo_1_3_8()",
        titulo:"<center><h5><span class='ftitulo'>Marca</span> los nombres de los personajes del cuento.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "1-3-8",
        nota:cal
        }          
        );
        return false;
    };
    function start_9(){   
        $("#ventana").load(ruta+'1-3-9/index.php', 
        { 
        next: "Page_10()", 
        procesar:"result_tipo_1_3_9()",
        titulo:"<center><h5><span class='ftitulo'>Escoge</span> la respuesta correcta.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "1-3-9",
        nota:cal
        }          
        );
        return false;
    };
    function start_10(){   
        $("#ventana").load(ruta+'1-3-10/index.php', 
        { 
        next: "Page_11()", 
        procesar:"result_tipo_1_3_10()",
        titulo:"",
        restaurar:"start_10()",
        dir:ruta,
        cod: "1-3-10",
        nota:cal
        }          
        );
        return false;
    };
    function start_11(){   
        $("#ventana").load(ruta+'1-3-11/index.php', 
        { 
        next: "Page_12()", 
        procesar:"result_tipo_1_3_11()",
        titulo:"",
        restaurar:"start_11()",
        dir:ruta,
        cod: "1-3-11",
        nota:cal
        }          
        );
        return false;
    };
    function start_12(){   
        $("#ventana").load(ruta+'1-3-12/index.php', 
        { 
        next: "Page_13()", 
        procesar:"result_tipo_1_3_12()",
        titulo:"",
        restaurar:"start_12()",
        dir:ruta,
        cod: "1-3-12",
        nota:cal
        }          
        );
        return false;
    };
    function start_13(){   
        $("#ventana").load(ruta+'1-3-13/index.php', 
        { 
        next: "Page_14()", 
        procesar:"result_tipo_1_3_13()",
        titulo:"<center><h5><span class='ftitulo'>Coloca</span> números del 1 al 4 según ocurrieron los hechos en el cuento.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "1-3-13",
        nota:cal
        }          
        );
        return false;
    };
    function start_14(){   
        $("#ventana").load(ruta+'1-3-14/index.php', 
        { 
        next: "Page_15()", 
        procesar:"result_tipo_1_3_14()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra</span> los nombres de los personajes.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "1-3-14",
        nota:cal
        }          
        );
        return false;
    };
    function start_15(){   
        $("#ventana").load(ruta+'1-3-15/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_3_15()",
        titulo:"<center><h5><span class='ftitulo'>Responde</span> las siguientes preguntas.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "1-3-15",
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