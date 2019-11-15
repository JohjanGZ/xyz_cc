<script type="text/javascript">
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
    function  Page_13(){
        start_13();
        inicio();
         count = 3;
    }
    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_11(){   
        $("#ventana").load(ruta+'1-5-11/index.php', 
        { 
        next: "Page_12()", 
        procesar:"result_tipo_1_5_11()",
        titulo:"<center><h5><span class='ftitulo'>Escribe</span> los nombres de las siguientes imágenes. Todas ellas llevan <span>Z</span></h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "1-5-11",
        nota:cal
        }          
        );
        return false;
    };
    function start_12(){   
        $("#ventana").load(ruta+'1-5-12/index.php', 
        { 
        next: "Page_13()", 
        procesar:"result_tipo_1_5_12()",
        titulo:"<center><h5><span class='ftitulo'>Escribe</span> los nombres de las siguientes imágenes. Todas ellas llevan <span>Z</span>.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "1-5-12",
        nota:cal
        }          
        );
        return false;
    };
    function start_13(){   
        $("#ventana").load(ruta+'1-5-13/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_5_13()",
        titulo:"<center><h5><span class='ftitulo'>Completa</span> las oraciones con las palabras del recuadro.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "1-5-13",
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