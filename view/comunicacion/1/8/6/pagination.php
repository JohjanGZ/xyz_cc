<script type="text/javascript">
    
    function Page_12(){
        start_12();
        inicio();
        count = 3;
    }
    function Page_13(){
        start_13();
        inicio();
        count = 3;
    }

   
    var cant=2;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    function start_12(){   
        $("#ventana").load(ruta+'1-8-12/index.php', 
        { 
        next: "Page_13()", 
        procesar:"result_tipo_1_8_12()",
        titulo:"<center><h5><span>Arrastra</span> los nombres de las siguientes imágenes: </h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "1-8-12",
        nota:cal
        }          
        );
        return false;
    };
    function start_13(){   
        $("#ventana").load(ruta+'1-8-13/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_8_13()",
        titulo:"<center><h5><span>Completa</span> las oraciones con las palabras del tablero.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "1-8-13",
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