<script type="text/javascript">
   function Page_13(){
        start_13();
        inicio();
         count = 3;
    }

    var cant=1;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
   
    function start_13(){
        $("#ventana").load(ruta+'2-1-13/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_1_13()",
        titulo:"<center><h5><span>Marca</span> la imagen que corresponda con lo mencionado en el texto.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "2-1-13",
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