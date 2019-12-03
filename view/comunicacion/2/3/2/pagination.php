<script type="text/javascript">
   function Page_3(){
        start_3();
        inicio();
        count = 3;
    }
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

    var cant=5;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_3(){
        $("#ventana").load(ruta+'2-4-3/index.php', 
        {
        next: "Page_4()", 
        procesar:"result_tipo_2_4_3()",
        titulo:"<center><h5><span>Arrastra</span> y <span>completa</span> la familia de palabras según corresponda.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "2-4-3",
        nota:cal
        }
        );
        return false;  
    };
    function start_4(){
        $("#ventana").load(ruta+'2-4-4/index.php', 
        {
        next: "Page_5()", 
        procesar:"result_tipo_2_4_4()",
        titulo:"<center><h5><span>Arrastra</span> y <span>clasifica</span> las palabras según la familia a la que le pertenecen.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "2-4-4",
        nota:cal
        }
        );
        return false;  
    };
    function start_5(){
        $("#ventana").load(ruta+'2-4-5/index.php', 
        {
        next: "Page_6()", 
        procesar:"result_tipo_2_4_5()",
        titulo:"<center><h5><span>Selecciona</span> y <span>arrastra</span> cada palabra, hacia el grupo que corresponda.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "2-4-5",
        nota:cal
        }
        );
        return false;  
    };
    function start_6(){
        $("#ventana").load(ruta+'2-4-6/index.php', 
        {
        next: "Page_7()", 
        procesar:"result_tipo_2_4_6()",
        titulo:"<center><h5><span>Arrastra</span> y <span>clasifica</span> las palabras de la misma familia.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "2-4-6",
        nota:cal
        }
        );
        return false;  
    };
    function start_7(){
        $("#ventana").load(ruta+'2-4-7/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_4_7()",
        titulo:"<center><h5><span>Selecciona</span>, en cada caso, la palabra que no corresponde.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "2-4-7",
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