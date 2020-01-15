<script type="text/javascript">
  
   function Page_6(){
        start_6();
        inicio();
        count = 3;
    }

    var cant=1;
    var cal= 20/20;
    var ruta="../../../../exercises/inicial/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
   
    function start_6(){
        $("#ventana").load(ruta+'4-1-6/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_1_6()",
        titulo:"<center><h5><span>Compara</span> las figuras y <span>selecciona</span> la más alta.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "4-1-6",
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