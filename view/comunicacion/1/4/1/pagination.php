<script type="text/javascript">
    function  Page_1(){
        start_1();
        inicio();
         count = 3;
    }
   function Page_2(){
        start_2();
        inicio();
        count = 3;
    }
    function  Page_3(){
        start_3();
        inicio();
         count = 3;
    }
   
    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_1(){   
        $("#ventana").load(ruta+'1-4-1/index.php', 
        { 
        next: "Page_2()", 
        procesar:"result_tipo_1_4_1()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y responde.</h5></center>",
        restaurar:"start_1()",
        dir:ruta,
        cod: "1-4-1",
        nota:cal
        }          
        );
        return false;
    };
    function start_2(){   
        $("#ventana").load(ruta+'1-4-2/index.php', 
        { 
        next: "Page_3()", 
        procesar:"result_tipo_1_4_2()",
        titulo:"<center><h5><span>Elige</span> la imagen que complete la oración.</h5></center>",
        restaurar:"start_2()",
        dir:ruta,
        cod: "1-4-2",
        nota:cal
        }          
        );
        return false;
    };
    function start_3(){   
        $("#ventana").load(ruta+'1-4-3/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_4_3()",
        titulo:"<center><h5><span>Elige</span> la imagen que complete la oración.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "1-4-3",
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