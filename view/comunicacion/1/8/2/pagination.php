<script type="text/javascript">
    function Page_3(){
        start_3();
        inicio();
        count = 3;
    }
   function Page_4(){
        start_4();
        inicio();
        count = 3;
    }
    function Page_5(){
        start_5();
        inicio();
        count = 3;
    }
    function Page_6(){
        start_6();
        inicio();
        count = 3;
    }
   
    var cant=4;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_3(){   
        $("#ventana").load(ruta+'1-8-3/index.php', 
        { 
        next: "Page_4()", 
        procesar:"result_tipo_1_8_3()",
        titulo:"<center><h5><span>Observa</span> los dibujos y <span>arrastra</span> el nombre.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "1-8-3",
        nota:cal
        }          
        );
        return false;
    };
    function start_4(){   
        $("#ventana").load(ruta+'1-8-4/index.php', 
        { 
        next: "Page_5()", 
        procesar:"result_tipo_1_8_4()",
        titulo:"<center><h5><span>Completa</span> las palabras con las sílabas <span>pla, ple, pli, plo, plu</span>.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "1-8-4",
        nota:cal
        }          
        );
        return false;
    };
    function start_5(){   
        $("#ventana").load(ruta+'1-8-5/index.php', 
        { 
        next: "Page_6()", 
        procesar:"result_tipo_1_8_5()",
        titulo:"<center><h5><span>Completa</span> las palabras con las sílabas <span>pla, ple, pli, plo, plu</span>.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "1-8-5",
        nota:cal
        }          
        );
        return false;
    };
    function start_6(){   
        $("#ventana").load(ruta+'1-8-6/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_8_6()",
        titulo:"<center><h5><span>Ordena</span> las sílabas y <span>forma</span> palabras.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "1-8-6",
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