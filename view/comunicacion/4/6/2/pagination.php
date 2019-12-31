<script type="text/javascript">
   function Page_4(){
        start_4();
        inicio();
        count = 3;
    }
   function  Page_5(){
        start_5();
        inicio();
         count = 3;
    }
    function  Page_6(){
        start_6();
        inicio();
         count = 3;
    }

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    function start_4(){
        $("#ventana").load(ruta+'4-6-4/index.php', 
        {
        next: "Page_5()", 
        procesar:"result_tipo_4_6_4()",
        titulo:"<center><h5><span>Completa</span> las oraciones con las palabras homófonas del recuadro.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "4-6-4",
        nota:cal
        }
        );
        return false;  
    };
    function start_5(){
        $("#ventana").load(ruta+'4-6-5/index.php', 
        {
        next: "Page_6()", 
        procesar:"result_tipo_4_6_5()",
        titulo:"<center><h5>Completa los espacios en blanco con una de las dos palabras homófonas que aparaceren.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "4-6-5",
        nota:cal
        }
        );
        return false;  
    };
    function start_6(){
        $("#ventana").load(ruta+'4-6-6/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_4_6_6()",
        titulo:"<center><h5><span>Relaciona</span> según las palabras homófonas que correspondan.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "4-6-6",
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