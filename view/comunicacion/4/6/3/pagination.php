<script type="text/javascript">
  function  Page_6(){
        start_6();
        inicio();
         count = 3;
    }
    function  Page_7(){
        start_7();
        inicio();
         count = 3;
    }
    function  Page_8(){
        start_8();
        inicio();
         count = 3;
    }
    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_6(){
        $("#ventana").load(ruta+'4-6-6/index.php', 
        { 
        next: "Page_7()", 
        procesar:"result_tipo_4_6_6()",
        titulo:"<center><h5><span>Lee</span> las siguientes oraciones y <span>arrastra</span> el tipo de coma que se utilizó en cada oración.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "4-6-6",
        nota:cal
        }
        );
        return false;
    };
    function start_7(){
        $("#ventana").load(ruta+'4-6-7/index.php', 
        { 
        next: "Page_8()", 
        procesar:"result_tipo_4_6_7()",
        titulo:"<center><h5><span>Selecciona</span> las oraciones que tengan coma vocativa.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "4-6-7",
        nota:cal
        }
        );
        return false;
    };
    function start_8(){
        $("#ventana").load(ruta+'4-6-8/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_4_6_8()",
        titulo:"<center><h5><span>Selecciona</span> las oraciones que tengan coma explicativa.</h5></center>",
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