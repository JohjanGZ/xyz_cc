<script type="text/javascript">
   function Page_1(){
        start_1();
        inicio();
        count = 3;
    }
    function Page_2(){
        start_2();
        inicio();
        count = 3;
    }
    function Page_3(){
        start_3();
        inicio();
        count = 3;
    }
    function Page_4(){
        start_4();
        inicio();
        count = 3;
    }

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_1(){   
        $("#ventana").load(ruta+'1-7-1/index.php', 
        { 
        next: "Page_2()", 
        procesar:"result_tipo_1_7_1()",
        titulo:"<center><h5><span>Lectura:</span> Un cuento.</h5></center>",
        restaurar:"start_1()",
        dir:ruta,
        cod: "1-7-1",
        nota:cal
        }          
        );
        return false;
    };
    function start_2(){   
        $("#ventana").load(ruta+'1-7-2/index.php', 
        { 
        next: "Page_3()", 
        procesar:"result_tipo_1_7_2()",
        titulo:"<center><h5><span>Marca</span> los nombres de los personajes del cuento.</h5></center>",
        restaurar:"start_2()",
        dir:ruta,
        cod: "1-7-2",
        nota:cal
        }          
        );
        return false;
    };
    function start_3(){   
        $("#ventana").load(ruta+'1-7-3/index.php', 
        { 
        next: "Page_4()", 
        procesar:"result_tipo_1_7_3()",
        titulo:"<center><h5><span>Arrastra</span> los nombres de los personajes.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "1-7-3",
        nota:cal
        }          
        );
        return false;
    };
    function start_4(){   
        $("#ventana").load(ruta+'1-7-4/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_7_4()",
        titulo:"<center><h5><span>Escoge</span> la respuesta correcta.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "1-7-4",
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