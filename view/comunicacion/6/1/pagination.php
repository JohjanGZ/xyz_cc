<script type="text/javascript">
    function  Page_90(){
        start_90();
        inicio();
         count = 3;
    }
    function  Page_91(){
        start_91();
        inicio();
         count = 3;
    } 
   
    var cant=5;
    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_90(){   
        $("#ventana").load(ruta+'1-6-90/index.php', 
        { 
        next: "Page_91()", 
        procesar:"result_tipo_1_6_90()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la respuesta correcta. <br> ¿Como se llama el pollito?</h5></center>",
        restaurar:"start_90()",
        dir:ruta,
        cod: "1-6-90",
        nota:cal
        }          
        );
        return false;
    };
    function start_91(){   
        $("#ventana").load(ruta+'1-6-91/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_6_91()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la respuesta correcta. <br> ¿A quién buscaba Llito?</h5></center>",
        restaurar:"start_91()",
        dir:ruta,
        cod: "1-6-91",
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