<script type="text/javascript">   
    function Page_3(){
        start_3();
        inicio();
        count = 3;
    }

   
   
    var cant=5;
    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_3(){   
        $("#ventana").load(ruta+'1-6-3/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_6_3()",
        titulo:"<center><h5><span class='ftitulo'>Observa</span> las siguientes imágenes y <span class='ftitulo'>ordénalas</span> según sucedieron los hechos.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "1-6-3",
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