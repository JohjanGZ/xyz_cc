<script type="text/javascript">
    function Page_lectura_2_6_6_1(){
        start_lectura_2_6_6_1();
        inicio();
        count = 0;
    }
   function Page_19(){
        start_19();
        inicio();
        count = 3;
    }
    function Page_lectura_2_6_6_2(){
        start_lectura_2_6_6_2();
        inicio();
        count = 0;
    }
    function Page_20(){
        start_20();
        inicio();
        count = 3;
    }
    function Page_21(){
        start_21();
        inicio();
        count = 3;
    }
    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_2_6_6_1(){
        $("#ventana").load(ruta+'lectura2-6-6-1/index.php', 
        {
        next: "Page_19()", 
        procesar:"lectura2-2-1-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_2_6_6_1()",
        dir:ruta,
        cod: "lectura2-6-6-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_19(){
        $("#ventana").load(ruta+'2-6-19/index.php', 
        {
        next: "Page_lectura_2_6_6_2()", 
        procesar:"result_tipo_2_6_19()",
        titulo:"<center><h5><span>Observa</span> las imágenes y ordena la secuencia según el texto.</h5></center>",
        restaurar:"start_19()",
        dir:ruta,
        cod: "2-6-19",
        nota:cal
        }
        );
        return false;  
    };
    function start_lectura_2_6_6_2(){
        $("#ventana").load(ruta+'lectura2-6-6-2/index.php', 
        {
        next: "Page_20()", 
        procesar:"lectura2-2-2-2()",
        titulo:"<center><h5><span>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_2_6_6_2()",
        dir:ruta,
        cod: "lectura2-6-6-2",
        nota:cal
        }
        );
        return false;  
    };
    function start_20(){
        $("#ventana").load(ruta+'2-6-20/index.php', 
        {
        next: "Page_21()", 
        procesar:"result_tipo_2_6_20()",
        titulo:"<center><h5><span>Completa</span> la preparación de la ensalada rusa seleccionando las palabras que corresponda. <span>Guíate</span> de las imágenes.</h5></center>",
        restaurar:"start_20()",
        dir:ruta,
        cod: "2-6-20",
        nota:cal
        }
        );
        return false;  
    };
    function start_21(){
        $("#ventana").load(ruta+'2-6-21/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_6_21()",
        titulo:"<center><h5>¿Cómo se prepara la sopa de flores? <span>Une</span> según el orden que corresponda</h5></center>",
        restaurar:"start_21()",
        dir:ruta,
        cod: "2-6-21",
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