<script type="text/javascript">
   function Page_lectura_2_1_1_1(){
        start_lectura_2_1_1_1();
        inicio();
        count = 0;
    }
   function Page_1(){
        start_1();
        inicio();
        count = 3;
    }
   function  Page_2(){
        start_2();
        inicio();
         count = 3;
    }

    var cant=2;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_2_1_1_1(){
        $("#ventana").load(ruta+'lectura2-1-1-1/index.php', 
        {
        next: "Page_1()", 
        procesar:"lectura2-1-1-1()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar:"start_lectura_2_1_1_1()",
        dir:ruta,
        cod: "lectura2-1-1-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_1(){
        $("#ventana").load(ruta+'2-1-1/index.php', 
        {
        next: "Page_2()", 
        procesar:"result_tipo_2_1_1()",
        titulo:"<center><h5><span>Selecciona</span> verdadero o falso según corresponda.</h5></center>",
        restaurar:"start_1()",
        dir:ruta,
        cod: "2-1-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_2(){
        $("#ventana").load(ruta+'2-1-2/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_2_1_2()",
        titulo:"<center><h5><span>Selecciona</span> el enunciado que corresponda con la lectura.</center>",
        restaurar:"start_2()",
        dir:ruta,
        cod: "2-1-2",
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