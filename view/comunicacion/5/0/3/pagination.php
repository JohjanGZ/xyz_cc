<script type="text/javascript">


    function Page_11(){
        start_11();
        inicio();
        count = 3;
    }
    function Page_12(){
        start_12();
        inicio();
        count = 3;
    }

    var cant=2;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_11(){
        $("#ventana").load(ruta+'5-0-11/index.php', 
        {
        next: "Page_12()", 
        procesar:"result_tipo_5_0_11()",
        titulo:"<center><h5><span>Arrastra</span> los siguientes elementos de la comunicación donde corresponda.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "5-0-11",
        nota:cal
        }
        );
        return false;  
    };
    function start_12(){
        $("#ventana").load(ruta+'5-0-12/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_5_0_12()",
        titulo:"<center><h5><span>Relaciona</span> el elemento de la comunicación con su significado.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "5-0-12",
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