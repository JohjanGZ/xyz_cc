<script type="text/javascript">
   function Page_1(){
        start_1();
        inicio();
        count = 0;
    }
   function  Page_2(){
        start_2();
        inicio();
         count = 3;
    }
   function Page_3(){
        start_3();
        inicio();
         count = 3;
    }

    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_1(){
        $("#ventana").load(ruta+'1-1-1/index.php', 
        {
        next: "Page_2()", 
        procesar:"result_tipo_1_1_1()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_1()",
        dir:ruta,
        cod: "1-1-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_2(){
        $("#ventana").load(ruta+'1-1-2/index.php', 
        { 
        next: "Page_3()", 
        procesar:"result_tipo_1_1_2()",
        titulo:"<center><h5><span class='ftitulo'>Marca</span> la respuesta correcta.</h5><br>¿Qué animales decoran la lectura?</center>",
        restaurar:"start_2()",
        dir:ruta,
        cod: "1-1-2",
        nota:cal
        }
        );
        return false;
    };
    function start_3(){   
        $("#ventana").load(ruta+'1-1-3/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_1_3()",
        titulo:"<center><h5><span class='ftitulo'>Indica</span>, según el poema, ¿en dónde siente esas hermosas palabras?.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "1-1-3",
        nota:cal
        }          
        );
        return false;
    };
    function resultado(){
        $("#ventana").load('../../../exercises/resultado/resultado.php');
        return false;
    };
</script>