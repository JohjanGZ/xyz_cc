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
        $("#ventana").load(ruta+'2-8-11/index.php', 
        {
        next: "Page_12()", 
        procesar:"result_tipo_2_8_11()",
        titulo:"<center><h5><span>Observa</span> las imágenes y <span>arrastra</span> la acción qure realiza cada personaje.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "2-8-11",
        nota:cal
        }
        );
        return false;  
    };
    function start_12(){
        $("#ventana").load(ruta+'2-8-12/index.php', 
        {
        next: "Page_13()", 
        procesar:"result_tipo_2_8_12()",
        titulo:"<center><h5><span>Encuentra</span> los siguientes verbos en la sopa de letras.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "2-8-12",
        nota:cal
        }
        );
        return false;  
    };
    function start_13(){
        $("#ventana").load(ruta+'2-8-13/index.php', 
        {
        next: "Page_14()", 
        procesar:"result_tipo_2_8_13()",
        titulo:"<center><h5><span>Arrastra</span> cada oración en el recuadro que corresponde según su tiempo verbal.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "2-8-13",
        nota:cal
        }
        );
        return false;  
    };
    function start_14(){
        $("#ventana").load(ruta+'2-8-14/index.php', 
        {
        next: "Page_15()", 
        procesar:"result_tipo_2_8_14()",
        titulo:"<center><h5><span>Observa</span> los siguientes verbos, luego <span>arrastralos</span> en el recuadro que corresponda.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "2-8-14",
        nota:cal
        }
        );
        return false;  
    };
    function start_15(){
        $("#ventana").load(ruta+'2-8-15/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_8_15()",
        titulo:"<center><h5><span>Clasifica</span> la siguiente lista de verbos según el tiempo que se indica.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "2-8-15",
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