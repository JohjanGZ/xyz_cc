<script type="text/javascript">
    function Page_19(){
        start_19();
        inicio();
        count = 3;
    }
    function  Page_20(){
        start_20();
        inicio();
         count = 3;
    }
    function  Page_21(){
        start_21();
        inicio();
         count = 3;
    }

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_19(){
        $("#ventana").load(ruta+'3-1-19/index.php', 
        { 
        next: "Page_20()", 
        procesar:"result_tipo_3_1_19()",
        titulo:"<center><h5><span>Lee</span> los sustativos y <span>arrástralos</span> a donde correspondan.</h5></center>",
        restaurar:"start_19()",
        dir:ruta,
        cod: "3-1-19",
        nota:cal
        }
        );
        return false;
    };
    function start_20(){
        $("#ventana").load(ruta+'3-1-20/index.php', 
        { 
        next: "Page_21()", 
        procesar:"result_tipo_3_1_20()",
        titulo:"<center><h5><span>Clasifica</span> los siguientes sustantivos en <i>propios</i> y <i>comunes</i>.</h5></center>",
        restaurar:"start_20()",
        dir:ruta,
        cod: "3-1-20",
        nota:cal
        }
        );
        return false;
    };
    function start_21(){
        $("#ventana").load(ruta+'3-1-21/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_3_1_21()",
        titulo:"<center><h5><span>Arrastra</span> el artículo que corresponda con la imagen.</h5></center>",
        restaurar:"start_21()",
        dir:ruta,
        cod: "3-1-21",
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