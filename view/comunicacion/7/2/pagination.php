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
   
    var cant=2;
    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_7(){   
        $("#ventana").load(ruta+'1-7-7/index.php', 
        { 
        next: "Page_8()", 
        procesar:"result_tipo_1_7_7()",
        titulo:"<center><h5><span>Escribe</span> cuantas manos izquierdas y cuantas manos derechas hay.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "1-7-7",
        nota:cal
        }          
        );
        return false;
    };
    function start_8(){   
        $("#ventana").load(ruta+'1-7-8/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_7_8()",
        titulo:"<center><h5><span>Escribe</span> cuantos pies izquierdos y cuantos pies derechos hay.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "1-7-8",
        nota:cal
        }          
        );
        return false;
    };
    function resultado(){
        $("#ventana").load('../../../exercises/resultado/resultado.php');
        return false;
    };
</script>