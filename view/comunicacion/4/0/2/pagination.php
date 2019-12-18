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
    function Page_6(){
        start_6();
        inicio();
        count = 3;
    }
    function  Page_7(){
        start_7();
        inicio();
         count = 3;
    }
    function Page_8(){
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
        $("#ventana").load(ruta+'4-0-4/index.php', 
        {
        next: "Page_5()", 
        procesar:"result_tipo_4_0_4()",
        titulo:"<center><h5><span>Selecciona</span> el significado de las palabras según el prefijo que contienen.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "4-0-4",
        nota:cal
        }
        );
        return false;  
    };
    function start_5(){
        $("#ventana").load(ruta+'4-0-5/index.php', 
        { 
        next: "Page_6()", 
        procesar:"result_tipo_4_0_5()",
        titulo:"<center><h5><span>Forma</span> palabras para relacionarlas con la oración adecuada.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "4-0-5",
        nota:cal
        }
        );
        return false;
    };
    function start_6(){
        $("#ventana").load(ruta+'4-0-6/index.php', 
        {
        next: "Page_7()", 
        procesar:"result_tipo_4_0_6()",
        titulo:"<center><h5><span>Arrastra</span> las palabras en el recuadro correspondiente.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "4-0-6",
        nota:cal
        }
        );
        return false;  
    };
    function start_7(){
        $("#ventana").load(ruta+'4-0-7/index.php', 
        {
        next: "Page_8()", 
        procesar:"result_tipo_4_0_7()",
        titulo:"<center><h5><span>Observa</span> las palabras formadas a partir de <i>cuchara</i> y <span>arrástralas</span> donde correspondan.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "4-0-7",
        nota:cal
        }
        );
        return false;  
    };
    function start_8(){
        $("#ventana").load(ruta+'4-0-8/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_0_8()",
        titulo:"<center><h5><span>Arrastra</span> los sufijos para <span>formar</span> las palabras.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "4-0-8",
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