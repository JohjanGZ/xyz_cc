<script type="text/javascript">
    function  Page_lectura_5_1(){
        start_lectura_5_1();
        inicio();
         count = 3;
    }
   function Page_1(){
        start_1();
        inicio();
        count = 3;
    }
   
    var cant=1;
    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_5_1(){   
        $("#ventana").load(ruta+'lectura1-5-1-1/index.php', 
        { 
        next: "Page_1()", 
        procesar:"result_tipo_1_4_1()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y responde.</h5></center>",
        restaurar:"start_lectura_5_1()",
        dir:ruta,
        cod: "lectura1-5-1-1",
        nota:cal
        }          
        );
        return false;
    };
    function start_1(){   
        $("#ventana").load(ruta+'1-5-1/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_5_1()",
        titulo:"<center><h5>¿Qué es lo que recoge la abejita en el jardín? <span>Selecciona</span>.</h5></center>",
        restaurar:"start_1()",
        dir:ruta,
        cod: "1-5-1",
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