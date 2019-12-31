<script type="text/javascript">
   
    function  Page_6(){
        start_6();
        inicio();
         count = 3;
    }
    function  Page_7(){
        start_7();
        inicio();
         count = 3;
    }

    var cant=2;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
 
    function start_6(){
        $("#ventana").load(ruta+'4-7-6/index.php', 
        {
        next: "Page_7()", 
        procesar:"result_tipo_4_7_6()",
        titulo:"<center><h5><span>Selecciona</span> las respuestas correctas.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "4-7-6",
        nota:cal
        }
        );
        return false;  
    };
    function start_7(){
        $("#ventana").load(ruta+'4-7-7/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_7_7()",
        titulo:"<center><h5><span>Selecciona</span> el significado correcto de las siguientes frases:</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "4-7-7",
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