<script type="text/javascript">


    function Page_18(){
        start_18();
        inicio();
        count = 3;
    }
    function Page_19(){
        start_19();
        inicio();
        count = 3;
    }
    function Page_20(){
        start_20();
        inicio();
        count = 3;
    }

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_18(){
        $("#ventana").load(ruta+'5-0-18/index.php', 
        {
        next: "Page_19()", 
        procesar:"result_tipo_5_0_18()",
        titulo:"<center><h5><span>Lee</span> el siguiente texto, luego <span>indica</span> si el enunciado es verdadero o falso.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "5-0-18",
        nota:cal
        }
        );
        return false;  
    };
    function start_19(){
        $("#ventana").load(ruta+'5-0-19/index.php', 
        {
        next: "Page_20()", 
        procesar:"result_tipo_5_0_19()",
        titulo:"<center><h5><span>Lee</span> el siguiente texto, luego <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_19()",
        dir:ruta,
        cod: "5-0-19",
        nota:cal
        }
        );
        return false;  
    };
    function start_20(){
        $("#ventana").load(ruta+'5-0-20/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_5_0_20()",
        titulo:"<center><h5><span>Lee</span> las siguientes oraciones y luego <span>selecciona</span> aquella que presenta la idea principal de un posible párrafo.</h5></center>",
        restaurar:"start_20()",
        dir:ruta,
        cod: "5-0-20",
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