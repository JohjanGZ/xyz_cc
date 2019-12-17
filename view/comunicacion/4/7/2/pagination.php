<script type="text/javascript">

    function Page_5(){
        start_5();
        inicio();
        count = 3;
    }
    function  Page_6(){
        start_6();
        inicio();
         count = 3;
    }
    function  Page_7(){
        start_7();
        inicio();
         count = 3;
    }

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_5(){
        $("#ventana").load(ruta+'3-7-5/index.php', 
        {
        next: "Page_6()", 
        procesar:"result_tipo_3_7_5()",
        titulo:"<center><h5><span>Relaciona</span> la pareja de palabras con su tipo de analogía.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "3-7-5",
        nota:cal
        }
        );
        return false;  
    };
    function start_6(){
        $("#ventana").load(ruta+'3-7-6/index.php', 
        {
        next: "Page_7()", 
        procesar:"result_tipo_3_7_6()",
        titulo:"<center><h5><span>Selecciona</span> la palabra que completa cada serie.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "3-7-6",
        nota:cal
        }
        );
        return false;  
    };
    function start_7(){
        $("#ventana").load(ruta+'3-7-7/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_3_7_7()",
        titulo:"<center><h5><span>Arrastra</span> la palabra que corresponda cada analogía.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "3-7-7",
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