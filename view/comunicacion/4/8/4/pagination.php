<script type="text/javascript">
   
   function Page_9(){
        start_9();
        inicio();
        count = 3;
    }
   function  Page_10(){
        start_10();
        inicio();
         count = 3;
    }

    var cant=2;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_9(){
        $("#ventana").load(ruta+'4-8-9/index.php', 
        {
        next: "Page_10()", 
        procesar:"result_tipo_4_8_9()",
        titulo:"<center><h5><span>Relaciona</span> el sujeto con el predicado correcto en cada caso.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "4-8-9",
        nota:cal
        }
        );
        return false;  
    };
    function start_10(){
        $("#ventana").load(ruta+'4-8-10/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_4_8_10()",
        titulo:"<center><h5><span>Arrastra</span> un sujeto para cada predicado.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "4-8-10",
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