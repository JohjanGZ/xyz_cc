<script type="text/javascript">
   function Page_lectura_3_6_5_1(){
        start_lectura_3_6_5_1();
        inicio();
        count = 0;
    }
    function  Page_18(){
        start_18();
        inicio();
         count = 3;
    }

    var cant=1;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
   
    function start_lectura_3_6_5_1(){
        $("#ventana").load(ruta+'lectura3-6-5-1/index.php', 
        {
        next: "Page_18()", 
        procesar:"lectura3-6-5-1()",
        titulo:"<center><h5><span>Observa</span> atentamente la receta y <span>contesta</span> las preguntas.</h5></center>",
        restaurar:"start_lectura_3_6_5_1()",
        dir:ruta,
        cod: "lectura3-6-5-1",
        nota:cal
        }
        );
        return false;  
    };
   
    function start_18(){
        $("#ventana").load(ruta+'3-6-18/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_3_6_18()",
        titulo:"<center><h5><span>Observa</span> el caligrama y responde las preguntas.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "3-6-18",
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