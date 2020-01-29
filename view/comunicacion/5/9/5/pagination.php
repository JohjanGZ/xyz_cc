<script type="text/javascript">
   function Page_13(){
        start_13();
        inicio();
        count = 3;
    }
   function  Page_14(){
        start_14();
        inicio();
         count = 3;
    }
    function Page_15(){
        start_15();
        inicio();
        count = 3;
    }

    var cant=4;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_13(){
        $("#ventana").load(ruta+'5-9-13/index.php', 
        {
        next: "Page_14()", 
        procesar:"result_tipo_5_9_13()",
        titulo:"<center><h5><span>Lee</span> el siguiente texto y <span>selecciona</span> las palabras que estén incorrectamente escritas.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "5-9-13",
        nota:cal
        }
        );
        return false;  
    };
    function start_14(){
        $("#ventana").load(ruta+'5-9-14/index.php', 
        { 
        next: "Page_15()", 
        procesar:"result_tipo_5_9_14()",
        titulo:"<center><h5><span>Selecciona</span> las alternativas que completan la palabra adecuadamente.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "5-9-14",
        nota:cal
        }
        );
        return false;
    };
    function start_15(){
        $("#ventana").load(ruta+'5-9-15/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_5_9_15()",
        titulo:"<center><h5><span>Selecciona</span> las alternativas que no representan las excepciones de la “c”.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "5-9-15",
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