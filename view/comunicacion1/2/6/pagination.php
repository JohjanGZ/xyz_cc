<script type="text/javascript">
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
   function Page_22(){
        start_22();
        inicio();
         count = 3;
    }
    function  Page_23(){
        start_23();
        inicio();
         count = 3;
    }

    var cant=4;
    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_20(){
        $("#ventana").load(ruta+'1-2-20/index.php', 
        {
        next: "Page_21()", 
        procesar:"result_tipo_1_2_20()",
        /*titulo:"<center><h5><span class='ftitulo'>Encierra</span> con un círculo las sílabas <span class='ftitulo'>da-, de-, di-, do-, du-</span> en las siguientes palabras:.</h5></center>",*/
        restaurar:"start_20()",
        dir:ruta,
        cod: "1-2-20",
        nota:cal
        }
        );
        return false;  
    };
    function start_21(){
        $("#ventana").load(ruta+'1-2-21/index.php', 
        { 
        next: "Page_22()", 
        procesar:"result_tipo_1_2_21()",
        titulo:"<center><h5><span class='ftitulo'>Lee </span>la siguiente pregunta y<span class='ftitulo'> marca.</span> la respuesta correcta.<br>¿Qué día es la revisión medica?</h5></center>",
        restaurar:"start_21()",
        dir:ruta,
        cod: "1-2-21",
        nota:cal
        }
        );
        return false;
    };
    function start_22(){   
        $("#ventana").load(ruta+'1-2-22/index.php', 
        { 
        next: "Page_23()", 
        procesar:"result_tipo_1_2_22()",
        titulo:"<center><h5><span class='ftitulo'>Observa </span>las imagen anterior y <span class='ftitulo'>determina</span>, ¿qué haran los médicos? luego <span class='ftitulo'>marca </span> según corresponde.</h5></center>",
        restaurar:"start_22()",
        dir:ruta,
        cod: "1-2-22",
        nota:cal
        }          
        );
        return false;
    };
    function start_23(){   
        $("#ventana").load(ruta+'1-2-23/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_2_23()",
        titulo:"<center><h5><span class='ftitulo'>Investiga </span>y luego <span class='ftitulo'>selecciona </span>. ¿como se llaman los médicos que se especializan en atender niños?</h5></center>",
        restaurar:"start_23()",
        dir:ruta,
        cod: "1-2-23",
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