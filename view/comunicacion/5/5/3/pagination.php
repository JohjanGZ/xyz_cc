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
    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_7(){
        $("#ventana").load(ruta+'5-5-7/index.php', 
        {
        next: "Page_8()", 
        procesar:"result_tipo_5_5_7()",
        titulo:"<center><h5><span>Selecciona</span> la alternativa que complete el siguiente enunciado: “La declamación consiste en…”.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "5-5-7",
        nota:cal
        }
        );
        return false;  
    };
    function start_8(){
        $("#ventana").load(ruta+'5-5-8/index.php', 
        {
        next: "Page_9()", 
        procesar:"result_tipo_5_5_8()",
        titulo:"<center><h5><span>Relaciona</span> los aspectos de la declamación con sus respectivas definiciones.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "5-5-8",
        nota:cal
        }
        );
        return false;  
    };
    function start_9(){
        $("#ventana").load(ruta+'5-5-9/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_5_5_9()",
        titulo:"<center><h5><span>Selecciona</span> los recursos necesarios para realizar la declamación.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "5-5-9",
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