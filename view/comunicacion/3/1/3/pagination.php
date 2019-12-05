<script type="text/javascript">
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
    function Page_7(){
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
    function  Page_11(){
        start_11();
        inicio();
         count = 3;
    }

    var cant=7;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    
    function start_5(){
        $("#ventana").load(ruta+'3-1-5/index.php', 
        { 
        next: "Page_6()", 
        procesar:"result_tipo_3_1_5()",
        titulo:"<center><h5><span>Escoge</span> la pareja de palabras sinónimas y <span>arrastralas</span> donde corresponden.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "3-1-5",
        nota:cal
        }
        );
        return false;
    };
    function start_6(){
        $("#ventana").load(ruta+'3-1-6/index.php', 
        { 
        next: "Page_7()", 
        procesar:"result_tipo_3_1_6()",
        titulo:"<center><h5><span>Descubre</span> en cada grupo la palabra que no es un sinónimo de las otras, luego <span>arrastrala</span> en el recuadro.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "3-1-6",
        nota:cal
        }
        );
        return false;
    };
    function start_7(){
        $("#ventana").load(ruta+'3-1-7/index.php', 
        { 
        next: "Page_8()", 
        procesar:"result_tipo_3_1_7()",
        titulo:"<center><h5><span>Arrastra</span> el antónimo de las siguiente palabras.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "3-1-7",
        nota:cal
        }
        );
        return false;
    };
    function start_8(){
        $("#ventana").load(ruta+'3-1-8/index.php', 
        { 
        next: "Page_9()", 
        procesar:"result_tipo_3_1_8()",
        titulo:"<center><h5><span>Relaciona</span> las palabras con sus antónimos.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "3-1-8",
        nota:cal
        }
        );
        return false;
    };
    function start_9(){
        $("#ventana").load(ruta+'3-1-9/index.php', 
        { 
        next: "Page_10()", 
        procesar:"result_tipo_3_1_9()",
        titulo:"<center><h5><span>Arrastra</span> el sinónimo de las siguiente palabras.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "3-1-9",
        nota:cal
        }
        );
        return false;
    };
    function start_10(){
        $("#ventana").load(ruta+'3-1-10/index.php', 
        { 
        next: "Page_11()", 
        procesar:"result_tipo_3_1_10()",
        titulo:"<center><h5><span>Selecciona</span> la oración que tenga un significado diferente a la oración de la imagen.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "3-1-10",
        nota:cal
        }
        );
        return false;
    };
    function start_11(){
        $("#ventana").load(ruta+'3-1-11/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_3_1_11()",
        titulo:"<center><h5><span>Arrastra</span> los sinónimos y antónimos de cada palabra del recuadro y <span>ubícalas</span> donde corresponden.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "3-1-11",
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