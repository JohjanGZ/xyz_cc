<script type="text/javascript">
    
    function Page_lectura_2_7_7_1(){
        start_lectura_2_7_7_1();
        inicio();
        count = 0;
    }
    function Page_21(){
        start_21();
        inicio();
        count = 3;
    }
    function Page_22(){
        start_22();
        inicio();
        count = 3;
    }
    function Page_23(){
        start_23();
        inicio();
        count = 3;
    }
    function Page_24(){
        start_24();
        inicio();
        count = 3;
    }
    function Page_25(){
        start_25();
        inicio();
        count = 3;
    }

    var cant=5;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    function start_lectura_2_7_7_1(){
        $("#ventana").load(ruta+'lectura2-7-7-1/index.php', 
        {
        next: "Page_21()", 
        procesar:"lectura2-2-7-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_2_7_7_1()",
        dir:ruta,
        cod: "lectura2-7-7-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_21(){
        $("#ventana").load(ruta+'2-7-21/index.php', 
        {
        next: "Page_22()", 
        procesar:"result_tipo_2_7_21()",
        titulo:"<center><h5><span>Selecciona</span> los personajes del cuento.</h5></center>",
        restaurar:"start_21()",
        dir:ruta,
        cod: "2-7-21",
        nota:cal
        }
        );
        return false;  
    };
    function start_22(){
        $("#ventana").load(ruta+'2-7-22/index.php', 
        {
        next: "Page_23()", 
        procesar:"result_tipo_2_7_22()",
        titulo:"<center><h5><span>Arrastra</span> las palabras y <span>completa</span> las oraciones del cuento.</span>.</h5></center>",
        restaurar:"start_22()",
        dir:ruta,
        cod: "2-7-22",
        nota:cal
        }
        );
        return false;
    };
    function start_23(){
        $("#ventana").load(ruta+'2-7-23/index.php', 
        {
        next: "Page_24()", 
        procesar:"result_tipo_2_7_23()",
        titulo:"<center><h5><span>Selecciona</span> el objeto que Aladino limpio del polvo.</span>.</h5></center>",
        restaurar:"start_23()",
        dir:ruta,
        cod: "2-7-23",
        nota:cal
        }
        );
        return false;  
    };
    function start_24(){
        $("#ventana").load(ruta+'2-7-24/index.php', 
        {
        next: "Page_25()", 
        procesar:"result_tipo_2_7_24()",
        titulo:"<center><h5><span>Completa</span> las oraciones con las palabras que faltan.</h5></center>",
        restaurar:"start_24()",
        dir:ruta,
        cod: "2-7-24",
        nota:cal
        }
        );
        return false;  
    };
    function start_25(){
        $("#ventana").load(ruta+'2-7-25/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_7_25()",
        titulo:"<center><h5><span>Ubica</span> las palabras en la sopa de letras.</span>.</h5></center>",
        restaurar:"start_25()",
        dir:ruta,
        cod: "2-7-25",
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