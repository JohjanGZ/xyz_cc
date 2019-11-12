<script type="text/javascript">
    function  Page_lectura_5_3(){
        start_lectura_5_3();
        inicio();
         count = 3;
    }
    function  Page_3(){
        start_3();
        inicio();
         count = 3;
    }
   
    var cant=1;
    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_5_3(){   
        $("#ventana").load(ruta+'lectura1-5-3-1/index.php', 
        { 
        next: "Page_3()", 
        procesar:"result_tipo_1_5_3()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y responde.</h5></center>",
        restaurar:"start_lectura_5_3()",
        dir:ruta,
        cod: "lectura1-5-3-1",
        nota:cal
        }          
        );
        return false;
    };
    function start_3(){   
        $("#ventana").load(ruta+'1-5-3/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_5_3()",
        titulo:"<center><h5>¿Con qué juega el gatito todos los días? <span>Selecciona</span>.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "1-5-3",
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