<script type="text/javascript">
   function Page_9(){
        start_9();
        inicio();
         count = 3;
    }
   function  Page_10(){
        start_10();
        inicio();
         count = 3;
    }
    function Page_11(){
        start_11();
        inicio();
         count = 3;
    }
    function  Page_12(){
        start_12();
        inicio();
         count = 3;
    }
    function Page_13(){
        start_13();
        inicio();
         count = 3;
    }

    var cant=3;

    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
   
    function start_9(){
        $("#ventana").load(ruta+'2-3-9/index.php', 
        {
        next: "Page_10()", 
        procesar:"result_tipo_2_3_9()",
        titulo:"<center><h5><span>Arrastra</span> el artículo correspondiente a cada imagen.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "2-3-9",
        nota:cal
        }
        );
        return false;  
    };
    function start_10(){
        $("#ventana").load(ruta+'2-3-10/index.php', 
        {
        next: "Page_11()", 
        procesar:"result_tipo_2_3_10()",
        titulo:"<center><h5><span>Selecciona</span> el artículo y <span>relaciona</span> con el sustantivo adecuado.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "2-3-10",
        nota:cal
        }
        );
        return false;  
    };
    function start_11(){
        $("#ventana").load(ruta+'2-3-11/index.php', 
        {
        next: "Page_12()", 
        procesar:"result_tipo_2_3_11()",
        titulo:"<center><h5><span>Arrastra</span> el artículo que corresponda para cada palabra.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "2-3-11",
        nota:cal
        }
        );
        return false;  
    };
    function start_12(){
        $("#ventana").load(ruta+'2-3-12/index.php', 
        {
        next: "Page_13()", 
        procesar:"result_tipo_2_3_12()",
        titulo:"<center><h5><span>Selecciona</span> el artículo y <span>relaciona</span> con el sustantivo adecuado.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "2-3-12",
        nota:cal
        }
        );
        return false;  
    };
    function start_13(){
        $("#ventana").load(ruta+'2-3-13/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_3_13()",
        titulo:"<center><h5><span>Arrastra</span> el artículo que corresponda para cada palabra.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "2-3-13",
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