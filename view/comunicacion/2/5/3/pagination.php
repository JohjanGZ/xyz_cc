<script type="text/javascript">
    
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


    var cant=4;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_7(){
        $("#ventana").load(ruta+'2-5-7/index.php', 
        {
        next: "Page_8()", 
        procesar:"result_tipo_2_5_7()",
        titulo:"<center><h5><span>Observa</span> cada grupo de imágenes y <span>selecciona</span> la que no corresponde.</h5></center>",
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
        next: "Page_9()", 
        procesar:"result_tipo_2_5_8()",
        titulo:"<center><h5><span>Lee</span> atentamente la siguiente serie y marca la que no corresponde.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "2-5-8",
        nota:cal
        }
        );
        return false;  
    };
    function start_9(){
        $("#ventana").load(ruta+'2-5-9/index.php', 
        {
        next: "Page_10()", 
        procesar:"result_tipo_2_5_9()",
        titulo:"<center><h5><span>Arrastra</span> la palabra que corresponda  a cada serie.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "2-5-9",
        nota:cal
        }
        );
        return false;  
    };
    function start_10(){
        $("#ventana").load(ruta+'2-5-10/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_5_10()",
        titulo:"<center><h5><span>Selecciona</span> la palabra que no corresponda a la serie.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "2-5-10",
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