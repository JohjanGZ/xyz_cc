<script type="text/javascript">
   
    function Page_19(){
        start_19();
        inicio();
        count = 3;
    }
    function  Page_20(){
        start_20();
        inicio();
        count = 3;
    }
    function Page_21(){
        start_21();
        inicio();
        count = 3;
    }

    var cant=5;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


    function start_19(){
        $("#ventana").load(ruta+'4-0-19/index.php', 
        {
        next: "Page_20()", 
        procesar:"result_tipo_4_0_19()",
        titulo:"<center><h5><span>Ordena</span> alfabéticamente cada grupo de palabras.</h5></center>",
        restaurar:"start_19()",
        dir:ruta,
        cod: "4-0-19",
        nota:cal
        }
        );
        return false;  
    };
    function start_20(){
        $("#ventana").load(ruta+'4-0-20/index.php', 
        {
        next: "Page_21()", 
        procesar:"result_tipo_4_0_20()",
        titulo:"<center><h5><span>Ordena</span> a las frutas alfabéticamente.</h5></center>",
        restaurar:"start_20()",
        dir:ruta,
        cod: "4-0-20",
        nota:cal
        }
        );
        return false;  
    };
    function start_21(){
        $("#ventana").load(ruta+'4-0-21/index.php', 
        {
        next: "resultado()",
        procesar:"result_tipo_4_0_21()",
        titulo:"<center><h5><span>Selecciona</span> el número correspondiente a al alfabético.</h5></center>",
        restaurar:"start_21()",
        dir:ruta,
        cod: "4-0-21",
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