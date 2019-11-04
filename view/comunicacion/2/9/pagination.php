<script type="text/javascript">
   function Page_34(){
        start_34();
        inicio();
         count = 3;
    }
    function Page_35(){
        start_35();
        inicio();
         count = 3;
    }
    function  Page_36(){
        start_36();
        inicio();
         count = 3;
    }
    function  Page_37(){
        start_37();
        inicio();
         count = 3;
    }

    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_34(){   
        $("#ventana").load(ruta+'1-2-34/index.php', 
        { 
        next: "Page_35()", 
        procesar:"result_tipo_1_2_34()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra </span>las palabras a donde corresponde.</h5></center>",
        restaurar:"start_34()",
        dir:ruta,
        cod: "1-2-34",
        nota:cal
        }          
        );
        return false;
    };
    function start_35(){   
        $("#ventana").load(ruta+'1-2-35/index.php', 
        { 
        next: "Page_36()", 
        procesar:"result_tipo_1_2_35()",
        titulo:"<center><h5><span class='ftitulo'>Observa </span>y <span>une</span> las figuras del lado izquierdo con las que se ubican al lado derecho que correspondan a la misma familia de palabras.</h5></center>",
        restaurar:"start_35()",
        dir:ruta,
        cod: "1-2-35",
        nota:cal
        }          
        );
        return false;
    };
    function start_36(){   
        $("#ventana").load(ruta+'1-2-36/index.php', 
        { 
        next: "Page_37()", 
        procesar:"result_tipo_1_2_36()",
        titulo:"<center><h5><span class='ftitulo'>Observa </span>y <span>une</span> las figuras del lado izquierdo con las que se ubican al lado derecho que correspondan a la misma familia de palabras.</h5></center>",
        restaurar:"start_36()",
        dir:ruta,
        cod: "1-2-36",
        nota:cal
        }          
        );
        return false;
    };
    function start_37(){   
        $("#ventana").load(ruta+'1-2-37/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_2_37()",
        titulo:"<center><h5><span class='ftitulo'>Observa </span>y <span>une</span> las figuras del lado izquierdo con las que se ubican al lado derecho que correspondan a la misma familia de palabras.</h5></center>",
        restaurar:"start_37()",
        dir:ruta,
        cod: "1-2-37",
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