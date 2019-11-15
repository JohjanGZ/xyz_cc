<script type="text/javascript">
    function  Page_39(){
        start_39();
        inicio();
         count = 3;
    }
   function Page_40(){
        start_40();
        inicio();
        count = 3;
    }
    var cant=2;
    var cal= 26/26;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_39(){   
        $("#ventana").load(ruta+'1-5-39/index.php', 
        { 
        next: "Page_40()", 
        procesar:"result_tipo_1_5_39()",
        titulo:"<center><h5><span>Lee</span> las palabras y <span>únelas</span> con los dibujos según corresponda.</h5></center>",
        restaurar:"start_39()",
        dir:ruta,
        cod: "1-5-39",
        nota:cal
        }          
        );
        return false;
    };
    function start_40(){   
        $("#ventana").load(ruta+'1-5-40/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_5_40()",
        titulo:"<center><h5><span>Completa</span> las oraciones.</h5></center>",
        restaurar:"start_40()",
        dir:ruta,
        cod: "1-5-40",
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