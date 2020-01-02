<script type="text/javascript">
   
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
    function Page_19(){
        start_19();
        inicio();
        count = 3;
    }

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    function start_17(){
        $("#ventana").load(ruta+'4-1-17/index.php', 
        {
        next: "Page_18()", 
        procesar:"result_tipo_4_1_17()",
        titulo:"<center><h5><span>Lee</span> los siguientes textos y <span>relaciona</span> cada uno con su tema.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "4-1-17",
        nota:cal
        }
        );
        return false;  
    };
    function start_18(){
        $("#ventana").load(ruta+'4-1-18/index.php', 
        {
        next: "Page_19()", 
        procesar:"result_tipo_4_1_18()",
        titulo:"<center><h5><span>Lee</span> el texto y <span>selecciona</span> el género literario al que pertenece.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "4-1-18",
        nota:cal
        }
        );
        return false;  
    };
    function start_19(){
        $("#ventana").load(ruta+'4-1-19/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_1_19()",
        titulo:"<center><h5><span>Lee</span> el texto y <span>selecciona</span> el género literario al que pertenece.</h5></center>",
        restaurar:"start_19()",
        dir:ruta,
        cod: "4-1-19",
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