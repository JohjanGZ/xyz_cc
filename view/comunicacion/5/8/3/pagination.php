<script type="text/javascript">
   
   function Page_7(){
        start_7();
        inicio();
        count = 3;
    }
   function  Page_8(){
        start_8();
        inicio();
         count = 3;
    }

    var cant=2;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_7(){
        $("#ventana").load(ruta+'4-8-7/index.php', 
        {
        next: "Page_8()", 
        procesar:"result_tipo_4_8_7()",
        titulo:"<center><h5><span>Selecciona</span> la expresión que mejor define un debate.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "4-8-7",
        nota:cal
        }
        );
        return false;  
    };
    function start_8(){
        $("#ventana").load(ruta+'4-8-8/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_4_8_8()",
        titulo:"<center><h5><span>Ordena</span> e <span>identifica</span> los pasos que debe seguir un participante antes de un debate.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "4-8-8",
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