<script type="text/javascript">
    
   function Page_6(){
        start_6();
        inicio();
        count = 3;
    }


    var cant=1;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_6(){
        $("#ventana").load(ruta+'2-4-6/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_4_6()",
        titulo:"<center><h5><span>Lee</span> el siguiente poema, luego <span>arrastra</span> las partes del poema según correspondan.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "2-4-6",
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