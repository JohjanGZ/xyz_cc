<script type="text/javascript">
    function  Page_7(){
        start_7();
        inicio();
         count = 3;
    }
   function Page_8(){
        start_8();
        inicio();
        count = 3;
    }
    function  Page_9(){
        start_9();
        inicio();
         count = 3;
    }
   function Page_10(){
        start_10();
        inicio();
        count = 3;
    }
    function  Page_11(){
        start_11();
        inicio();
         count = 3;
    }
   function Page_12(){
        start_12();
        inicio();
        count = 3;
    }
   
    var cant=6;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_7(){   
        $("#ventana").load(ruta+'1-4-7/index.php', 
        { 
        next: "Page_8()", 
        procesar:"result_tipo_1_4_7()",
        titulo:"<center><h5><span class='ftitulo'>Clasifica</span> las imágenes según las sílabas que contengan sus nombres.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "1-4-7",
        nota:cal
        }          
        );
        return false;
    };
    function start_8(){   
        $("#ventana").load(ruta+'1-4-8/index.php', 
        { 
        next: "Page_9()", 
        procesar:"result_tipo_1_4_8()",
        titulo:"<center><h5><span class='ftitulo'>Clasifica</span> las imágenes según las sílabas que contengan sus nombres.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "1-4-8",
        nota:cal
        }          
        );
        return false;
    };
    function start_9(){   
        $("#ventana").load(ruta+'1-4-9/index.php', 
        { 
        next: "Page_10()", 
        procesar:"result_tipo_1_4_9()",
        titulo:"<center><h5><span class='ftitulo'>Clasifica</span> las imágenes según las sílabas que contengan sus nombres.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "1-4-9",
        nota:cal
        }          
        );
        return false;
    };
    function start_10(){   
        $("#ventana").load(ruta+'1-4-10/index.php', 
        { 
        next: "Page_11()", 
        procesar:"result_tipo_1_4_10()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> el sonido con el que comienza cada dibujo.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "1-4-10",
        nota:cal
        }          
        );
        return false;
    };
    function start_11(){   
        $("#ventana").load(ruta+'1-4-11/index.php', 
        { 
        next: "Page_12()", 
        procesar:"result_tipo_1_4_11()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> el número de sílabas que tienen los nombres de cada imagen.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "1-4-11",
        nota:cal
        }          
        );
        return false;
    };
    function start_12(){   
        $("#ventana").load(ruta+'1-4-12/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_4_12()",
        titulo:"<center><h5><span class='ftitulo'>Observa</span> el dibujo y separa el sílabas su nombre.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "1-4-12",
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