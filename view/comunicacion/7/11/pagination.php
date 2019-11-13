<script type="text/javascript">
    function  Page_35(){
        start_35();
        inicio();
         count = 3;
    }
   function Page_36(){
        start_36();
        inicio();
        count = 3;
    }
    function  Page_37(){
        start_37();
        inicio();
         count = 3;
    }
    function Page_38(){
        start_38();
        inicio();
        count = 3;
    }
    var cant=4;
    var cal= 26/26;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_35(){   
        $("#ventana").load(ruta+'1-5-35/index.php', 
        { 
        next: "Page_36()", 
        procesar:"result_tipo_1_5_35()",
        titulo:"<center><h5><span>Selecciona</span> los dibujos que tengan sonido <span>ce</span> y <span>ci</span>.</h5></center>",
        restaurar:"start_35()",
        dir:ruta,
        cod: "1-5-35",
        nota:cal
        }          
        );
        return false;
    };
    function start_36(){   
        $("#ventana").load(ruta+'1-5-36/index.php', 
        { 
        next: "Page_37()", 
        procesar:"result_tipo_1_5_36()",
        titulo:"<center><h5><span>Selecciona</span> el sonido con el que empieza el nombre de cada dibujo.</h5></center>",
        restaurar:"start_36()",
        dir:ruta,
        cod: "1-5-36",
        nota:cal
        }          
        );
        return false;
    };
    function start_37(){   
        $("#ventana").load(ruta+'1-5-37/index.php', 
        { 
        next: "Page_38()", 
        procesar:"result_tipo_1_5_37()",
        titulo:"<center><h5><span>Selecciona</span> el sonido con el que empieza el nombre de cada dibujo.</h5></center>",
        restaurar:"start_37()",
        dir:ruta,
        cod: "1-5-37",
        nota:cal
        }          
        );
        return false;
    };
    function start_38(){   
        $("#ventana").load(ruta+'1-5-38/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_5_38()",
        titulo:"<center><h5><span>Selecciona</span> el sonido con el que empieza el nombre de cada dibujo.</h5></center>",
        restaurar:"start_38()",
        dir:ruta,
        cod: "1-5-38",
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