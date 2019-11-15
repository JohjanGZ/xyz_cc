<script type="text/javascript">
   function Page_18(){
        start_18();
        inicio();
        count = 3;
    }
   function  Page_19(){
        start_19();
        inicio();
         count = 3;
    }
   function Page_20(){
        start_20();
        inicio();
         count = 3;
    }
    function  Page_21(){
        start_21();
        inicio();
         count = 3;
    }

    var cant=4;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_18(){
        $("#ventana").load(ruta+'1-3-18/index.php', 
        {
        next: "Page_19()", 
        procesar:"result_tipo_1_3_18()",
        titulo:"<center><h5><span class='ftitulo'>Pronuncia</span> en voz alta cada sílaba y <span class='ftitulo'>encierra</span> las sílabas según el código.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "1-3-18",
        nota:cal
        }
        );
        return false;  
    };
    function start_19(){
        $("#ventana").load(ruta+'1-3-19/index.php', 
        { 
        next: "Page_20()", 
        procesar:"result_tipo_1_3_19()",
        titulo:"<center><h5><span class='ftitulo'>Elige</span> el recuadro donde se encuentra la sìlaba <span class='ftitulo'>ra</span> o <span class='ftitulo'>rro</span> en cada caso.</h5></center>",
        restaurar:"start_19()",
        dir:ruta,
        cod: "1-3-19",
        nota:cal
        }
        );
        return false;
    };
    function start_20(){   
        $("#ventana").load(ruta+'1-3-20/index.php', 
        { 
        next: "Page_21()", 
        procesar:"result_tipo_1_3_20()",
        titulo:"<center><h5><span class='ftitulo'>Completa</span> con <span class='ftitulo'>ba, bu, bo, be</span>.</h5></center>",
        restaurar:"start_20()",
        dir:ruta,
        cod: "1-3-20",
        nota:cal
        }          
        );
        return false;
    };
    function start_21(){   
        $("#ventana").load(ruta+'1-3-21/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_3_21()",
        titulo:"<center><h5><span class='ftitulo'>Completa</span> con <span class='ftitulo'>ba, bu, bo, be</span>.</h5></center>",
        restaurar:"start_21()",
        dir:ruta,
        cod: "1-3-21",
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