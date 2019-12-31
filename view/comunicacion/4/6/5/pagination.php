<script type="text/javascript">
  
    function  Page_9(){
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
    function  Page_12(){
        start_12();
        inicio();
         count = 3;
    }
    var cant=4;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    function start_9(){
        $("#ventana").load(ruta+'4-6-9/index.php', 
        { 
        next: "Page_10()", 
        procesar:"result_tipo_4_6_9()",
        titulo:"<center><h5><span>Ubica</span> los siguientes verbos en el cuadro.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "4-6-9",
        nota:cal
        }
        );
        return false;
    };
    function start_10(){
        $("#ventana").load(ruta+'4-6-10/index.php', 
        { 
        next: "Page_11()", 
        procesar:"result_tipo_4_6_10()",
        titulo:"<center><h5><span>Arrastra</span> al color amarillo las formas simples  y a verde las formas compuestas del verbo.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "4-6-10",
        nota:cal
        }
        );
        return false;
    };
    function start_11(){
        $("#ventana").load(ruta+'4-6-11/index.php', 
        { 
        next: "Page_12()", 
        procesar:"result_tipo_4_6_11()",
        titulo:"<center><h5><span>Cambia</span> las siguientes oraciones simples a forma compuesta.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "4-6-11",
        nota:cal
        }
        );
        return false;
    };
    function start_12(){
        $("#ventana").load(ruta+'4-6-12/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_4_6_12()",
        titulo:"<center><h5><span>Conjuega</span> el verbo <i>cantar</i> utilizando la forma compuesta en tiempo pasado.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "4-6-12",
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