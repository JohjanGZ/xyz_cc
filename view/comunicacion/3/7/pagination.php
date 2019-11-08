<script type="text/javascript">
    function  Page_56(){
        start_56();
        inicio();
         count = 3;
    }
    function  Page_57(){
        start_57();
        inicio();
         count = 3;
    }
    function  Page_58(){
        start_58();
        inicio();
         count = 3;
    }
    function  Page_59(){
        start_59();
        inicio();
         count = 3;
    }
    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_56(){   
        $("#ventana").load(ruta+'1-3-56/index.php', 
        { 
        next: "Page_57()", 
        procesar:"result_tipo_1_3_56()",
        titulo:"<center><h5><span class='ftitulo'>ca - que - qui - co - cu Une</span> las sílabas de 2 en 2 para formar palabras.</h5></center>",
        restaurar:"start_56()",
        dir:ruta,
        cod: "1-3-56",
        nota:cal
        }          
        );
        return false;
    };
    function start_57(){   
        $("#ventana").load(ruta+'1-3-57/index.php', 
        { 
        next: "Page_58()", 
        procesar:"result_tipo_1_3_57()",
        titulo:"<center><h5><span class='ftitulo'>ca - que - qui - co - cu Une</span> las sílabas de 2 en 2 o de 3 en 3 para formar palabras.</h5></center>",
        restaurar:"start_57()",
        dir:ruta,
        cod: "1-3-57",
        nota:cal
        }          
        );
        return false;
    };
    function start_58(){   
        $("#ventana").load(ruta+'1-3-58/index.php', 
        { 
        next: "Page_59()", 
        procesar:"result_tipo_1_3_58()",
        titulo:"<center><h5><span class='ftitulo'>Ordena</span> las palabras y escribe la oracíon.</h5></center>",
        restaurar:"start_58()",
        dir:ruta,
        cod: "1-3-58",
        nota:cal
        }          
        );
        return false;
    };
    function start_59(){   
        $("#ventana").load(ruta+'1-3-59/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_3_59()",
        titulo:"<center><h5><span class='ftitulo'>Ordena</span> las palabras y escribe la oracíon.</h5></center>",
        restaurar:"start_59()",
        dir:ruta,
        cod: "1-3-59",
        nota:cal
        }          
        );
        return false;
    };
    function resultado(){
        $("#ventana").load('../../../exercises/resultado/resultado.php');
        return false;
    };
</script>