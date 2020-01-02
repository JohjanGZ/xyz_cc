<script type="text/javascript">
   function Page_lectura_4_8_5_1(){
        start_lectura_4_8_5_1();
        inicio();
        count = 0;
    }
   function  Page_11(){
        start_11();
        inicio();
         count = 3;
    }

    var cant=1;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_4_8_5_1(){
        $("#ventana").load(ruta+'lectura4-8-5-1/index.php', 
        {
        next: "Page_11()", 
        procesar:"lectura1-1-1-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y <span>contesta</span> las preguntas.</h5></center>",
        restaurar:"start_lectura_4_8_5_1()",
        dir:ruta,
        cod: "lectura4-8-5-1",
        nota:cal
        }
        );
        return false;  
    };
    
    function start_11(){
        $("#ventana").load(ruta+'4-8-11/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_4_8_11()",
        titulo:"<center><h5><span>Arrastra</span> un sujeto para cada predicado.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "4-8-11",
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