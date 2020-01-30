<script type="text/javascript">
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
    function Page_18(){
        start_18();
        inicio();
        count = 3;
    }
    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_16(){
        $("#ventana").load(ruta+'5-5-16/index.php', 
        {
        next: "Page_17()", 
        procesar:"result_tipo_5_5_16()",
        titulo:"<center><h5><span>Selecciona</span> la alternativa que complete el siguiente enunciado: “El poema es…”.</center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "5-5-16",
        nota:cal
        }
        );
        return false;  
    };
    function start_17(){
        $("#ventana").load(ruta+'5-5-17/index.php', 
        {
        next: "Page_18()", 
        procesar:"result_tipo_5_5_17()",
        titulo:"<center><h5><span>Relaciona</span> con líneas los siguientes subgéneros del género lírico.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "5-5-17",
        nota:cal
        }
        );
        return false;  
    };
    function start_18(){
        $("#ventana").load(ruta+'5-5-18/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_5_5_18()",
        titulo:"<center><h5>Selecciona la afirmación incorrecta acerca del poema.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "5-5-18",
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