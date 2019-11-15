<script type="text/javascript">
   function Page_17(){
        start_17();
        inicio();
        count = 3;
    }
   function  Page_18(){
        start_18();
        inicio();
         count = 3;
    }
    var cant=2;

    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_17(){
        $("#ventana").load(ruta+'1-1-17/index.php', 
        {
        next: "Page_18()", 
        procesar:"result_tipo_1_1_17()",
        titulo:"<center><h5><span class='ftitulo'>Completa</span> el nombre de cada imagen con la sílaba que le corresponde <span class='ftitulo'>sa-, se-, si-, so-, su-</span>.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "1-1-17",
        nota:cal
        }
        );
        return false;  
    };
    function start_18(){
        $("#ventana").load(ruta+'1-1-18/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_1_18()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> y <span class='ftitulo'>Completa</span> cada oraciòn con la imagen que le corresponde.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "1-1-18",
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