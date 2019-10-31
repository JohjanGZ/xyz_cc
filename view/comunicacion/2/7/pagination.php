<script type="text/javascript">
   function Page_24(){
        start_24();
        inicio();
        count = 3;
    }
   function  Page_25(){
        start_25();
        inicio();
         count = 3;
    }
   function Page_26(){
        start_26();
        inicio();
         count = 3;
    }
    function  Page_27(){
        start_27();
        inicio();
         count = 3;
    }
    function Page_28(){
        start_28();
        inicio();
         count = 3;
    }
    function  Page_29(){
        start_29();
        inicio();
         count = 3;
    }

    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_24(){
        $("#ventana").load(ruta+'1-2-24/index.php', 
        {
        next: "Page_25()", 
        procesar:"result_tipo_1_2_24()",
        /*titulo:"<center><h5><span class='ftitulo'>Encierra</span> con un círculo las sílabas <span class='ftitulo'>da-, de-, di-, do-, du-</span> en las siguientes palabras:.</h5></center>",*/
        restaurar:"start_24()",
        dir:ruta,
        cod: "1-2-24",
        nota:cal
        }
        );
        return false;  
    };
    function start_25(){
        $("#ventana").load(ruta+'1-2-25/index.php', 
        { 
        next: "Page_26()", 
        procesar:"result_tipo_1_2_25()",
        titulo:"<center><h5><span class='ftitulo'>Lee </span>la siguiente pregunta y<span class='ftitulo'> marca.</span> la respuesta correcta.<br>¿Qué día es la revisión medica?</h5></center>",
        restaurar:"start_25()",
        dir:ruta,
        cod: "1-2-25",
        nota:cal
        }
        );
        return false;
    };
    function start_26(){   
        $("#ventana").load(ruta+'1-2-26/index.php', 
        { 
        next: "Page_27()", 
        procesar:"result_tipo_1_2_26()",
        titulo:"<center><h5><span class='ftitulo'>Observa </span>las imagen anterior y <span class='ftitulo'>determina</span>, ¿qué haran los médicos? luego <span class='ftitulo'>marca </span> según corresponde.</h5></center>",
        restaurar:"start_26()",
        dir:ruta,
        cod: "1-2-26",
        nota:cal
        }          
        );
        return false;
    };
    function start_27(){   
        $("#ventana").load(ruta+'1-2-27/index.php', 
        { 
        next: "Page_28()", 
        procesar:"result_tipo_1_2_27()",
        titulo:"<center><h5><span class='ftitulo'>Investiga </span>y luego <span class='ftitulo'>selecciona </span>. ¿como se llaman los médicos que se especializan en atender niños?</h5></center>",
        restaurar:"start_27()",
        dir:ruta,
        cod: "1-2-27",
        nota:cal
        }          
        );
        return false;
    };
    function start_28(){   
        $("#ventana").load(ruta+'1-2-28/index.php', 
        { 
        next: "Page_29()", 
        procesar:"result_tipo_1_2_28()",
        titulo:"<center><h5><span class='ftitulo'>Observa </span>las imagen anterior y <span class='ftitulo'>determina</span>, ¿qué haran los médicos? luego <span class='ftitulo'>marca </span> según corresponde.</h5></center>",
        restaurar:"start_28()",
        dir:ruta,
        cod: "1-2-28",
        nota:cal
        }          
        );
        return false;
    };
    function start_29(){   
        $("#ventana").load(ruta+'1-2-29/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_2_29()",
        titulo:"<center><h5><span class='ftitulo'>Investiga </span>y luego <span class='ftitulo'>selecciona </span>. ¿como se llaman los médicos que se especializan en atender niños?</h5></center>",
        restaurar:"start_29()",
        dir:ruta,
        cod: "1-2-29",
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