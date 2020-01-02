<script type="text/javascript">
   function Page_lectura_4_8_6_1(){
        start_lectura_4_8_6_1();
        inicio();
        count = 0;
    }
   function  Page_12(){
        start_12();
        inicio();
         count = 3;
    }
    function  Page_13(){
        start_13();
        inicio();
         count = 3;
    }
    function  Page_14(){
        start_14();
        inicio();
         count = 3;
    }

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_4_8_6_1(){
        $("#ventana").load(ruta+'lectura4-8-6-1/index.php', 
        {
        next: "Page_12()", 
        procesar:"lectura1-1-1-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y <span>contesta</span> las preguntas.</h5></center>",
        restaurar:"start_lectura_4_8_6_1()",
        dir:ruta,
        cod: "lectura4-8-6-1",
        nota:cal
        }
        );
        return false;  
    };
    
    function start_12(){
        $("#ventana").load(ruta+'4-8-12/index.php', 
        { 
        next: "Page_13()", 
        procesar:"result_tipo_4_8_12()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "4-8-12",
        nota:cal
        }
        );
        return false;
    };
    function start_13(){
        $("#ventana").load(ruta+'4-8-13/index.php', 
        { 
        next: "Page_14()", 
        procesar:"result_tipo_4_8_13()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "4-8-13",
        nota:cal
        }
        );
        return false;
    };
    function start_14(){
        $("#ventana").load(ruta+'4-8-14/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_4_8_14()",
        titulo:"<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "4-8-14",
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