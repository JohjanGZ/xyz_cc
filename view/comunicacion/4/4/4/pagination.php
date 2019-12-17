<script type="text/javascript">
    function  Page_8(){
        start_8();
        inicio();
         count = 3;
    }
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

    var cant=4;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
  
    function start_8(){
        $("#ventana").load(ruta+'3-4-8/index.php', 
        {
        next: "Page_9()", 
        procesar:"result_tipo_3_4_8()",
        titulo:"<center><h5><span>Lee</span> la oración y <span>arrastra</span> el número de comas enumerativas que faltan.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "3-4-8",
        nota:cal
        }
        );
        return false;  
    };
    function start_9(){
        $("#ventana").load(ruta+'3-4-9/index.php', 
        {
        next: "Page_10()", 
        procesar:"result_tipo_3_4_9()",
        titulo:"<center><h5><span>Observa</span> el dibujo, <span>lee</span> la oración y <span>coloca</span> la coma donde corresponda.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "3-4-9",
        nota:cal
        }
        );
        return false;  
    };
    function start_10(){
        $("#ventana").load(ruta+'3-4-10/index.php', 
        {
        next: "Page_11()", 
        procesar:"result_tipo_3_4_10()",
        titulo:"<center><h5><span>Lee</span> la oración y coloca las comas que faltan.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "3-4-10",
        nota:cal
        }
        );
        return false;  
    };
    function start_11(){
        $("#ventana").load(ruta+'3-4-11/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_3_4_11()",
        titulo:"<center><h5><span>Selecciona</span> las palabras que faltan para completar la oración.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "3-4-11",
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