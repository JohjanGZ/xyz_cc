<script type="text/javascript">
    
   
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
   
    var cant=2;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    
    function start_8(){   
        $("#ventana").load(ruta+'1-8-8/index.php', 
        { 
        next: "Page_9()", 
        procesar:"result_tipo_1_8_8()",
        titulo:"<center><h5><span>Selecciona</span> el sonido de la sílaba que contiene el nombre de las siguientes imágenes:</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "1-8-8",
        nota:cal
        }          
        );
        return false;
    };
    function start_9(){   
        $("#ventana").load(ruta+'1-8-9/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_8_9()",
        titulo:"<center><h5><span>Observa</span> y <span>completa</span> con <i>gl</i>  o  <i>gr</i>.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "1-8-9",
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