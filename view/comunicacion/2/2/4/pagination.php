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
    function Page_11(){
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
        $("#ventana").load(ruta+'2-2-9/index.php', 
        {
        next: "Page_10()", 
        procesar:"result_tipo_2_2_9()",
        titulo:"<center><h5><span>Separa</span> en sílabas los nombres de las siguientes figuras.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "2-2-9",
        nota:cal
        }
        );
        return false;  
    };
    function start_10(){
        $("#ventana").load(ruta+'2-2-10/index.php', 
        {
        next: "Page_11()", 
        procesar:"result_tipo_2_2_10()",
        titulo:"<center><h5><span>Señala</span> la sílaba tónica.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "2-2-10",
        nota:cal
        }
        );
        return false;  
    };
    function start_11(){
        $("#ventana").load(ruta+'2-2-11/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_2_11()",
        titulo:"<center><h5><span>Arrastra</span> las siguientes sílabas en la fila que corresponda tomando en cuenta que las casillas sombreadas corresponden a la sílaba tónica.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "2-2-11",
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