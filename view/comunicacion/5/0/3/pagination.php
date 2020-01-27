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

    var cant=2;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_7(){
        $("#ventana").load(ruta+'5-0-7/index.php', 
        {
        next: "Page_8()", 
        procesar:"result_tipo_5_0_7()",
        titulo:"<center><h5><span>Relaciona</span> los elementos de la comunicación según corresponda.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "5-0-7",
        nota:cal
        }
        );
        return false;  
    };
    function start_8(){
        $("#ventana").load(ruta+'5-0-8/index.php', 
        { 
        next: "Page_9()", 
        procesar:"result_tipo_5_0_8()",
        titulo:"<center><h5><span>Coloca</span> los elementos de la comunicación en el esquema según corresponda.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "5-0-8",
        nota:cal
        }
        );
        return false;
    };
    function start_9(){
        $("#ventana").load(ruta+'5-0-9/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_5_0_9()",
        titulo:"<center><h5><span>Selecciona</span> la afirmación incorrecta.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "5-0-9",
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