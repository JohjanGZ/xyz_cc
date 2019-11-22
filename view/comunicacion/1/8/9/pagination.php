<script type="text/javascript">
    function  Page_18(){
        start_18();
        inicio();
         count = 3;
    }
   function Page_19(){
        start_19();
        inicio();
        count = 3;
    }
    var cant=2;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_18(){   
        $("#ventana").load(ruta+'1-8-18/index.php', 
        { 
        next: "Page_19()", 
        procesar:"result_tipo_1_8_18()",
        titulo:"<center><h5><span>Completa</span> los espacios en blanco con los conectores del recuadro.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "1-8-18",
        nota:cal
        }          
        );
        return false;
    };
    function start_19(){   
        $("#ventana").load(ruta+'1-8-19/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_8_19()",
        titulo:"<center><h5><span>Completa</span> correctamente las oraciones con las palabras del recuadro.</h5></center>",
        restaurar:"start_19()",
        dir:ruta,
        cod: "1-8-19",
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