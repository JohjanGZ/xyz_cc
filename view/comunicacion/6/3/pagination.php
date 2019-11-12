<script type="text/javascript">   
    function Page_93(){
        start_93();
        inicio();
        count = 3;
    }

   
   
    var cant=5;
    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_93(){   
        $("#ventana").load(ruta+'1-6-93/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_6_93()",
        titulo:"<center><h5><span class='ftitulo'>ña - ñe - ñi - ño - ñu</span><br><span class='ftitulo'>Completa</span> el crucigrama y <span class='ftitulo'>descubre</span> la palabra escondida.</h5></center>",
        restaurar:"start_93()",
        dir:ruta,
        cod: "1-6-93",
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