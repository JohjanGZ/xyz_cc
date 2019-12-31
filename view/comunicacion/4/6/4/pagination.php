<script type="text/javascript">
  
    function  Page_8(){
        start_8();
        inicio();
         count = 3;
    }

    var cant=1;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    function start_8(){
        $("#ventana").load(ruta+'4-6-8/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_4_6_8()",
        titulo:"<center><h5><span>Arrastra</span> las palabras y <span>completa</span> el poema.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "4-6-8",
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