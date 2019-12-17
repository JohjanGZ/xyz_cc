<script type="text/javascript">
   function Page_lectura_3_1_2_1(){
        start_lectura_3_1_2_1();
        inicio();
        count = 0;
    }
   function Page_3(){
        start_3();
        inicio();
        count = 3;
    }
   function  Page_4(){
        start_4();
        inicio();
         count = 3;
    }

    var cant=2;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_3_1_2_1(){
        $("#ventana").load(ruta+'lectura3-1-2-1/index.php', 
        {
        next: "Page_3()", 
        procesar:"lectura2-1-1-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_3_1_2_1()",
        dir:ruta,
        cod: "lectura3-1-2-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_3(){
        $("#ventana").load(ruta+'3-1-3/index.php', 
        {
        next: "Page_4()", 
        procesar:"result_tipo_3_1_3()",
        titulo:"<center><h5><span>Lee</span> y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "3-1-3",
        nota:cal
        }
        );
        return false;  
    };
    function start_4(){
        $("#ventana").load(ruta+'3-1-4/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_3_1_4()",
        titulo:"<center><h5><span>Lee</span> y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "3-1-4",
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