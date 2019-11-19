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

    var cant=4;

    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_10(){
        $("#ventana").load(ruta+'1-2-10/index.php', 
        {
        next: "Page_11()", 
        procesar:"result_tipo_1_2_10()",
        titulo:"<center><h5><span class='ftitulo'>Relaciona</span> cada imagen con su respectiva palabra.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "1-2-10",
        nota:cal
        }
        );
        return false;  
    };
    function start_11(){
        $("#ventana").load(ruta+'1-2-11/index.php', 
        { 
        next: "Page_12()", 
        procesar:"result_tipo_1_2_11()",
        titulo:"<center><h5><span class='ftitulo'>Completa</span> con ta-, te-, ti-, to-, tu-.</center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "1-2-11",
        nota:cal
        }
        );
        return false;
    };
    function start_12(){   
        $("#ventana").load(ruta+'1-2-12/index.php', 
        { 
        next: "Page_13()", 
        procesar:"result_tipo_1_2_12()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra</span> las sílabas y <span>forma</span> los nombres de las ilustraciones.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "1-2-12",
        nota:cal
        }          
        );
        return false;
    };
    function start_13(){   
        $("#ventana").load(ruta+'1-2-13/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_2_13()",
        titulo:"<center><h5><span class='ftitulo'>Ordena</span> las palabras y <span>forma</span> oraciones.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "1-2-13",
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