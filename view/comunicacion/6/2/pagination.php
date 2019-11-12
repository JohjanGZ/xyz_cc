<script type="text/javascript">   
    function Page_92(){
        start_92();
        inicio();
        count = 3;
    }

   
   
    var cant=5;
    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_92(){   
        $("#ventana").load(ruta+'1-6-92/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_6_92()",
        titulo:"<center><h5><span class='ftitulo'>Observa</span> las siguientes imágenes y <span class='ftitulo'>ordénalas</span> según sucedieron los hechos.</h5></center>",
        restaurar:"start_92()",
        dir:ruta,
        cod: "1-6-92",
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