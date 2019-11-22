<script type="text/javascript">
    function  Page_16(){
        start_16();
        inicio();
         count = 3;
    }
   function Page_17(){
        start_17();
        inicio();
        count = 3;
    }
    var cant=2;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_16(){   
        $("#ventana").load(ruta+'1-8-16/index.php', 
        { 
        next: "Page_17()", 
        procesar:"result_tipo_1_8_16()",
        titulo:"<center><h5><span>Ordena</span> las siguientes sílabas y <span>forma</span> las palabras.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "1-8-16",
        nota:cal
        }          
        );
        return false;
    };
    function start_17(){   
        $("#ventana").load(ruta+'1-8-17/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_8_17()",
        titulo:"<center><h5><span>Completa</span> las palabras con las sílabas <i>gla, gle, gli, glo, glu</i>.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "1-8-17",
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