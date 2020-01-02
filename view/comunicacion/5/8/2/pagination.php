<script type="text/javascript">
   
   function Page_4(){
        start_4();
        inicio();
        count = 3;
    }
   function  Page_5(){
        start_5();
        inicio();
         count = 3;
    }
    function  Page_6(){
        start_6();
        inicio();
         count = 3;
    }

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_4(){
        $("#ventana").load(ruta+'4-8-4/index.php', 
        {
        next: "Page_5()", 
        procesar:"result_tipo_4_8_4()",
        titulo:"<center><h5><span>Selecciona</span> la palabra correcta que completa cada oración.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "4-8-4",
        nota:cal
        }
        );
        return false;  
    };
    function start_5(){
        $("#ventana").load(ruta+'4-8-5/index.php', 
        {
        next: "Page_6()", 
        procesar:"result_tipo_4_8_5()",
        titulo:"<center><h5><span>Selecciona</span> la palabra más adecuada para reemplazar la palabra en negrita de cada oración.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "4-8-5",
        nota:cal
        }
        );
        return false;  
    };
    function start_6(){
        $("#ventana").load(ruta+'4-8-6/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_4_8_6()",
        titulo:"<center><h5><span>Relaciona</span> según corresponda el sentido del verbo decir.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "4-8-6",
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