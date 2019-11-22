<script type="text/javascript">
   function Page_10(){
        start_10();
        inicio();
         count = 3;
    }
   function  Page_11(){
        start_11();
        inicio();
         count = 3;
    }


    var cant=2;

    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
   
    function start_10(){
        $("#ventana").load(ruta+'1-1-10/index.php', 
        {
        next: "Page_11()", 
        procesar:"result_tipo_1_1_10()",
        titulo:"<center><h5><span class='ftitulo'>Relaciona</span> las imágenes con la palabra correspondiente.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "1-1-10",
        nota:cal
        }
        );
        return false;  
    };
    function start_11(){
        $("#ventana").load(ruta+'1-1-11/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_1_11()",
        titulo:"<center><h5><span class='ftitulo'>Completa</span> las palabras con pa-, pe-, pi- ,po- , pu-</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "1-1-11",
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