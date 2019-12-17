<script type="text/javascript">
   function Page_lectura_3_4_2_1(){
        start_lectura_3_4_2_1();
        inicio();
        count = 0;
    }
    function  Page_4(){
        start_4();
        inicio();
         count = 3;
    }

    var cant=1;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_3_4_2_1(){
        $("#ventana").load(ruta+'lectura3-4-2-1/index.php', 
        {
        next: "Page_4()", 
        procesar:"lectura3-4-2-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_3_4_2_1()",
        dir:ruta,
        cod: "lectura3-4-2-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_4(){
        $("#ventana").load(ruta+'3-4-4/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_3_4_4()",
        titulo:"<center><h5><span>Lee</span> y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "3-4-4",
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