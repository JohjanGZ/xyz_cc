<script type="text/javascript">

    function  Page_12(){
        start_12();
        inicio();
         count = 3;
    }
    function  Page_13(){
        start_13();
        inicio();
         count = 3;
    }
    function  Page_14(){
        start_14();
        inicio();
         count = 3;
    }

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
  
    function start_12(){
        $("#ventana").load(ruta+'4-7-12/index.php', 
        {
        next: "Page_13()", 
        procesar:"result_tipo_4_7_12()",
        titulo:"<center><h5><span>Lee</span> las siguientes oraciones y <span>arrastra</span> el tipo de coma que se utilizó en cada oración.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "4-7-12",
        nota:cal
        }
        );
        return false;  
    };
    function start_13(){
        $("#ventana").load(ruta+'4-7-13/index.php', 
        {
        next: "Page_14()", 
        procesar:"result_tipo_4_7_13()",
        titulo:"<center><h5><span>Selecciona</span> las oraciones que tengan coma vocativa.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "4-7-13",
        nota:cal
        }
        );
        return false;  
    };
    function start_14(){
        $("#ventana").load(ruta+'4-7-14/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_7_14()",
        titulo:"<center><h5><span>Selecciona</span> las oraciones que tengan coma explicativa.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "4-7-14",
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