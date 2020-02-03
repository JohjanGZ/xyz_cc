<script type="text/javascript">

   function  Page_7(){
        start_7();
        inicio();
         count = 3;
    }
    function Page_8(){
        start_8();
        inicio();
        count = 3;
    }
    function Page_9(){
        start_9();
        inicio();
        count = 3;
    }

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

  
    function start_7(){
        $("#ventana").load(ruta+'5-2-7/index.php', 
        {
        next: "Page_8()", 
        procesar:"result_tipo_5_2_7()",
        titulo:"<center><h5><span>Analiza</span> y <span>completa</span> el enunciado con las palabras correspondientes.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "5-2-7",
        nota:cal
        }
        );
        return false;  
    };
    function start_8(){
        $("#ventana").load(ruta+'5-2-8/index.php', 
        {
        next: "Page_9()", 
        procesar:"result_tipo_5_2_8()",
        titulo:"<center><h5><span>Lee</span> el siguiente texto y selecciona los adjetivos.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "5-2-8",
        nota:cal
        }
        );
        return false;  
    };
    function start_9(){
        $("#ventana").load(ruta+'5-2-9/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_5_2_9()",
        titulo:"<center><h5><span>Relaciona</span> con líneas los grados del adjetivo con los enunciados correspondientes.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "5-2-9",
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