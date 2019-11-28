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
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_19(){
        $("#ventana").load(ruta+'2-5-19/index.php', 
        {
        next: "Page_20()", 
        procesar:"result_tipo_2_5_19()",
        titulo:"<center><h5><span>Arrastra</span> las siguientes palabras y <span>ubícalas</span> en el género que les corresponde.</h5></center>",
        restaurar:"start_19()",
        dir:ruta,
        cod: "2-5-19",
        nota:cal
        }
        );
        return false;  
    };
    function start_20(){
        $("#ventana").load(ruta+'2-5-20/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_5_20()",
        titulo:"<center><h5><span>Escribe</span> en el recuadro los artículos 'el' o 'la' según corresponda.</h5></center>",
        restaurar:"start_20()",
        dir:ruta,
        cod: "2-5-20",
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