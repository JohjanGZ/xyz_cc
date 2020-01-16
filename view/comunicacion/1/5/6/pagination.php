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
    function  Page_14(){
        start_14();
        inicio();
         count = 3;
    }

    var cant=4;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_11(){   
        $("#ventana").load(ruta+'1-5-11/index.php', 
        { 
        next: "Page_12()", 
        procesar:"result_tipo_1_5_11()",
        titulo:"<center><h5><span class='ftitulo'>ña - ñe - ñi - ño - ñu</span><br><span class='ftitulo'>Completa</span> el crucigrama y <span class='ftitulo'>descubre</span> la palabra escondida.</h5></center>",
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
        titulo:"<center><h5><span>Arrastra</span> las figuras al cuadro que tenga la sílaba final de la palabra que representan.</h5></center>",
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
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la sílaba que lleva cada palabra.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "1-5-13",
        nota:cal
        }          
        );
        return false;
    };
    function start_14(){   
        $("#ventana").load(ruta+'1-5-14/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_5_14()",
        titulo:"<center><h5><span class='ftitulo'>Escribe</span> el nombre de las imagenes.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "1-5-14",
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