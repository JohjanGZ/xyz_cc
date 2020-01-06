<script type="text/javascript">

    function Page_4(){
        start_4();
        inicio();
        count = 3;
    }
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

    var cant=4;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_4(){
        $("#ventana").load(ruta+'5-1-4/index.php', 
        {
        next: "Page_5()", 
        procesar:"result_tipo_5_1_4()",
        titulo:"<center><h5><span>Completa</span> las siguientes oraciones con el tipo de conector que se indica.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "5-1-4",
        nota:cal
        }
        );
        return false;  
    };
    function start_5(){
        $("#ventana").load(ruta+'5-1-5/index.php', 
        {
        next: "Page_6()", 
        procesar:"result_tipo_5_1_5()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "5-1-5",
        nota:cal
        }
        );
        return false;  
    };
    function start_6(){
        $("#ventana").load(ruta+'5-1-6/index.php', 
        {
        next: "Page_7()", 
        procesar:"result_tipo_5_1_6()",
        titulo:"<center><h5><span>Arrastra</span> los conectores y <span>completa</span> las oraciones.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "5-1-6",
        nota:cal
        }
        );
        return false;  
    };
    function start_7(){
        $("#ventana").load(ruta+'5-1-7/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_5_1_7()",
        titulo:"<center><h5><span>Selecciona</span> y <span>une</span> las siguientes oraciones tomando en cuenta el uso apropiado de los conectores.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "5-1-7",
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