<script type="text/javascript">
    
   
    function Page_9(){
        start_9();
        inicio();
        count = 3;
    }
    function Page_10(){
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
        $("#ventana").load(ruta+'1-7-9/index.php', 
        { 
        next: "Page_10()", 
        procesar:"result_tipo_1_7_9()",
        titulo:"<center><h5><span>Selecciona</span> el sonido de la sílaba que pertenece al nombre de cada imagen.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "1-7-9",
        nota:cal
        }          
        );
        return false;
    };
    function start_10(){   
        $("#ventana").load(ruta+'1-7-10/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_7_10()",
        titulo:"<center><h5><span>Selecciona</span> el sonido de la sílaba que pertenece al nombre de cada imagen.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "1-7-10",
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