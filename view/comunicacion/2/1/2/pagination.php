<script type="text/javascript">
   
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
    function Page_6(){
        start_6();
        inicio();
        count = 3;
    }

    var cant=5;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    function start_2(){
        $("#ventana").load(ruta+'2-1-2/index.php', 
        {
        next: "Page_3()", 
        procesar:"result_tipo_2_1_2()",
        titulo:"<center><h5><span>Arrastra</span> el artículo correspondiente a cada imagen.</h5></center>",
        restaurar:"start_2()",
        dir:ruta,
        cod: "2-1-2",
        nota:cal
        }
        );
        return false;  
    };
    function start_3(){
        $("#ventana").load(ruta+'2-1-3/index.php', 
        {
        next: "Page_4()", 
        procesar:"result_tipo_2_1_3()",
        titulo:"<center><h5><span>Selecciona</span> el artículo y <span>relaciona</span> con el sustantivo adecuado.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "2-1-3",
        nota:cal
        }
        );
        return false;  
    };
    function start_4(){
        $("#ventana").load(ruta+'2-1-4/index.php', 
        {
        next: "Page_5()", 
        procesar:"result_tipo_2_1_4()",
        titulo:"<center><h5><span>Arrastra</span> el artículo que corresponda a cada palabra.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "2-1-4",
        nota:cal
        }
        );
        return false;  
    };
    function start_5(){
        $("#ventana").load(ruta+'2-1-5/index.php', 
        {
        next: "Page_6()", 
        procesar:"result_tipo_2_1_5()",
        titulo:"<center><h5><span>Observa</span> las imágenes y <span>arrastra</span> el artículo correcto.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "2-1-5",
        nota:cal
        }
        );
        return false;  
    };
    function start_6(){
        $("#ventana").load(ruta+'2-1-6/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_1_6()",
        titulo:"<center><h5><span>Arrastra</span> el artículo que corresponde para cada palabra.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "2-1-6",
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