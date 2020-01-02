<script type="text/javascript">
   function Page_lectura_4_4_2_1(){
        start_lectura_4_4_2_1();
        inicio();
        count = 0;
    }
   function Page_3(){
        start_3();
        inicio();
        count = 3;
    }
   function  Page_4(){
        start_4();
        inicio();
         count = 3;
    }

    var cant=2;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_4_4_2_1(){
        $("#ventana").load(ruta+'lectura4-4-2-1/index.php', 
        {
        next: "Page_3()", 
        procesar:"lectura1-1-1-1()",
        titulo:"<center><h5><span>Observa</span> el folleto y <span>contesta</span> las preguntas.</h5></center>",
        restaurar:"start_lectura_4_4_2_1()",
        dir:ruta,
        cod: "lectura4-4-2-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_3(){
        $("#ventana").load(ruta+'4-4-3/index.php', 
        {
        next: "Page_4()", 
        procesar:"result_tipo_4_4_3()",
        titulo:"<center><h5><span>Selecciona</span> las respuestas correctas.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "4-4-3",
        nota:cal
        }
        );
        return false;  
    };
    function start_4(){
        $("#ventana").load(ruta+'4-4-4/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_4_4_4()",
        titulo:"<center><h5><span>Relaciona</span> cada medida de mano con la cantidad de alimento que le corresponde.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "4-4-4",
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