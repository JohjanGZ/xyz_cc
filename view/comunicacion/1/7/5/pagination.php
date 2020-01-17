<script type="text/javascript">
    
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
    function Page_17(){
        start_17();
        inicio();
        count = 3;
    }
   
    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_15(){   
        $("#ventana").load(ruta+'1-7-15/index.php', 
        { 
        next: "Page_16()", 
        procesar:"result_tipo_1_7_15()",
        titulo:"<center><h5><span>Observa</span> las imágenes y luego <span>completa</span> las oraciones con un verbo.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "1-7-15",
        nota:cal
        }          
        );
        return false;
    };
    function start_16(){   
        $("#ventana").load(ruta+'1-7-16/index.php', 
        { 
            next: "Page_17()", 
            procesar:"result_tipo_1_7_16()",
            titulo:"<center><h5><span>Indica</span> qué está haciendo cada personaje.</h5></center>",
            restaurar:"start_16()",
            dir:ruta,
            cod: "1-7-16",
            nota:cal
        }          
        );
        return false;
    };
    function start_17(){   
        $("#ventana").load(ruta+'1-7-17/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_7_17()",
        titulo:"<center><h5>Ahora <span>encuentra</span> los verbos en la sopa de letras.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "1-7-17",
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