<script type="text/javascript">
    function Page_lectura_2_5_2_1(){
        start_lectura_2_5_2_1();
        inicio();
        count = 0;
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


    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_2_5_2_1(){
        $("#ventana").load(ruta+'lectura2-5-2-1/index.php', 
        {
        next: "Page_4()", 
        procesar:"lectura2-2-1-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_2_5_2_1()",
        dir:ruta,
        cod: "lectura2-5-2-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_4(){
        $("#ventana").load(ruta+'2-5-4/index.php', 
        {
        next: "Page_5()", 
        procesar:"result_tipo_2_5_4()",
        titulo:"<center><h5><span>Lee</span> atentamente el anunciado y <span>marca</span> si es verdadero o falso.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "2-5-4",
        nota:cal
        }
        );
        return false;  
    };
    function start_5(){
        $("#ventana").load(ruta+'2-5-5/index.php', 
        {
        next: "Page_6()", 
        procesar:"result_tipo_2_5_5()",
        titulo:"<center><h5><span>Lee</span> atentamente el anunciado y <span>marca</span> si es verdadero o falso.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "2-5-5",
        nota:cal
        }
        );
        return false;  
    };
    function start_6(){
        $("#ventana").load(ruta+'2-5-6/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_5_6()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "2-5-6",
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