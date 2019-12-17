<script type="text/javascript">
   
    function Page_7(){
        start_7();
        inicio();
        count = 3;
    }
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
   function  Page_10(){
        start_10();
        inicio();
         count = 3;
    }

    var cant=4;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
    // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_7(){
        $("#ventana").load(ruta+'3-0-7/index.php', 
        { 
        next: "Page_8()", 
        procesar:"result_tipo_3_0_7()",
        titulo:"<center><h5><span>Arrastra</span> cada sílaba en el recuadro donde corresponde para completar las palabras.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "3-0-7",
        nota:cal
        }
        );
        return false;
    };
    function start_8(){
        $("#ventana").load(ruta+'3-0-8/index.php', 
        { 
        next: "Page_9()", 
        procesar:"result_tipo_3_0_8()",
        titulo:"<center><h5><span>Separa</span> en sílabas el nombre de las siguientes imágenes.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "3-0-8",
        nota:cal
        }
        );
        return false;
    };
    function start_9(){
        $("#ventana").load(ruta+'3-0-9/index.php', 
        { 
        next: "Page_10()", 
        procesar:"result_tipo_3_0_9()",
        titulo:"<center><h5><span>Selecciona</span> el número de casillas que tiene cada palabra.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "3-0-9",
        nota:cal
        }
        );
        return false;
    };
    function start_10(){
        $("#ventana").load(ruta+'3-0-10/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_3_0_10()",
        titulo:"<center><h5><span>Ordena</span> las sílabas para formar la palabra correctamente.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "3-0-10",
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