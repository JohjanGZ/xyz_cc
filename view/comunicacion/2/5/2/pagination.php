<script type="text/javascript">
    
    function Page_5(){
        start_5();
        inicio();
        count = 3;
    }
    function Page_6(){
        start_6();
        inicio();
        count = 3;
    }
    function Page_7(){
        start_7();
        inicio();
        count = 3;
    }
    function Page_8(){
        start_8();
        inicio();
        count = 3;
    }


    var cant=4;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
    // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_5(){
        $("#ventana").load(ruta+'2-5-5/index.php', 
        {
        next: "Page_6()", 
        procesar:"result_tipo_2_5_5()",
        titulo:"<center><h5><span>Arrastra</span> el conector que corresponda a cada imagen.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "2-5-5",
        nota:cal
        }
        );
        return false;  
    };
    function start_6(){
        $("#ventana").load(ruta+'2-5-6/index.php', 
        {
        next: "Page_7()", 
        procesar:"result_tipo_2_6_6()",
        titulo:"<center><h5><span>Observa</span> las imágenes y <span>arrástrala</span> donde corresponda.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "2-5-6",
        nota:cal
        }
        );
        return false;  
    };
    function start_7(){
        $("#ventana").load(ruta+'2-5-7/index.php', 
        {
        next: "Page_8()", 
        procesar:"result_tipo_2_5_7()",
        titulo:"<center><h5><span>Arrastra</span> el conector  que mejor complete la oración.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "2-5-7",
        nota:cal
        }
        );
        return false;  
    };
    function start_8(){
        $("#ventana").load(ruta+'2-5-8/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_5_8()",
        titulo:"<center><h5>¿Cómo se prepara la sopa de flores? <span>Une</span> según el orden que corresponda..</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "2-5-8",
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