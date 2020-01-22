<script type="text/javascript">

    function Page_2(){
        start_2();
        inicio();
        count = 3;
    }
    function Page_3(){
        start_3();
        inicio();
        count = 3;
    }
    function Page_4(){
        start_4();
        inicio();
        count = 3;
    }

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    function start_2(){
        $("#ventana").load(ruta+'2-6-2/index.php', 
        {
        next: "Page_3()", 
        procesar:"result_tipo_2_6_2()",
        titulo:"<center><h5><span>Lee</span> atentamente la siguiente serie y <span>marca</span> la que no  corresponde.</h5></center>",
        restaurar:"start_2()",
        dir:ruta,
        cod: "2-6-2",
        nota:cal
        }
        );
        return false;  
    };
    function start_3(){
        $("#ventana").load(ruta+'2-6-3/index.php', 
        {
        next: "Page_4()", 
        procesar:"result_tipo_2_6_3()",
        titulo:"<center><h5><span>Arrastra</span> la palabra que corresponde a cada serie.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "2-6-3",
        nota:cal
        }
        );
        return false;  
    };
    function start_4(){
        $("#ventana").load(ruta+'2-6-4/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_6_4()",
        titulo:"<center><h5><span>Selecciona</span> la palabra que no corresponda a la serie.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "2-6-4",
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