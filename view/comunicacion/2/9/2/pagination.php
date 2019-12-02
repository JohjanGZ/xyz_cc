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
    function Page_9(){
        start_9();
        inicio();
        count = 3;
    }

    var cant=5;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_5(){
        $("#ventana").load(ruta+'2-9-5/index.php', 
        {
        next: "Page_6()", 
        procesar:"result_tipo_2_9_5()",
        titulo:"<center><h5><span>Completa</span> los siguientes campos semánticos.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "2-9-5",
        nota:cal
        }
        );
        return false;  
    };
    
    function start_6(){
        $("#ventana").load(ruta+'2-9-6/index.php', 
        {
        next: "Page_7()", 
        procesar:"result_tipo_2_9_6()",
        titulo:"<center><h5><span>Completa</span> los siguientes campos semánticos.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "2-9-6",
        nota:cal
        }
        );
        return false;  
    };
    function start_7(){
        $("#ventana").load(ruta+'2-9-7/index.php', 
        {
        next: "Page_8()", 
        procesar:"result_tipo_2_9_7()",
        titulo:"<center><h5><span>Selecciona</span> la palabra que no pertenezca a cada campo semántico.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "2-9-7",
        nota:cal
        }
        );
        return false;  
    };
    function start_8(){
        $("#ventana").load(ruta+'2-9-8/index.php', 
        {
        next: "Page_9()", 
        procesar:"result_tipo_2_9_8()",
        titulo:"<center><h5><span>Arrastra</span> el nombre de cada campo semántico.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "2-9-8",
        nota:cal
        }
        );
        return false;  
    };
    function start_9(){
        $("#ventana").load(ruta+'2-9-9/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_9_9()",
        titulo:"<center><h5><span>Arrastra</span> la relación que hay entre cada grupo de palabras.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "2-9-9",
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