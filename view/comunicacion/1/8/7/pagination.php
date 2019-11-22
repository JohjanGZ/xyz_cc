<script type="text/javascript">
    
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

   
    var cant=2;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    function start_14(){   
        $("#ventana").load(ruta+'1-8-14/index.php', 
        { 
        next: "Page_15()", 
        procesar:"result_tipo_1_8_14()",
        titulo:"<center><h5><span>Observa</span> y <span>completa</span> las palabras con las sílabas que corresponden </h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "1-8-14",
        nota:cal
        }          
        );
        return false;
    };
    function start_15(){   
        $("#ventana").load(ruta+'1-8-15/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_8_15()",
        titulo:"<center><h5><span>Realiza</span> la siguiente sopa de letras.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "1-8-15",
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