<script type="text/javascript">
   function Page_10(){
        start_10();
        inicio();
        count = 3;
    }
    function Page_11(){
        start_11();
        inicio();
        count = 3;
    }
    function Page_12(){
        start_12();
        inicio();
        count = 3;
    }
    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_10(){
        $("#ventana").load(ruta+'5-4-10/index.php', 
        {
        next: "Page_11()", 
        procesar:"result_tipo_5_4_10()",
        titulo:"<center><h5><span>Relaciona</span> los conceptos con sus definiciones o características según corresponda.</h5></center>",
        restaurar:"start_10",
        dir:ruta,
        cod: "5-4-10",
        nota:cal
        }
        );
        return false;  
    };
    function start_11(){
        $("#ventana").load(ruta+'5-4-11/index.php', 
        {
        next: "Page_12()", 
        procesar:"result_tipo_5_4_11()",
        titulo:"<center><h5><span>Analiza</span> los enunciados y <span>selecciona</span> la alternativa correcta.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "5-4-11",
        nota:cal
        }
        );
        return false;  
    };
    function start_12(){
        $("#ventana").load(ruta+'5-4-12/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_5_4_12()",
        titulo:"<center><h5><span>Completa</span> los enunciados con las palabras adecuadas.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "5-4-12",
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