<script type="text/javascript">

    function  Page_9(){
        start_9();
        inicio();
         count = 3;
    }
    function  Page_10(){
        start_10();
        inicio();
         count = 3;
    }
    function  Page_11(){
        start_11();
        inicio();
         count = 3;
    }

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
  
    function start_9(){
        $("#ventana").load(ruta+'4-7-9/index.php', 
        {
        next: "Page_10()", 
        procesar:"result_tipo_4_7_9()",
        titulo:"<center><h5><span>Relaciona</span> las clases de oraciones con sus respectivos ejemplos.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "4-7-9",
        nota:cal
        }
        );
        return false;  
    };
    function start_10(){
        $("#ventana").load(ruta+'4-7-10/index.php', 
        {
        next: "Page_11()", 
        procesar:"result_tipo_4_7_10()",
        titulo:"<center><h5><span>Lee</span> el enunciado y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "4-7-10",
        nota:cal
        }
        );
        return false;  
    };
    function start_11(){
        $("#ventana").load(ruta+'4-7-11/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_7_11()",
        titulo:"<center><h5><span>Lee</span> el enunciado y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "4-7-11",
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