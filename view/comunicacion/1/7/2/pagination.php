<script type="text/javascript">
    function Page_lectura_1_7_2_1(){
        start_lectura_1_7_2_1();
        inicio();
        count = 0;
    }
    function Page_5(){
        start_5();
        inicio();
        count = 3;
    }
  
    var cant=1;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_1_7_2_1(){
        $("#ventana").load(ruta+'lectura1-7-2-1/index.php', 
        {
        next: "Page_5()", 
        procesar:"lectura1-7-2-1()",
        titulo:"<center><h5><span>Lee</span> atentamente y <span>responde</span>.</h5></center>",
        restaurar:"start_lectura_1_7_2_1()",
        dir:ruta,
        cod: "lectura1-7-2-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_5(){   
        $("#ventana").load(ruta+'1-7-5/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_7_5()",
        titulo:"<center><h5>¿Qué es lo que recoge la abejia en el jardin? <span>Selecciona</span>.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "1-7-5",
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