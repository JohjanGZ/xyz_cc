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
    function Page_10(){
        start_10();
        inicio();
        count = 3;
    }

    var cant=6;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    function start_5(){
        $("#ventana").load(ruta+'2-7-5/index.php', 
        {
        next: "Page_6()", 
        procesar:"result_tipo_2_7_5()",
        titulo:"<center><h5><span>Observa</span> los dibujos y <span>completa</span> las analogías.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "2-7-5",
        nota:cal
        }
        );
        return false;  
    };
    
    function start_6(){
        $("#ventana").load(ruta+'2-7-6/index.php', 
        {
        next: "Page_7()", 
        procesar:"result_tipo_2_7_6()",
        titulo:"<center><h5><span>Completa</span> las siguientes analogías con la palabra correcta. <span>Observa</span> el ejemplo.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "2-7-6",
        nota:cal
        }
        );
        return false;  
    };
    function start_7(){
        $("#ventana").load(ruta+'2-7-7/index.php', 
        {
        next: "Page_8()", 
        procesar:"result_tipo_2_7_7()",
        titulo:"<center><h5><span>Completa</span> las siguientes analogías con la palabra correcta. <span>Observa</span> el ejemplo.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "2-7-7",
        nota:cal
        }
        );
        return false;  
    };
    function start_8(){
        $("#ventana").load(ruta+'2-7-8/index.php', 
        {
        next: "Page_9()", 
        procesar:"result_tipo_2_7_8()",
        titulo:"<center><h5><span>Completa</span> las siguientes analogías.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "2-7-8",
        nota:cal
        }
        );
        return false;  
    };
    function start_9(){
        $("#ventana").load(ruta+'2-7-9/index.php', 
        {
        next: "Page_10()", 
        procesar:"result_tipo_2_7_9()",
        titulo:"<center><h5><span>Arrastra</span> las palabras y <span>completa</span> las analogías.</h5></center>",
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
        next: "resultado()", 
        procesar:"result_tipo_2_7_10()",
        titulo:"<center><h5><span>Marca</span> la opción que complete correctamente las analogías.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "2-7-10",
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