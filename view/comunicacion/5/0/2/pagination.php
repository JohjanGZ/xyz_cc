<script type="text/javascript">

   function Page_6(){
        start_6();
        inicio();
        count = 3;
    }
   function  Page_7(){
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

    var cant=5;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_6(){
        $("#ventana").load(ruta+'5-0-6/index.php', 
        {
        next: "Page_7()", 
        procesar:"result_tipo_5_0_6()",
        titulo:"<center><h5><span>Arrastra</span> el nombre correspondiente a cada imagen.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "5-0-6",
        nota:cal
        }
        );
        return false;  
    };
    function start_7(){
        $("#ventana").load(ruta+'5-0-7/index.php', 
        { 
        next: "Page_8()", 
        procesar:"result_tipo_5_0_7()",
        titulo:"<center><h5><span>Lee</span> la definición y <span>selecciona</span> a que palabra pertenece.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "5-0-7",
        nota:cal
        }
        );
        return false;
    };
    function start_8(){
        $("#ventana").load(ruta+'5-0-8/index.php', 
        {
        next: "Page_9()", 
        procesar:"result_tipo_5_0_8()",
        titulo:"<center><h5><span>Lee</span> los nuevos términos que han formado los prefijos y las palabras. Luego <span>relaciónalos</span> con su significado.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "5-0-8",
        nota:cal
        }
        );
        return false;  
    };
    function start_9(){
        $("#ventana").load(ruta+'5-0-9/index.php', 
        {
        next: "Page_10()", 
        procesar:"result_tipo_5_0_9()",
        titulo:"<center><h5><span>Completa</span> las palabras <span>arrastrando</span> el prefijo adecuado para el significado.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "5-0-9",
        nota:cal
        }
        );
        return false;  
    };
    function start_10(){
        $("#ventana").load(ruta+'5-0-10/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_5_0_10()",
        titulo:"<center><h5><span>Arrastra</<span> los prefijos para completar las oraciones.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "5-0-10",
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