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
    function  Page_11(){
        start_11();
        inicio();
         count = 3;
    }
    function Page_12(){
        start_12();
        inicio();
         count = 3;
    }
    var cant=4;

    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_9(){   
        $("#ventana").load(ruta+'1-2-9/index.php', 
        { 
        next: "Page_10()", 
        procesar:"result_tipo_1_2_9()",
        titulo:"<center><h5><span>Observa</span> el dibujo y separa las sílabas de su nombre.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "1-2-9",
        nota:cal
        }          
        );
        return false;
    };
    function start_10(){
        $("#ventana").load(ruta+'1-2-10/index.php', 
        {
        next: "Page_11()", 
        procesar:"result_tipo_1_2_10()",
        titulo:"<center><h5><span>Marca</span> el círculo que contiene la sílaba <span>ta-</span>.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "1-2-10",
        nota:cal
        }
        );
        return false;  
    };
    function start_11(){
        $("#ventana").load(ruta+'1-2-11/index.php', 
        { 
        next: "Page_12()", 
        procesar:"result_tipo_1_2_11()",
        titulo:"<center><h5><span>Separa</span> las sílabas de estas palabras.</center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "1-2-11",
        nota:cal
        }
        );
        return false;
    };
    function start_12(){   
        $("#ventana").load(ruta+'1-2-12/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_2_12()",
        titulo:"<center><h5><span>Arrastra</span> las sílabas y <span>forma</span> los nombres de las ilustraciones.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "1-2-12",
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