<script type="text/javascript">
    function  Page_20(){
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
    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_20(){   
        $("#ventana").load(ruta+'1-8-20/index.php', 
        { 
        next: "Page_21()", 
        procesar:"result_tipo_1_8_20()",
        titulo:"<center><h5><span>Señala</span> qué oraciones son exclamativas.</h5></center>",
        restaurar:"start_20()",
        dir:ruta,
        cod: "1-8-20",
        nota:cal
        }          
        );
        return false;
    };
    function start_21(){   
        $("#ventana").load(ruta+'1-8-21/index.php', 
        { 
        next: "Page_22()", 
        procesar:"result_tipo_1_8_21()",
        titulo:"<center><h5><span>Arrastra</span> los signos de exclamación e interrogación donde corresponde.</h5></center>",
        restaurar:"start_21()",
        dir:ruta,
        cod: "1-8-21",
        nota:cal
        }          
        );
        return false;
    };
    function start_22(){   
        $("#ventana").load(ruta+'1-8-22/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_8_22()",
        titulo:"<center><h5><span>Arrastra</span> los signos de exclamación e interrogación donde corresponde.</h5></center>",
        restaurar:"start_22()",
        dir:ruta,
        cod: "1-8-22",
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