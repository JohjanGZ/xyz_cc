<script type="text/javascript">
    function  Page_61(){
        start_61();
        inicio();
         count = 3;
    }
    function  Page_62(){
        start_62();
        inicio();
         count = 3;
    }
    function  Page_63(){
        start_63();
        inicio();
         count = 3;
    }
    function  Page_64(){
        start_64();
        inicio();
         count = 3;
    }
    function  Page_65(){
        start_65();
        inicio();
         count = 3;
    }
    var cant=5;
    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_61(){   
        $("#ventana").load(ruta+'1-3-61/index.php', 
        { 
        next: "Page_62()", 
        procesar:"result_tipo_1_3_61()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la figura que no pertenece al grupo</h5></center>",
        restaurar:"start_61()",
        dir:ruta,
        cod: "1-3-61",
        nota:cal
        }          
        );
        return false;
    };
    function start_62(){   
        $("#ventana").load(ruta+'1-3-62/index.php', 
        { 
        next: "Page_63()", 
        procesar:"result_tipo_1_3_62()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la figura que no pertenece al grupo</h5></center>",
        restaurar:"start_62()",
        dir:ruta,
        cod: "1-3-62",
        nota:cal
        }          
        );
        return false;
    };
    function start_63(){   
        $("#ventana").load(ruta+'1-3-63/index.php', 
        { 
        next: "Page_64()", 
        procesar:"result_tipo_1_3_63()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la figura que no pertenece al grupo</h5></center>",
        restaurar:"start_63()",
        dir:ruta,
        cod: "1-3-63",
        nota:cal
        }          
        );
        return false;
    };
    function start_64(){   
        $("#ventana").load(ruta+'1-3-64/index.php', 
        { 
        next: "Page_65()", 
        procesar:"result_tipo_1_3_64()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la figura que no pertenece al grupo</h5></center>",
        restaurar:"start_64()",
        dir:ruta,
        cod: "1-3-64",
        nota:cal
        }          
        );
        return false;
    };
    function start_65(){   
        $("#ventana").load(ruta+'1-3-65/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_3_65()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la palabra que no pertenece al grupo</h5></center>",
        restaurar:"start_65()",
        dir:ruta,
        cod: "1-3-65",
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