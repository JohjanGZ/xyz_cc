<script type="text/javascript">
   
    function  Page_20(){
        start_20();
        inicio();
         count = 3;
    }
    function  Page_21(){
        start_21();
        inicio();
         count = 3;
    }

    var cant=2;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
    // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_20(){
        $("#ventana").load(ruta+'4-5-20/index.php', 
        {
        next: "Page_21()", 
        procesar:"result_tipo_4_5_20()",
        titulo:"<center><h5><span>Selecciona</span> los verbos terminados en <i>-aba</i> de cada imagen.</h5></center>",
        restaurar:"start_20()",
        dir:ruta,
        cod: "4-5-20",
        nota:cal
        }
        );
        return false;  
    };
    function start_21(){
        $("#ventana").load(ruta+'4-5-21/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_4_5_21()",
        titulo:"<center><h5><span>Completa</span> las oraciones con los verbos respectivos.</h5></center>",
        restaurar:"start_21()",
        dir:ruta,
        cod: "4-5-21",
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