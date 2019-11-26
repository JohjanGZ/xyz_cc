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
    function Page_15(){
        start_15();
        inicio();
        count = 3;
    }

    var cant=5;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_11(){
        $("#ventana").load(ruta+'2-5-11/index.php', 
        {
        next: "Page_12()", 
        procesar:"result_tipo_2_5_11()",
        titulo:"<center><h5><span>Completa</span> las palabras con <i>-ca, -que, -qui, -co, -cu.</i>.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "2-5-11",
        nota:cal
        }
        );
        return false;  
    };
    function start_12(){
        $("#ventana").load(ruta+'2-5-12/index.php', 
        {
        next: "Page_13()", 
        procesar:"result_tipo_2_5_12()",
        titulo:"<center><h5><span>Arrastra</span> los nombres de los siguientes objetos.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "2-5-12",
        nota:cal
        }
        );
        return false;  
    };
    function start_13(){
        $("#ventana").load(ruta+'2-5-13/index.php', 
        {
        next: "Page_14()", 
        procesar:"result_tipo_2_5_13()",
        titulo:"<center><h5><span>Lee</span> atentamente, luego <span>arrastra</span> las palabras resaltadas en los espacios en blanco de acuerdo a la sílaba indicada.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "2-5-13",
        nota:cal
        }
        );
        return false;  
    };
    function start_14(){
        $("#ventana").load(ruta+'2-5-14/index.php', 
        {
        next: "Page_15()", 
        procesar:"result_tipo_2_5_14()",
        titulo:"<center><h5><span>Arrastra</span> los nombres de las siguientes imágenes.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "2-5-14",
        nota:cal
        }
        );
        return false;  
    };
    function start_15(){
        $("#ventana").load(ruta+'2-5-15/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_5_15()",
        titulo:"<center><h5><span>Completa</span> las palabras con las sílabas <i>que y qui</i>.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "2-5-15",
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