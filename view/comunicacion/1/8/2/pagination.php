<script type="text/javascript">
    function  Page_lectura_8_2(){
        start_lectura_8_2();
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
   
    var cant=2;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_8_2(){   
        $("#ventana").load(ruta+'lectura1-8-2-1/index.php', 
        { 
        next: "Page_4()", 
        procesar:"result_tipo_1_4_1()",
        titulo:"<center><h5><span>Lee</span> atentamente y responde.</h5></center>",
        restaurar:"start_lectura_8_2()",
        dir:ruta,
        cod: "lectura1-8-2-1",
        nota:cal
        }          
        );
        return false;
    };
    function start_4(){   
        $("#ventana").load(ruta+'1-8-4/index.php', 
        { 
        next: "Page_5()", 
        procesar:"result_tipo_1_8_4()",
        titulo:"<center><h5><span>Señala</span> la respuesta correcta.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "1-8-4",
        nota:cal
        }          
        );
        return false;
    };
    function start_5(){   
        $("#ventana").load(ruta+'1-8-5/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_8_5()",
        titulo:"<center><h5><span>Señala</span> la respuesta correcta.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "1-8-5",
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