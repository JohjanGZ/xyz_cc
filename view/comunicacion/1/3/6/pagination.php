<script type="text/javascript">
   function Page_15(){
        start_15();
        inicio();
        count = 3;
    }
   function  Page_16(){
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
    var cant=4;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_15(){
        $("#ventana").load(ruta+'1-3-15/index.php', 
        {
        next: "Page_16()", 
        procesar:"result_tipo_1_3_15()",
        titulo:"<center><h5><span>Arrastra</span> los dibujos según corresponda.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "1-3-15",
        nota:cal
        }
        );
        return false;  
    };
    function start_16(){
        $("#ventana").load(ruta+'1-3-16/index.php', 
        { 
        next: "Page_17()", 
        procesar:"result_tipo_1_3_16()",
        titulo:"<center><h5><span>Arrastra</span> según corresponda.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "1-3-16",
        nota:cal
        }
        );
        return false;
    };
    function start_17(){   
        $("#ventana").load(ruta+'1-3-17/index.php', 
        { 
        next: "Page_18()", 
        procesar:"result_tipo_1_3_17()",
        titulo:"<center><h5><span>Arrastra</span> según corresponda.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "1-3-17",
        nota:cal
        }          
        );
        return false;
    };
    function start_18(){   
        $("#ventana").load(ruta+'1-3-18/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_3_18()",
        titulo:"<center><h5><span>Arrastra</span> los sustantivos al género que pertenece.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "1-3-18",
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