<script type="text/javascript">
    function  Page_19(){
        start_19();
        inicio();
         count = 3;
    }
   function Page_20(){
        start_20();
        inicio();
        count = 3;
    }
    function  Page_21(){
        start_21();
        inicio();
         count = 3;
    }
    function Page_22(){
        start_22();
        inicio();
        count = 3;
    }
    function  Page_23(){
        start_23();
        inicio();
         count = 3;
    }
    function  Page_24(){
        start_24();
        inicio();
         count = 3;
    }
    var cant=6;
    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_19(){   
        $("#ventana").load(ruta+'1-5-19/index.php', 
        { 
        next: "Page_20()", 
        procesar:"result_tipo_1_5_19()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> las palabras y únelas con los dibujos según corresponda.</h5></center>",
        restaurar:"start_19()",
        dir:ruta,
        cod: "1-5-19",
        nota:cal
        }          
        );
        return false;
    };
    function start_20(){   
        $("#ventana").load(ruta+'1-5-20/index.php', 
        { 
        next: "Page_21()", 
        procesar:"result_tipo_1_5_20()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> las palabras y únelas con los dibujos según corresponda.</h5></center>",
        restaurar:"start_20()",
        dir:ruta,
        cod: "1-5-20",
        nota:cal
        }          
        );
        return false;
    };
    function start_21(){   
        $("#ventana").load(ruta+'1-5-21/index.php', 
        { 
        next: "Page_22()", 
        procesar:"result_tipo_1_5_21()",
        titulo:"<center><h5><span>Escribe</span> las sílabas <span>lla, lle, lli, llo, llu</span> según corresponda.</h5></center>",
        restaurar:"start_21()",
        dir:ruta,
        cod: "1-5-21",
        nota:cal
        }          
        );
        return false;
    };
    function start_22(){   
        $("#ventana").load(ruta+'1-5-22/index.php', 
        { 
        next: "Page_23()", 
        procesar:"result_tipo_1_5_22()",
        titulo:"<center><h5><span>Escribe</span> las sílabas <span>lla, lle, lli, llo, llu</span> según corresponda.</h5></center>",
        restaurar:"start_22()",
        dir:ruta,
        cod: "1-5-22",
        nota:cal
        }          
        );
        return false;
    };
    function start_23(){   
        $("#ventana").load(ruta+'1-5-23/index.php', 
        { 
        next: "Page_24()", 
        procesar:"result_tipo_1_5_23()",
        titulo:"<center><h5><span>Ordena</span> las palabras y <span>forma</span> las oraciones.</h5></center>",
        restaurar:"start_23()",
        dir:ruta,
        cod: "1-5-23",
        nota:cal
        }          
        );
        return false;
    };
    function start_24(){   
        $("#ventana").load(ruta+'1-5-24/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_5_24()",
        titulo:"<center><h5><span>Ordena</span> las palabras y <span>forma</span> las oraciones.</h5></center>",
        restaurar:"start_24()",
        dir:ruta,
        cod: "1-5-24",
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