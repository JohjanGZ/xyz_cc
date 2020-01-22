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
        $("#ventana").load(ruta+'2-1-19/index.php', 
        {
        next: "Page_20()", 
        procesar:"result_tipo_2_1_19()",
        titulo:"<center><h5><span>Lee</span> el poema, luego <span>arrastra</span> la palabra que complete la rima.</h5></center>",
        restaurar:"start_19()",
        dir:ruta,
        cod: "2-1-19",
        nota:cal
        }
        );
        return false;  
    };
    function start_20(){
        $("#ventana").load(ruta+'2-1-20/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_1_20()",
        titulo:"<center><h5><span>Elige</span> la palabra que rime con el verso.</h5></center>",
        restaurar:"start_20()",
        dir:ruta,
        cod: "2-1-20",
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