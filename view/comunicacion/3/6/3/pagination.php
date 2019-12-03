<script type="text/javascript">
    
   
    function Page_11(){
        start_11();
        inicio();
        count = 3;
    }
    function Page_12(){
        start_12();
        inicio();
        count = 3;
    }
    function Page_13(){
        start_13();
        inicio();
        count = 3;
    }
    function Page_14(){
        start_14();
        inicio();
        count = 3;
    }

    var cant=4;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    
    function start_11(){
        $("#ventana").load(ruta+'2-7-11/index.php', 
        {
        next: "Page_12()", 
        procesar:"result_tipo_2_7_11()",
        titulo:"<center><h5><span>Completa</span> las palabras seleccionando <i>r</i> o <i>rr</i> según corresponda.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "2-7-11",
        nota:cal
        }
        );
        return false;  
    };
    function start_12(){
        $("#ventana").load(ruta+'2-7-12/index.php', 
        {
        next: "Page_13()", 
        procesar:"result_tipo_2_7_12()",
        titulo:"<center><h5><span>Arrastra</span> las siguientes imágenes al grupo que correspondan según su nombre.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "2-7-12",
        nota:cal
        }
        );
        return false;  
    };
    function start_13(){
        $("#ventana").load(ruta+'2-7-13/index.php', 
        {
        next: "Page_14()", 
        procesar:"result_tipo_2_7_13()",
        titulo:"<center><h5><span>Completa</span> los espacios en blanco con <i>r</i> o <i>rr</i> según corresponda.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "2-7-13",
        nota:cal
        }
        );
        return false;  
    };
    function start_14(){
        $("#ventana").load(ruta+'2-7-14/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_7_14()",
        titulo:"<center><h5><span>Encuentra</span> las siguientes palabras en la sopa de letras.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "2-7-14",
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