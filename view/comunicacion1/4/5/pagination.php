<script type="text/javascript">
    function  Page_28(){
        start_28();
        inicio();
         count = 3;
    }
   function Page_29(){
        start_29();
        inicio();
        count = 3;
    }
    function  Page_30(){
        start_30();
        inicio();
         count = 3;
    }
   function Page_31(){
        start_31();
        inicio();
        count = 3;
    }
    function  Page_32(){
        start_32();
        inicio();
         count = 3;
    }
   function Page_33(){
        start_33();
        inicio();
        count = 3;
    }
   
    var cant=6;
    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_28(){   
        $("#ventana").load(ruta+'1-4-28/index.php', 
        { 
        next: "Page_29()", 
        procesar:"result_tipo_1_4_28()",
        titulo:"<center><h5><span class='ftitulo'>Separa</span> las sílabas de estas palabras.</h5></center>",
        restaurar:"start_28()",
        dir:ruta,
        cod: "1-4-28",
        nota:cal
        }          
        );
        return false;
    };
    function start_29(){   
        $("#ventana").load(ruta+'1-4-29/index.php', 
        { 
        next: "Page_30()", 
        procesar:"result_tipo_1_4_29()",
        titulo:"<center><h5><span class='ftitulo'>Escribe</span> el nombre de cada imagen.</h5></center>",
        restaurar:"start_29()",
        dir:ruta,
        cod: "1-4-29",
        nota:cal
        }          
        );
        return false;
    };
    function start_30(){   
        $("#ventana").load(ruta+'1-4-30/index.php', 
        { 
        next: "Page_31()", 
        procesar:"result_tipo_1_4_30()",
        titulo:"<center><h5><span class='ftitulo'>Relaciona</span> cada nombre con la imagen que le corresponde.</h5></center>",
        restaurar:"start_30()",
        dir:ruta,
        cod: "1-4-30",
        nota:cal
        }          
        );
        return false;
    };
    function start_31(){   
        $("#ventana").load(ruta+'1-4-31/index.php', 
        { 
        next: "Page_32()", 
        procesar:"result_tipo_1_4_31()",
        titulo:"<center><h5><span class='ftitulo'>Relaciona</span> cada nombre con la imagen que le corresponde.</h5></center>",
        restaurar:"start_31()",
        dir:ruta,
        cod: "1-4-31",
        nota:cal
        }          
        );
        return false;
    };
    function start_32(){   
        $("#ventana").load(ruta+'1-4-32/index.php', 
        { 
        next: "Page_33()", 
        procesar:"result_tipo_1_4_32()",
        titulo:"<center><h5><span class='ftitulo'>Completa</span> las oraciones con los nombres de los dibujos.</h5></center>",
        restaurar:"start_32()",
        dir:ruta,
        cod: "1-4-32",
        nota:cal
        }          
        );
        return false;
    };
    function start_33(){   
        $("#ventana").load(ruta+'1-4-33/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_4_33()",
        titulo:"<center><h5><span class='ftitulo'>Completa</span> las oraciones con los nombres de los dibujos.</h5></center>",
        restaurar:"start_33()",
        dir:ruta,
        cod: "1-4-33",
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