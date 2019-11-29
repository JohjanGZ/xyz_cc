<script type="text/javascript">
    function Page_lectura_2_5_7_1(){
        start_lectura_2_5_7_1();
        inicio();
        count = 0;
    }
    function Page_21(){
        start_21();
        inicio();
        count = 3;
    } 
    var cant=1;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_lectura_2_5_7_1(){
        $("#ventana").load(ruta+'lectura2-5-7-1/index.php', 
        {
        next: "Page_21()", 
        procesar:"lectura2-2-1-1()",
        titulo:"<center><h5><span>Lee</span> atentamente.</h5></center>",
        restaurar:"start_lectura_2_5_7_1()",
        dir:ruta,
        cod: "lectura2-5-7-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_21(){
        $("#ventana").load(ruta+'2-5-21/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_5_21()",
        titulo:"<center><h5><span>Arrastra</span> <i>beneficio</i> o <i>perjuicio</i> según corresponda.</h5></center>",
        restaurar:"start_21()",
        dir:ruta,
        cod: "2-5-21",
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