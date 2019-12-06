<script type="text/javascript">
   function Page_lectura_3_3_6_1(){
        start_lectura_3_3_6_1();
        inicio();
        count = 0;
    }
   function Page_17(){
        start_17();
        inicio();
        count = 3;
    }
    function  Page_18(){
        start_18();
        inicio();
         count = 3;
    }
    function  Page_19(){
        start_19();
        inicio();
         count = 3;
    }

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_3_3_6_1(){
        $("#ventana").load(ruta+'lectura3-3-6-1/index.php', 
        {
        next: "Page_19()", 
        procesar:"lectura3-3-6-1()",
        titulo:"<center><h5><span>Lee</span> la información de los animales y responde las preguntas.</h5></center>",
        restaurar:"start_lectura_3_3_6_1()",
        dir:ruta,
        cod: "lectura3-3-6-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_17(){
        $("#ventana").load(ruta+'3-3-17/index.php', 
        {
        next: "Page_18()", 
        procesar:"result_tipo_3_3_17()",
        titulo:"<center><h5><span>Observa</span> las imágenes y <span>arrastra</span> las características al lugar donde correspondan.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "3-3-17",
        nota:cal
        }
        );
        return false;  
    };
    function start_18(){
        $("#ventana").load(ruta+'3-3-18/index.php', 
        {
        next: "Page_lectura_3_3_6_1()", 
        procesar:"result_tipo_3_3_18()",
        titulo:"<center><h5><span>Observa</span> las imágenes y <span>arrastra</span> las características al lugar donde correspondan.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "3-3-18",
        nota:cal
        }
        );
        return false;  
    };
    function start_19(){
        $("#ventana").load(ruta+'3-3-19/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_3_3_19()",
        titulo:"<center><h5><span>Marca</span> donde corresponda en el cuadro según sus semejanzas.</h5></center>",
        restaurar:"start_19()",
        dir:ruta,
        cod: "3-3-19",
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