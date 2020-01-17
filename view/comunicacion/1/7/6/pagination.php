<script type="text/javascript">
    
    function Page_lectura_1_7_6_1(){
        start_lectura_1_7_6_1();
        inicio();
        count = 0;
    }
    function Page_18(){
        start_18();
        inicio();
        count = 3;
    }
    function Page_19(){
        start_19();
        inicio();
        count = 3;
    }

   
    var cant=14;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    function start_lectura_1_7_6_1(){
        $("#ventana").load(ruta+'lectura1-7-6-1/index.php', 
        {
        next: "Page_18()", 
        procesar:"lectura1-7-6-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y <span>responde</span>.</h5></center>",
        restaurar:"start_lectura_1_7_6_1()",
        dir:ruta,
        cod: "lectura1-7-6-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_18(){   
        $("#ventana").load(ruta+'1-7-18/index.php', 
        { 
        next: "Page_19()", 
        procesar:"result_tipo_1_7_18()",
        titulo:"<center><h5><span>Señala</span> la respuesta correcta.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "1-7-18",
        nota:cal
        }          
        );
        return false;
    };
    function start_19(){   
        $("#ventana").load(ruta+'1-7-19/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_7_19()",
        titulo:"<center><h5><span>Señala</span> la respuesta correcta.</h5></center>",
        restaurar:"start_19()",
        dir:ruta,
        cod: "1-7-19",
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