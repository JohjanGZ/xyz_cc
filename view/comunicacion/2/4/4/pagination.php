<script type="text/javascript">
    
   function Page_7(){
        start_7();
        inicio();
        count = 3;
    }
    function Page_8(){
        start_8();
        inicio();
        count = 3;
    }
    function Page_9(){
        start_9();
        inicio();
        count = 3;
    }
 
    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_7(){
        $("#ventana").load(ruta+'2-4-7/index.php', 
        {
        next: "Page_8()", 
        procesar:"result_tipo_2_4_7()",
        titulo:"<center><h5><span>Lee</span> los refranes y <span>únelos</span> con su respectiva explicación.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "2-4-7",
        nota:cal
        }
        );
        return false;  
    };
    function start_8(){
        $("#ventana").load(ruta+'2-4-8/index.php', 
        {
        next: "Page_9()", 
        procesar:"result_tipo_2_4_8()",
        titulo:"<center><h5><span>Relaciona</span> cada frase con su significado.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "2-4-8",
        nota:cal
        }
        );
        return false;  
    };
    function start_9(){
        $("#ventana").load(ruta+'2-4-9/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_4_9()",
        titulo:"<center><h5><span>Selecciona</span> el significado de las siguientes frases.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "2-4-9",
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