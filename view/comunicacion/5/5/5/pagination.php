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
    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_13(){
        $("#ventana").load(ruta+'5-5-13/index.php', 
        {
        next: "Page_14()", 
        procesar:"result_tipo_5_5_13()",
        titulo:"<center><h5><span>Selecciona</span> la afirmación correcta sobre los dos puntos.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "5-5-13",
        nota:cal
        }
        );
        return false;  
    };
    function start_14(){
        $("#ventana").load(ruta+'5-5-14/index.php', 
        {
        next: "Page_15()", 
        procesar:"result_tipo_5_5_14()",
        titulo:"<center><h5><span>Selecciona</span> la característica correspondiente a los puntos suspensivos.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "5-5-14",
        nota:cal
        }
        );
        return false;  
    };
    function start_15(){
        $("#ventana").load(ruta+'5-5-15/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_5_5_15()",
        titulo:"<center><h5><span></span> los enunciados que emplean adecuadamente los dos puntos y los puntos suspensivos.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "5-5-15",
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