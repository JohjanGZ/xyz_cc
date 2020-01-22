<script type="text/javascript">
    function Page_lectura_2_3_1_1(){
        start_lectura_2_3_1_1();
        inicio();
        count = 0;
    }
   function Page_1(){
        start_1();
        inicio();
        count = 3;
    }
  
    var cant=2;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_2_3_1_1(){
        $("#ventana").load(ruta+'lectura2-3-1-1/index.php', 
        {
        next: "Page_1()", 
        procesar:"lectura2-3-1-1()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_2_3_1_1()",
        dir:ruta,
        cod: "lectura2-3-1-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_1(){
        $("#ventana").load(ruta+'2-3-1/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_3_1()",
        titulo:"<center><h5><span>Selecciona</span> la alternativa correcta.</h5></center>",
        restaurar:"start_1()",
        dir:ruta,
        cod: "2-3-1",
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