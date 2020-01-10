<script type="text/javascript">
  
   function Page_4(){
        start_4();
        inicio();
        count = 3;
    }

    var cant=1;
    var cal= 20/20;
    var ruta="../../../../exercises/inicial/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
   
    function start_4(){
        $("#ventana").load(ruta+'4-0-4/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_0_4()",
        titulo:"<center><h5><span>Une</span> cada dibujo con su vocal inicial.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "4-0-4",
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