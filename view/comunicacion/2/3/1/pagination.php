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
    function Page_5(){
        start_5();
        inicio();
        count = 3;
    }


    var cant=5;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_1(){
        $("#ventana").load(ruta+'2-3-1/index.php', 
        {
        next: "Page_2()", 
        procesar:"result_tipo_2_3_1()",
        titulo:"<center><h5><span>Observa</span> las imágenes y <span>arrastra</span> los respectivos antónimos.</h5></center>",
        restaurar:"start_1()",
        dir:ruta,
        cod: "2-3-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_2(){
        $("#ventana").load(ruta+'2-3-2/index.php', 
        {
        next: "Page_3()", 
        procesar:"result_tipo_2_3_2()",
        titulo:"<center><h5><span>Analiza</span> las palabras y <span>relaciona</span> segpun corresponda.</h5></center>",
        restaurar:"start_2()",
        dir:ruta,
        cod: "2-3-2",
        nota:cal
        }
        );
        return false;  
    };
    function start_3(){
        $("#ventana").load(ruta+'2-3-3/index.php', 
        {
        next: "Page_4()", 
        procesar:"result_tipo_2_3_3()",
        titulo:"<center><h5><span>Analiza</span> las palabras y <span>relaciona</span> los antónimos.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "2-3-3",
        nota:cal
        }
        );
        return false;  
    };
    function start_4(){
        $("#ventana").load(ruta+'2-3-4/index.php', 
        {
        next: "Page_5()", 
        procesar:"result_tipo_2_3_4()",
        titulo:"<center><h5><span>Encuentra</span> en la sopa de letras los antónimos de las siguientes palabras:</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "2-3-4",
        nota:cal
        }
        );
        return false;  
    };
    function start_5(){
        $("#ventana").load(ruta+'2-3-5/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_3_5()",
        titulo:"<center><h5><span>Observa</span> atentamente las palabras, <span>haz</span> clic en el botón debajo y <span>selecciona</span> el antónimo que corresponde.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "2-3-5",
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