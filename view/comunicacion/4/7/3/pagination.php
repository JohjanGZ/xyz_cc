<script type="text/javascript">
   function Page_lectura_4_7_3_1(){
        start_lectura_4_7_3_1();
        inicio();
        count = 0;
    }
    function  Page_8(){
        start_8();
        inicio();
         count = 3;
    }

    var cant=1;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_4_7_3_1(){
        $("#ventana").load(ruta+'lectura4-7-3-1/index.php', 
        {
        next: "Page_8()", 
        procesar:"lectura1-1-1-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y <span>contesta</span> las preguntas.</h5></center>",
        restaurar:"start_lectura_4_7_3_1()",
        dir:ruta,
        cod: "lectura4-7-3-1",
        nota:cal
        }
        );
        return false;  
    };
    
    function start_8(){
        $("#ventana").load(ruta+'4-7-8/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_7_8()",
        titulo:"<center><h5><span>Selecciona</span> el significado correcto de las siguientes frases:</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "4-7-8",
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