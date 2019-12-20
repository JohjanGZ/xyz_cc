<script type="text/javascript">

   function  Page_8(){
        start_8();
        inicio();
         count = 3;
    }
    function Page_9(){
        start_9();
        inicio();
        count = 3;
    }
    function Page_10(){
        start_10();
        inicio();
        count = 3;
    }

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

  
    function start_8(){
        $("#ventana").load(ruta+'4-2-8/index.php', 
        {
        next: "Page_9()", 
        procesar:"result_tipo_4_2_8()",
        titulo:"<center><h5><span>Selecciona</span> la palabra grave de cada caso.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "4-2-8",
        nota:cal
        }
        );
        return false;  
    };
    function start_9(){
        $("#ventana").load(ruta+'4-2-9/index.php', 
        {
        next: "Page_10()", 
        procesar:"result_tipo_4_2_9()",
        titulo:"<center><h5><span>Arrastra</span> al recuadro las palabras que sean graves.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "4-2-9",
        nota:cal
        }
        );
        return false;  
    };
    function start_10(){
        $("#ventana").load(ruta+'4-2-10/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_2_10()",
        titulo:"<center><h5><span>Selecciona</span> las palabras graves.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "4-2-10",
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