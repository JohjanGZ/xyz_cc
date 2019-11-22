<script type="text/javascript">
   function Page_lectura_2_3_3_1(){
        start_lectura_2_3_3_1();
        inicio();
        count = 0;
    }
    function Page_8(){
        start_8();
        inicio();
         count = 3;
    }


    var cant=1;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
   
    function start_lectura_2_3_3_1(){
        $("#ventana").load(ruta+'lectura2-3-3-1/index.php', 
        {
        next: "Page_8()", 
        procesar:"lectura2-2-1-1()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_2_3_3_1()",
        dir:ruta,
        cod: "lectura2-3-3-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_8(){
        $("#ventana").load(ruta+'2-3-8/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_3_8()",
        titulo:"<center><h5><span>Marca</span> la alternativa correcta de acuerdo a la lectura.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "2-3-8",
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