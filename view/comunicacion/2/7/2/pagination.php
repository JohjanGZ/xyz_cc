<script type="text/javascript">

   function Page_9(){
        start_9();
        inicio();
        count = 3;
    }
    function Page_10(){
        start_10();
        inicio();
        count = 3;
    }
    function Page_11(){
        start_11();
        inicio();
        count = 3;
    }
    

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    function start_9(){
        $("#ventana").load(ruta+'2-7-9/index.php', 
        {
        next: "Page_10()", 
        procesar:"result_tipo_2_7_9()",
        titulo:"<center><h5><span>Arrastra</span> cada oración  en el recuadro que correspondesegún su tiempo verbal.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "2-7-9",
        nota:cal
        }
        );
        return false;  
    };
    function start_10(){
        $("#ventana").load(ruta+'2-7-10/index.php', 
        {
        next: "Page_11()", 
        procesar:"result_tipo_2_7_10()",
        titulo:"<center><h5><span>Observa</span> los siguientes verbos, luego <span>arrastralos</span> en el recuadro que corresponda.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "2-7-10",
        nota:cal
        }
        );
        return false;  
    };
    function start_11(){
        $("#ventana").load(ruta+'2-7-11/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_7_11()",
        titulo:"<center><h5><span>Clasifica</span> la siguiente lista de verbos según el tiempo que se indica.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "2-7-11",
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