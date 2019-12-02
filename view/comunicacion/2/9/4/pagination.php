<script type="text/javascript">
   function Page_13(){
        start_13();
        inicio();
        count = 3;
    }
    function Page_14(){
        start_14();
        inicio();
        count = 3;
    }
    function Page_15(){
        start_15();
        inicio();
        count = 3;
    }
    function Page_16(){
        start_16();
        inicio();
        count = 3;
    }

    var cant=4;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_13(){
        $("#ventana").load(ruta+'2-9-13/index.php', 
        {
        next: "Page_14()", 
        procesar:"result_tipo_2_9_13()",
        titulo:"<center><h5><span>Observa</span> la imagen, luego <span>completa</span> la oración usando el verbo indicado.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "2-9-13",
        nota:cal
        }
        );
        return false;  
    };
    function start_14(){
        $("#ventana").load(ruta+'2-9-14/index.php', 
        {
        next: "Page_15()", 
        procesar:"result_tipo_2_9_14()",
        titulo:"<center><h5><span>Observa</span> la imagen, luego <span>completa</span> la oración usando el verbo indicado.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "2-9-14",
        nota:cal
        }
        );
        return false;  
    };
    function start_15(){
        $("#ventana").load(ruta+'2-9-15/index.php', 
        {
        next: "Page_16()", 
        procesar:"result_tipo_2_9_15()",
        titulo:"<center><h5><span>Selecciona</span> y <span>une</span> el sujeto con el predicado que corresponde.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "2-9-15",
        nota:cal
        }
        );
        return false;  
    };
    function start_16(){
        $("#ventana").load(ruta+'2-9-16/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_9_16()",
        titulo:"<center><h5><span>Completa</span> las oraciones <span>arrastrando</span> el sujeto adecuado para cada predicado.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "2-9-16",
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