<script type="text/javascript">
  
   function Page_4(){
        start_4();
        inicio();
        count = 3;
    }
   function  Page_5(){
        start_5();
        inicio();
         count = 3;
    }
    function  Page_6(){
        start_6();
        inicio();
         count = 3;
    }
    function  Page_7(){
        start_7();
        inicio();
         count = 3;
    }
    function  Page_8(){
        start_8();
        inicio();
         count = 3;
    }

    var cant=5;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_4(){
        $("#ventana").load(ruta+'3-3-4/index.php', 
        {
        next: "Page_5()", 
        procesar:"result_tipo_3_3_4()",
        titulo:"<center><h5><span>Arrastra</span> el nombre de las imágenes y <span>forma</span> la palabra compuesta.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "3-3-4",
        nota:cal
        }
        );
        return false;  
    };
    function start_5(){
        $("#ventana").load(ruta+'3-3-5/index.php', 
        {
        next: "Page_6()", 
        procesar:"result_tipo_3_3_5()",
        titulo:"<center><h5><span>Relaciona</span> según convenga y <span>forma</span> las palabras compuestas.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "3-3-5",
        nota:cal
        }
        );
        return false;  
    };
    function start_6(){
        $("#ventana").load(ruta+'3-3-6/index.php', 
        {
        next: "Page_7()", 
        procesar:"result_tipo_3_3_6()",
        titulo:"<center><h5><span>Completa</span> el cuadro con la palabra compuesta que se forma en cada caso.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "3-3-6",
        nota:cal
        }
        );
        return false;  
    };
    function start_7(){
        $("#ventana").load(ruta+'3-3-7/index.php', 
        {
        next: "Page_8()", 
        procesar:"result_tipo_3_3_7()",
        titulo:"<center><h5><span>Busca</span> palabras compuestas en la sopa de letras.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "3-3-7",
        nota:cal
        }
        );
        return false;  
    };
    function start_8(){
        $("#ventana").load(ruta+'3-3-8/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_3_3_8()",
        titulo:"<center><h5><span>Selecciona</span> las palabras compuestas.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "3-3-8",
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