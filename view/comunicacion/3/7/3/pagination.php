<script type="text/javascript">
    
    function Page_9(){
        start_9();
        inicio();
        count = 3;
    }
    function Page_10(){
        start_10();
        inicio();
        count = 3;
    }

    var cant=2;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
  
    function start_9(){
        $("#ventana").load(ruta+'2-8-9/index.php', 
        {
        next: "Page_10()", 
        procesar:"result_tipo_2_8_9()",
        titulo:"<center><h5><span>Lee</span> atentamente el diálogo, luego <span>completa</span> el enunciado.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "2-8-9",
        nota:cal
        }
        );
        return false;  
    };
    function start_10(){
        $("#ventana").load(ruta+'2-8-10/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_8_10()",
        titulo:"<center><h5><span>Arrastra</span> los signos de interrogación o exclamación donde correspondan.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "2-8-10",
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