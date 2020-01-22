<script type="text/javascript">
  function Page_lectura_2_1_4_1(){
        start_lectura_2_1_4_1();
        inicio();
        count = 0;
    }
    function Page_12(){
        start_12();
        inicio();
         count = 3;
    }

    function Page_13(){
        start_13();
        inicio();
         count = 3;
    }

    function Page_14(){
        start_14();
        inicio();
         count = 3;
    }

    function Page_15(){
        start_15();
        inicio();
         count = 3;
    }

    function Page_16(){
        start_16();
        inicio();
         count = 3;
    }
    function Page_17(){
        start_17();
        inicio();
         count = 3;
    }
    function Page_18(){
        start_18();
        inicio();
         count = 3;
    }

    var cant=7;

    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
   
    function start_lectura_2_1_4_1(){
        $("#ventana").load(ruta+'lectura2-1-4-1/index.php', 
        {
        next: "Page_12()", 
        procesar:"lectura2-1-4-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_2_1_4_1()",
        dir:ruta,
        cod: "lectura2-1-4-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_12(){
        $("#ventana").load(ruta+'2-1-12/index.php', 
        {
        next: "Page_13()", 
        procesar:"result_tipo_2_1_12()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "2-1-12",
        nota:cal
        }
        );
        return false;  
    };
    function start_13(){
        $("#ventana").load(ruta+'2-1-13/index.php', 
        {
        next: "Page_14()", 
        procesar:"result_tipo_2_1_13()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "2-1-13",
        nota:cal
        }
        );
        return false;  
    };
    function start_14(){
        $("#ventana").load(ruta+'2-1-14/index.php', 
        {
        next: "Page_15()", 
        procesar:"result_tipo_2_1_14()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "2-1-14",
        nota:cal
        }
        );
        return false;  
    };
    function start_15(){
        $("#ventana").load(ruta+'2-1-15/index.php', 
        {
        next: "Page_16()", 
        procesar:"result_tipo_2_1_15()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "2-1-15",
        nota:cal
        }
        );
        return false;  
    };
    function start_16(){
        $("#ventana").load(ruta+'2-1-16/index.php', 
        {
        next: "Page_17()", 
        procesar:"result_tipo_2_1_16()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "2-1-16",
        nota:cal
        }
        );
        return false;  
    };
    function start_17(){
        $("#ventana").load(ruta+'2-1-17/index.php', 
        {
        next: "Page_18()", 
        procesar:"result_tipo_2_1_17()",
        titulo:"<center><h5><span>Selecciona</span> las cualidades que describen a Serafín después de que pidió disculpas.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "2-1-17",
        nota:cal
        }
        );
        return false;  
    };
    function start_18(){
        $("#ventana").load(ruta+'2-1-18/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_1_18()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "2-1-18",
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