<script type="text/javascript">
    
    function Page_19(){
        start_19();
        inicio();
        count = 3;
    }
    function Page_20(){
        start_20();
        inicio();
        count = 3;
    }

   
    var cant=2;
    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    function start_19(){   
        $("#ventana").load(ruta+'1-7-19/index.php', 
        { 
        next: "Page_20()", 
        procesar:"result_tipo_1_7_19()",
        titulo:"<center><h5><span>Ordena</span> las palabras y <span>forma</span> las oraciones.</h5></center>",
        restaurar:"start_19()",
        dir:ruta,
        cod: "1-7-19",
        nota:cal
        }          
        );
        return false;
    };
    function start_20(){   
        $("#ventana").load(ruta+'1-7-20/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_7_20()",
        titulo:"<center><h5><span>Ordena</span> las siguientes sílabas y <span>forma</span> las palabras.</h5></center>",
        restaurar:"start_20()",
        dir:ruta,
        cod: "1-7-20",
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