<script type="text/javascript">
    
   
    function Page_20(){
        start_20();
        inicio();
        count = 3;
    }

    var cant=1;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    
    function start_20(){
        $("#ventana").load(ruta+'2-7-20/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_7_20()",
        titulo:"<center><h5><span>Completa</span> el mapa semántico de los estados del agua <span>arrastrando las palabras.</span>.</h5></center>",
        restaurar:"start_20()",
        dir:ruta,
        cod: "2-7-20",
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