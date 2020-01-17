<script type="text/javascript">
    
   
    function Page_7(){
        start_7();
        inicio();
        count = 3;
    }
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
   
    var cant=5;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    
    function start_7(){   
        $("#ventana").load(ruta+'1-8-7/index.php', 
        { 
        next: "Page_8()", 
        procesar:"result_tipo_1_8_7()",
        titulo:"<center><h5><span>Observa</span> y <span>completa</span> con <span>gl</span> o <span>gr</span>.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "1-8-7",
        nota:cal
        }          
        );
        return false;
    };
    function start_8(){   
        $("#ventana").load(ruta+'1-8-8/index.php', 
        { 
        next: "Page_9()", 
        procesar:"result_tipo_1_8_8()",
        titulo:"<center><h5><span>Observa</span> y <span>completa</span>  las palabras con las sílabas que corresponden.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "1-8-8",
        nota:cal
        }          
        );
        return false;
    };
    function start_9(){   
        $("#ventana").load(ruta+'1-8-9/index.php', 
        { 
        next: "Page_10()", 
        procesar:"result_tipo_1_8_9()",
        titulo:"<center><h5><span>Realiza</span> la siguiente sopa de letras.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "1-8-9",
        nota:cal
        }          
        );
        return false;
    };
    function start_10(){   
        $("#ventana").load(ruta+'1-8-10/index.php', 
        { 
        next: "Page_11()", 
        procesar:"result_tipo_1_8_10()",
        titulo:"<center><h5><span>Ordena</span> las siguientes sílabas y <span>forma</span> las palabras.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "1-8-10",
        nota:cal
        }          
        );
        return false;
    };
    function start_11(){   
        $("#ventana").load(ruta+'1-8-11/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_8_11()",
        titulo:"<center><h5><span>Completa</span> las palabras con las sílabas <span>gla, gle, gli, glo, glu</span>.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "1-8-11",
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