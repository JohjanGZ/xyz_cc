<script type="text/javascript">
    
   function Page_17(){
        start_17();
        inicio();
        count = 3;
    }
    var cant=1;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_17(){   
        $("#ventana").load(ruta+'1-8-17/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_8_17()",
        titulo:"<center><h5><span>Observa</span> las imágenes, luego <span>selecciona</span> el número que corresponde al enunciado.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "1-8-17",
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