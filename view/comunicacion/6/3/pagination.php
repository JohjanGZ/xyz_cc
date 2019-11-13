<script type="text/javascript">   
    function Page_4(){
        start_4();
        inicio();
        count = 3;
    }
    function Page_5(){
        start_5();
        inicio();
        count = 3;
    }
    function Page_6(){
        start_6();
        inicio();
        count = 3;
    }
    function Page_7(){
        start_7();
        inicio();
        count = 3;
    }
    function Page_8(){
        start_8();
        inicio();
        count = 3;
    }
   
   
    var cant=5;
    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_4(){   
        $("#ventana").load(ruta+'1-6-4/index.php', 
        { 
        next: "Page_5()", 
        procesar:"result_tipo_1_6_4()",
        titulo:"<center><h5><span class='ftitulo'>ña - ñe - ñi - ño - ñu</span><br><span class='ftitulo'>Completa</span> el crucigrama y <span class='ftitulo'>descubre</span> la palabra escondida.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "1-6-4",
        nota:cal
        }          
        );
        return false;
    };
    function start_5(){   
        $("#ventana").load(ruta+'1-6-5/index.php', 
        { 
        next: "Page_6()", 
        procesar:"result_tipo_1_6_5()",
        titulo:"<center><h5><span class='ftitulo'>ña - ñe - ñi - ño - ñu</span><br><span class='ftitulo'>Completa</span> el crucigrama y <span class='ftitulo'>descubre</span> la palabra escondida.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "1-6-5",
        nota:cal
        }          
        );
        return false;
    };
    function start_6(){   
        $("#ventana").load(ruta+'1-6-6/index.php', 
        { 
        next: "Page_7()", 
        procesar:"result_tipo_1_6_6()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la sílaba que lleva cada palabra.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "1-6-6",
        nota:cal
        }          
        );
        return false;
    };
    function start_7(){   
        $("#ventana").load(ruta+'1-6-7/index.php', 
        { 
        next: "Page_8()", 
        procesar:"result_tipo_1_6_7()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la sílaba que lleva cada palabra.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "1-6-7",
        nota:cal
        }          
        );
        return false;
    };
    function start_8(){   
        $("#ventana").load(ruta+'1-6-8/index.php', 
        { 
        next: "Page_9()", 
        procesar:"result_tipo_1_6_8()",
        titulo:"<center><h5><span class='ftitulo'>Escribe</span> el nombre de las imágenes.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "1-6-8",
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