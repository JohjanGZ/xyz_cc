<script type="text/javascript">
   function  Page_2(){
        start_2();
        inicio();
         count = 3;
    }
    function  Page_3(){
        start_3();
        inicio();
         count = 3;
    }
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
    
    var cant=4;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_2(){
        $("#ventana").load(ruta+'4-6-2/index.php', 
        {
        next: "Page_3()", 
        procesar:"result_tipo_4_6_2()",
        titulo:"<center><h5><span>Ubica</span> los siguientes verbos en el cuadro.</h5></center>",
        restaurar:"start_2()",
        dir:ruta,
        cod: "4-6-2",
        nota:cal
        }
        );
        return false;  
    };
    function start_3(){
        $("#ventana").load(ruta+'4-6-3/index.php', 
        { 
        next: "Page_4()", 
        procesar:"result_tipo_4_6_3()",
        titulo:"<center><h5><span>Arrastra</span> al color amarillo las formas simples y al verde las formas compuestas del verbo.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "4-6-3",
        nota:cal
        }
        );
        return false;
    };
    function start_4(){
        $("#ventana").load(ruta+'4-6-4/index.php', 
        {
        next: "Page_5()", 
        procesar:"result_tipo_4_6_4()",
        titulo:"<center><h5><span>Cambia</span> las siguientes oraciones simples a forma compuesta.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "4-6-4",
        nota:cal
        }
        );
        return false;  
    };
    function start_5(){
        $("#ventana").load(ruta+'4-6-5/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_6_5()",
        titulo:"<center><h5><span>Conjuga</span> el verbo cantar utilizando la forma compuesta en el tiempo pasado.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "4-6-5",
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