<script type="text/javascript">
    function  Page_lectura_5_2(){
        start_lectura_5_2();
        inicio();
         count = 3;
    }
   function Page_2(){
        start_2();
        inicio();
        count = 3;
    }
   
    var cant=1;
    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_5_2(){   
        $("#ventana").load(ruta+'lectura1-5-2-1/index.php', 
        { 
        next: "Page_2()", 
        procesar:"result_tipo_1_5_2()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y responde.</h5></center>",
        restaurar:"start_lectura_5_2()",
        dir:ruta,
        cod: "lectura1-5-2-1",
        nota:cal
        }          
        );
        return false;
    };
    function start_2(){   
        $("#ventana").load(ruta+'1-5-2/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_5_2()",
        titulo:"<center><h5>¿Qué lleva en su cabeza y en sus ojos el ratón? <span>Selecciona</span>.</h5></center>",
        restaurar:"start_2()",
        dir:ruta,
        cod: "1-5-2",
        nota:cal
        }          
        );
        return false;
    };
    function resultado(){
        $("#ventana").load('../../../exercises/resultado/resultado.php');
        return false;
    };
</script>