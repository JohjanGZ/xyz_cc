<script type="text/javascript">
    
   
    function Page_15(){
        start_15();
        inicio();
        count = 3;
    }

    var cant=5;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_15(){
        $("#ventana").load(ruta+'2-6-15/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_6_15()",
        titulo:"<center><h5><span>Lee</span> el siguiente poema, luego <span>arrastra</span> las partes del poema según correspondan.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "2-6-15",
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