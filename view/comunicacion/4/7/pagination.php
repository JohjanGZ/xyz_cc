<script type="text/javascript">   
    function Page_47(){
        start_47();
        inicio();
        count = 3;
    }
   
    function Page_48(){
        start_48();
        inicio();
        count = 3;
    }
    function Page_49(){
        start_49();
        inicio();
        count = 3;
    }
    function Page_50(){
        start_50();
        inicio();
        count = 3;
    }
   
   
   
   
    var cant=5;
    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_47(){   
        $("#ventana").load(ruta+'1-4-47/index.php', 
        { 
        next: "Page_48()", 
        procesar:"result_tipo_1_4_47()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra</span> los dibujos según corresponde.</h5></center>",
        restaurar:"start_47()",
        dir:ruta,
        cod: "1-4-47",
        nota:cal
        }          
        );
        return false;
    };
    function start_48(){   
        $("#ventana").load(ruta+'1-4-48/index.php', 
        { 
        next: "Page_49()", 
        procesar:"result_tipo_1_4_48()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra</span> según corresponde.</h5></center>",
        restaurar:"start_48()",
        dir:ruta,
        cod: "1-4-48",
        nota:cal
        }          
        );
        return false;
    };
    function start_49(){   
        $("#ventana").load(ruta+'1-4-49/index.php', 
        { 
        next: "Page_50()", 
        procesar:"result_tipo_1_4_49()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra</span> según corresponde.</h5></center>",
        restaurar:"start_49()",
        dir:ruta,
        cod: "1-4-49",
        nota:cal
        }          
        );
        return false;
    };
    function start_50(){   
        $("#ventana").load(ruta+'1-4-50/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_4_50()",
        titulo:"<center><h5><span class='ftitulo'>Completa</span> el crucigrama con los nombres de las imagenes.</h5></center>",
        restaurar:"start_50()",
        dir:ruta,
        cod: "1-4-50",
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