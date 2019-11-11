<script type="text/javascript">
    function  Page_13(){
        start_13();
        inicio();
         count = 3;
    }
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
    function Page_19(){
        start_19();
        inicio();
        count = 3;
    }
   
    function Page_20(){
        start_20();
        inicio();
        count = 3;
    }
   
    function Page_21(){
        start_21();
        inicio();
        count = 3;
    }
   
    function Page_22(){
        start_22();
        inicio();
        count = 3;
    }
    function Page_23(){
        start_23();
        inicio();
        count = 3;
    }
   
    function Page_24(){
        start_24();
        inicio();
        count = 3;
    }
   
    function Page_25(){
        start_25();
        inicio();
        count = 3;
    }
    function Page_26(){
        start_26();
        inicio();
        count = 3;
    }
    function Page_27(){
        start_27();
        inicio();
        count = 3;
    }
   
   
   
   
    var cant=5;
    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_13(){   
        $("#ventana").load(ruta+'1-4-13/index.php', 
        { 
        next: "Page_14()", 
        procesar:"result_tipo_1_4_13()",
        titulo:"<center><h5><span class='ftitulo'>ha - he - hi - ho - hu</span><br><span class='ftitulo'>observa</span> las imágenes y <span class='ftitulo'>arrastra</span> los nombres donde corresponda.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "1-4-13",
        nota:cal
        }          
        );
        return false;
    };
    function start_14(){   
        $("#ventana").load(ruta+'1-4-14/index.php', 
        { 
        next: "Page_15()", 
        procesar:"result_tipo_1_4_14()",
        titulo:"<center><h5><span class='ftitulo'>ha - he - hi - ho - hu</span><br><span class='ftitulo'>observa</span> las imágenes y <span class='ftitulo'>arrastra</span> los nombres donde corresponda.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "1-4-14",
        nota:cal
        }          
        );
        return false;
    };
    function start_15(){   
        $("#ventana").load(ruta+'1-4-15/index.php', 
        { 
        next: "Page_16()", 
        procesar:"result_tipo_1_4_15()",
        titulo:"<center><h5><span class='ftitulo'>ha - he - hi - ho - hu</span><br><span class='ftitulo'>observa</span> las imágenes y <span class='ftitulo'>arrastra</span> los nombres donde corresponda.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "1-4-15",
        nota:cal
        }          
        );
        return false;
    };
    function start_16(){   
        $("#ventana").load(ruta+'1-4-16/index.php', 
        { 
        next: "Page_17()", 
        procesar:"result_tipo_1_4_16()",
        titulo:"<center><h5><span class='ftitulo'>Completa</span> las palabras con las vocales correspondientes.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "1-4-16",
        nota:cal
        }          
        );
        return false;
    };
    function start_17(){   
        $("#ventana").load(ruta+'1-4-17/index.php', 
        { 
        next: "Page_18()", 
        procesar:"result_tipo_1_4_17()",
        titulo:"<center><h5><span class='ftitulo'>Completa</span> las palabras con las vocales correspondientes.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "1-4-17",
        nota:cal
        }          
        );
        return false;
    };
    function start_18(){   
        $("#ventana").load(ruta+'1-4-18/index.php', 
        { 
        next: "Page_19()", 
        procesar:"result_tipo_1_4_18()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la palabras helado.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "1-4-18",
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