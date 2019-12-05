<script type="text/javascript">
  function Page_lectura_3_1_5_1(){
        start_lectura_3_1_5_1();
        inicio();
        count = 0;
    }
    function Page_17(){
        start_17();
        inicio();
        count = 3;
    }
   function  Page_18(){
        start_18();
        inicio();
         count = 3;
    }

    var cant=2;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_3_1_5_1(){
        $("#ventana").load(ruta+'lectura3-1-5-1/index.php', 
        {
        next: "Page_17()", 
        procesar:"lectura2-1-5-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_3_1_5_1()",
        dir:ruta,
        cod: "lectura3-1-5-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_17(){
        $("#ventana").load(ruta+'3-1-17/index.php', 
        { 
        next: "Page_18()", 
        procesar:"result_tipo_3_1_17()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "3-1-17",
        nota:cal
        }
        );
        return false;
    };
    function start_18(){
        $("#ventana").load(ruta+'3-1-18/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_3_1_18()",
        titulo:"<center><h5><span>Selecciona</span> la oración que rime con..</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "3-1-18",
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