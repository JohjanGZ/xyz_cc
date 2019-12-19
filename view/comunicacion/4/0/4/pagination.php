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
        $("#ventana").load(ruta+'4-0-14/index.php', 
        {
        next: "Page_15()", 
        procesar:"result_tipo_4_0_14()",
        titulo:"<center><h5><span>Observa</span> los dibujos y <span>arrastra</span> la forma de comunicación que utiliza cada actividad.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "4-0-14",
        nota:cal
        }
        );
        return false;  
    };
    function start_15(){
        $("#ventana").load(ruta+'4-0-15/index.php', 
        {
        next: "Page_16()", 
        procesar:"result_tipo_4_0_15()",
        titulo:"<center><h5><span>Relaciona</span> cada situación con el tipo de comunicación que corresponde.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "4-0-15",
        nota:cal
        }
        );
        return false;  
    };
    function start_16(){
        $("#ventana").load(ruta+'4-0-16/index.php', 
        {
        next: "Page_17()", 
        procesar:"result_tipo_4_0_16()",
        titulo:"<center><h5><span>Identifica</span> y <span>selecciona</span> el <i>emisor, receptor y mensaje</i> de los siguientes casos.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "4-0-16",
        nota:cal
        }
        );
        return false;  
    };
    function start_17(){
        $("#ventana").load(ruta+'4-0-17/index.php', 
        {
        next: "Page_18()", 
        procesar:"result_tipo_4_0_17()",
        titulo:"<center><h5><span>Identifica</span> y <span>selecciona</span> el <i>emisor, receptor y mensaje</i> de los siguientes casos.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "4-0-17",
        nota:cal
        }
        );
        return false;  
    };
    function start_18(){
        $("#ventana").load(ruta+'4-0-18/index.php', 
        {
        next: "resultado()",
        procesar:"result_tipo_4_0_18()",
        titulo:"<center><h5><span>Identifica</span> y <span>selecciona</span> el <i>emisor, receptor y mensaje</i> de los siguientes casos.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "4-0-18",
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