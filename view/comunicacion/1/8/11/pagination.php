<script type="text/javascript">
    function  Page_lectura_8_11(){
        start_lectura_8_11();
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
   
    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_8_11(){   
        $("#ventana").load(ruta+'lectura1-8-11-1/index.php', 
        { 
        next: "Page_23()", 
        procesar:"result_tipo_1_4_1()",
        titulo:"<center><h5><span>Lee</span> atentamente y responde.</h5></center>",
        restaurar:"start_lectura_8_11()",
        dir:ruta,
        cod: "lectura1-8-11-1",
        nota:cal
        }          
        );
        return false;
    };
    function start_23(){   
        $("#ventana").load(ruta+'1-8-23/index.php', 
        { 
        next: "Page_24()", 
        procesar:"result_tipo_1_8_23()",
        titulo:"<center><h5>¿Qué quería demostrar Aracne con los dibujos que había representado en su telar?</h5></center>",
        restaurar:"start_23()",
        dir:ruta,
        cod: "1-8-23",
        nota:cal
        }          
        );
        return false;
    };
    function start_24(){   
        $("#ventana").load(ruta+'1-8-24/index.php', 
        { 
        next: "Page_25()", 
        procesar:"result_tipo_1_8_24()",
        titulo:"<center><h5>¿De qué manera participaban los dioses en la vida de los seres humanos? <span>Selecciona</span></h5></center>",
        restaurar:"start_24()",
        dir:ruta,
        cod: "1-8-24",
        nota:cal
        }          
        );
        return false;
    };
    function start_25(){   
        $("#ventana").load(ruta+'1-8-25/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_8_25()",
        titulo:"<center><h5>¿Cuál es el propósito del texto leído?<span> Selecciona</span></h5></center>",
        restaurar:"start_25()",
        dir:ruta,
        cod: "1-8-25",
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