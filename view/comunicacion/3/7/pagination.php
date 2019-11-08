<script type="text/javascript">
    function  Page_56(){
        start_56();
        inicio();
         count = 3;
    }
    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_56(){   
        $("#ventana").load(ruta+'1-3-56/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_3_56()",
        titulo:"<center><h5><span class='ftitulo'>Completa</span> la frase.</h5></center>",
        restaurar:"start_56()",
        dir:ruta,
        cod: "1-3-56",
        nota:cal
        }          
        );
        return false;
    };
    function resultado(){
        $("#ventana").load('../../../exercises/resultado/resultado.php');
        return false;
    };
</script>