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
        $("#ventana").load(ruta+'1-3-16/index.php', 
        { 
        next: "Page_17()", 
        procesar:"result_tipo_1_3_16()",
        titulo:"<center><h5><span class='ftitulo'>Relaciona</span> cada animal con su respectiva forma de desplazarse.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "1-3-16",
        nota:cal
        }          
        );
        return false;
    };

    function start_17(){   
        $("#ventana").load(ruta+'1-3-17/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_3_17()",
        titulo:"<center><h5><span class='ftitulo'>Relaciona</span> cada animal con su respectiva forma de desplazarse.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "1-3-17",
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