<script type="text/javascript">
    function  Page_4(){
        start_4();
        inicio();
         count = 3;
    }
    var cant=1;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_4(){   
        $("#ventana").load(ruta+'1-5-4/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_5_4()",
        titulo:"<center><h5><span>Identifica</span> las muñecas iguales y únelas.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "1-5-4",
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