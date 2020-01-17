<script type="text/javascript">   
    // Palabras con Ñ
    
    
    function Page_8(){
        start_8();
        inicio();
        count = 3;
    }
    function Page_9(){
        start_9();
        inicio();
        count = 3;
    }
    function Page_10(){
        start_10();
        inicio();
        count = 3;
    }
    function Page_11(){
        start_11();
        inicio();
        count = 3;
    }
    // Palabras con CH
    function Page_12(){
        start_12();
        inicio();
        count = 3;
    }
    function Page_13(){
        start_13();
        inicio();
        count = 3;
    }
    var cant=6;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    // Palabras con Ñ
    
    function start_8(){   
        $("#ventana").load(ruta+'1-6-8/index.php', 
        { 
        next: "Page_9()", 
        procesar:"result_tipo_1_6_8()",
        titulo:"<center><h5><span>Completa</span> las palabras con <span>ce</span> o <span>ci</span>.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "1-6-8",
        nota:cal
        }          
        );
        return false;
    };
    function start_9(){   
        $("#ventana").load(ruta+'1-6-9/index.php', 
        { 
        next: "Page_10()", 
        procesar:"result_tipo_1_6_9()",
        titulo:"<center><h5><span>Completa</span> las palabras con <span>ce</span> o <span>ci</span>.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "1-6-9",
        nota:cal
        }          
        );
        return false;
    };
    function start_10(){   
        $("#ventana").load(ruta+'1-6-10/index.php', 
        { 
        next: "Page_11()", 
        procesar:"result_tipo_1_6_10()",
        titulo:"<center><h5><span>Lee</span> y <span>selecciona</span> las respuestas que completan las oraciones.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "1-6-10",
        nota:cal
        }          
        );
        return false;
    };
    function start_11(){   
        $("#ventana").load(ruta+'1-6-11/index.php', 
        { 
        next: "Page_12()", 
        procesar:"result_tipo_1_6_11()",
        titulo:"<center><h5><span>Completa</span> el crucigrama con las palabrasque representan cada imagen.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "1-6-11",
        nota:cal
        }          
        );
        return false;
    };
    // Palabras con CH
    function start_12(){   
        $("#ventana").load(ruta+'1-6-12/index.php', 
        { 
        next: "Page_13()", 
        procesar:"result_tipo_1_6_12()",
        titulo:"<center><h5><span>Observa</span> atentamente, <span>separa</span> las palabras y <span>escribe</span> la oración.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "1-6-12",
        nota:cal
        }          
        );
        return false;
    };
    function start_13(){   
        $("#ventana").load(ruta+'1-6-13/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_6_13()",
        titulo:"<center><h5><span>Selecciona</span> los dibujos que tengan sonido <span>ce</span> y <span>ci</span>.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "1-6-13",
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