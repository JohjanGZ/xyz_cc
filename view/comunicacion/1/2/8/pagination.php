<script type="text/javascript">
   
    function Page_31(){
        start_31();
        inicio();
         count = 3;
    }
    function  Page_32(){
        start_32();
        inicio();
         count = 3;
    }

    var cant=2;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_31(){   
        $("#ventana").load(ruta+'1-2-31/index.php', 
        { 
        next: "Page_32()", 
        procesar:"result_tipo_1_2_31()",
        titulo:"<center><h5><span class='ftitulo'>Relaciona </span>cada imagen con su nombre respectivo.</h5></center>",
        restaurar:"start_31()",
        dir:ruta,
        cod: "1-2-31",
        nota:cal
        }          
        );
        return false;
    };
    function start_32(){   
        $("#ventana").load(ruta+'1-2-32/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_2_32()",
        titulo:"<center><h5><span class='ftitulo'>Completa </span>las oraciones con las palabras del recuadro.</h5></center>",
        restaurar:"start_32()",
        dir:ruta,
        cod: "1-2-32",
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