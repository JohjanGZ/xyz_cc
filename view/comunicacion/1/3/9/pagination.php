<script type="text/javascript">
    function  Page_66(){
        start_66();
        inicio();
         count = 3;
    }
    function  Page_67(){
        start_67();
        inicio();
         count = 3;
    }
    function  Page_68(){
        start_68();
        inicio();
         count = 3;
    }
    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_66(){   
        $("#ventana").load(ruta+'1-3-66/index.php', 
        { 
        next: "Page_67()", 
        procesar:"result_tipo_1_3_66()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> los adjetivos que corresponden al gato.</h5></center>",
        restaurar:"start_66()",
        dir:ruta,
        cod: "1-3-66",
        nota:cal
        }          
        );
        return false;
    };
    function start_67(){   
        $("#ventana").load(ruta+'1-3-67/index.php', 
        { 
        next: "Page_68()", 
        procesar:"result_tipo_1_3_67()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> los adjetivos.</h5></center>",
        restaurar:"start_67()",
        dir:ruta,
        cod: "1-3-67",
        nota:cal
        }          
        );
        return false;
    };
    function start_68(){   
        $("#ventana").load(ruta+'1-3-68/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_3_68()",
        titulo:"<center><h5><span class='ftitulo'>Relaciona</span> las expresiones de cada persona.</h5></center>",
        restaurar:"start_68()",
        dir:ruta,
        cod: "1-3-68",
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