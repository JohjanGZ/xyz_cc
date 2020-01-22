<script type="text/javascript">
    function Page_lectura_2_2_4_1(){
        start_lectura_2_2_4_1();
        inicio();
        count = 0;
    }
   function  Page_6(){
        start_6();
        inicio();
         count = 3;
    }

    var cant=1;

    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_2_2_4_1(){
        $("#ventana").load(ruta+'lectura2-2-4-1/index.php', 
        {
        next: "Page_6()", 
        procesar:"lectura2-2-4-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y <span>responde</span> las preguntas.</h5></center>",
        restaurar:"start_lectura_2_2_4_1()",
        dir:ruta,
        cod: "lectura2-2-4-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_6(){
        $("#ventana").load(ruta+'2-2-6/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_2_6()",
        titulo:"<center><h5><span>Selecciona</span> la alternativa correcta de acuerdo a la lectura.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "2-2-6",
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