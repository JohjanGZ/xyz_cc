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
    function Page_16(){
        start_16();
        inicio();
        count = 3;
    }
    function Page_17(){
        start_17();
        inicio();
        count = 3;
    }
    function Page_18(){
        start_18();
        inicio();
        count = 3;
    }

   
    var cant=8;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    
    function start_11(){   
        $("#ventana").load(ruta+'1-7-11/index.php', 
        { 
        next: "Page_12()", 
        procesar:"result_tipo_1_7_11()",
        titulo:"<center><h5><span>Observa</span> las imágenes y <span>arrastra</span> sus nombres.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "1-7-11",
        nota:cal
        }          
        );
        return false;
    };
    function start_12(){   
        $("#ventana").load(ruta+'1-7-12/index.php', 
        { 
        next: "Page_13()", 
        procesar:"result_tipo_1_7_12()",
        titulo:"<center><h5><span>Observa</span> las imágenes y <span>arrastra</span> sus nombres.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "1-7-12",
        nota:cal
        }          
        );
        return false;
    };
    function start_13(){   
        $("#ventana").load(ruta+'1-7-13/index.php', 
        { 
        next: "Page_14()", 
        procesar:"result_tipo_1_7_13()",
        titulo:"<center><h5><span>Observa</span> las imágenes y <span>arrastra</span> sus nombres.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "1-7-13",
        nota:cal
        }          
        );
        return false;
    };
    function start_14(){   
        $("#ventana").load(ruta+'1-7-14/index.php', 
        { 
        next: "Page_15()", 
        procesar:"result_tipo_1_7_14()",
        titulo:"<center><h5><span>Une</span> cada palabra con la imagen que le corresponde.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "1-7-14",
        nota:cal
        }          
        );
        return false;
    };
    function start_15(){   
        $("#ventana").load(ruta+'1-7-15/index.php', 
        { 
        next: "Page_16()", 
        procesar:"result_tipo_1_7_15()",
        titulo:"<center><h5><span>Une</span> cada palabra con la imagen que le corresponde.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "1-7-15",
        nota:cal
        }          
        );
        return false;
    };
    function start_16(){   
        $("#ventana").load(ruta+'1-7-16/index.php', 
        { 
        next: "Page_17()", 
        procesar:"result_tipo_1_7_16()",
        titulo:"<center><h5><span>Une</span> cada palabra con la imagen que le corresponde.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "1-7-16",
        nota:cal
        }          
        );
        return false;
    };
    function start_17(){   
        $("#ventana").load(ruta+'1-7-17/index.php', 
        { 
        next: "Page_18()", 
        procesar:"result_tipo_1_7_17()",
        titulo:"<center><h5><span>Ordena</span> las sílabas y forma palabras.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "1-7-17",
        nota:cal
        }          
        );
        return false;
    };
    function start_18(){   
        $("#ventana").load(ruta+'1-7-18/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_7_18()",
        titulo:"<center><h5><span>Busca</span> en la sopa de letras las siguientes palabras.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "1-7-18",
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