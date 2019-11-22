<script type="text/javascript">
    function  Page_25(){
        start_25();
        inicio();
         count = 3;
    }
   function Page_26(){
        start_26();
        inicio();
        count = 3;
    }
    function  Page_27(){
        start_27();
        inicio();
         count = 3;
    }
    function Page_28(){
        start_28();
        inicio();
        count = 3;
    }
    function  Page_29(){
        start_29();
        inicio();
         count = 3;
    }
    var cant=6;
    var cal= 26/26;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_25(){   
        $("#ventana").load(ruta+'1-5-25/index.php', 
        { 
        next: "Page_26()", 
        procesar:"result_tipo_1_5_25()",
        titulo:"<center><h5><span>Observa</span> las imágenes y <span>arrastra</span> sus nombres.</h5></center>",
        restaurar:"start_25()",
        dir:ruta,
        cod: "1-5-25",
        nota:cal
        }          
        );
        return false;
    };
    function start_26(){   
        $("#ventana").load(ruta+'1-5-26/index.php', 
        { 
        next: "Page_27()", 
        procesar:"result_tipo_1_5_26()",
        titulo:"<center><h5><span>Observa</span> las imágenes y <span>arrastra</span> sus nombres.</h5></center>",
        restaurar:"start_26()",
        dir:ruta,
        cod: "1-5-26",
        nota:cal
        }          
        );
        return false;
    };
    function start_27(){   
        $("#ventana").load(ruta+'1-5-27/index.php', 
        { 
        next: "Page_28()", 
        procesar:"result_tipo_1_5_27()",
        titulo:"<center><h5><span>Busca</span> las siguientes palabras en la sopa de letras.</h5></center>",
        restaurar:"start_27()",
        dir:ruta,
        cod: "1-5-27",
        nota:cal
        }          
        );
        return false;
    };
    function start_28(){   
        $("#ventana").load(ruta+'1-5-28/index.php', 
        { 
        next: "Page_29()", 
        procesar:"result_tipo_1_5_28()",
        titulo:"<center><h5><span>Lee</span> las oraciones y<span>únelas</span> con los dibujos según corresponda.</h5></center>",
        restaurar:"start_28()",
        dir:ruta,
        cod: "1-5-28",
        nota:cal
        }          
        );
        return false;
    };
    function start_29(){   
        $("#ventana").load(ruta+'1-5-29/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_5_29()",
        titulo:"<center><h5><span>Lee</span> las oraciones y<span>únelas</span> con los dibujos según corresponda.</h5></center>",
        restaurar:"start_29()",
        dir:ruta,
        cod: "1-5-29",
        nota:cal
        }          
        );
        return false;
    };
    function resultado(){
        $("#ventana").load('../../../exercises/resultado/resultado.php');
        return false;
    };
</script>