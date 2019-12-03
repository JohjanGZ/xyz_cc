<script type="text/javascript">
   function Page_14(){
        start_14();
        inicio();
         count = 3;
    }
   function  Page_15(){
        start_15();
        inicio();
         count = 3;
    }
    function Page_16(){
        start_16();
        inicio();
         count = 3;
    }
   function  Page_17(){
        start_17();
        inicio();
         count = 3;
    }
    function Page_18(){
        start_18();
        inicio();
         count = 3;
    }

    var cant=5;

    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
   
    function start_14(){
        $("#ventana").load(ruta+'2-1-14/index.php', 
        {
        next: "Page_15()", 
        procesar:"result_tipo_2_1_14()",
        titulo:"<center><h5><span>Reconoce</span> las mayúsculas que encuentres en el siguiente texto.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "2-1-14",
        nota:cal
        }
        );
        return false;  
    };
    function start_15(){
        $("#ventana").load(ruta+'2-1-15/index.php', 
        { 
        next: "Page_16()", 
        procesar:"result_tipo_2_1_15()",
        titulo:"<center><h5><span>Coloca</span> la letra adecuada en los casilleros y <span>completa</span> la historia.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "2-1-15",
        nota:cal
        }
        );
        return false;
    };
    function start_16(){
        $("#ventana").load(ruta+'2-1-16/index.php', 
        { 
        next: "Page_17()", 
        procesar:"result_tipo_2_1_16()",
        titulo:"<center><h5><span>Forma</span> una oración para cada dibujo usando las palabras que se indican</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "2-1-16",
        nota:cal
        }
        );
        return false;
    };
    function start_17(){
        $("#ventana").load(ruta+'2-1-17/index.php', 
        { 
        next: "Page_18()", 
        procesar:"result_tipo_2_1_17()",
        titulo:"<center><h5><span>Arrastra</span> las siguientes opciones y <span>completa</span> las oraciones.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "2-1-17",
        nota:cal
        }
        );
        return false;
    };
    function start_18(){
        $("#ventana").load(ruta+'2-1-18/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_2_1_18()",
        titulo:"<center><h5><span>Lee</span> atentamente el cuento, luego <span>arrastra</span> el tipo de punto que reconozcas.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "2-1-18",
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