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
        $("#ventana").load(ruta+'1-2-7/index.php', 
        {
        next: "Page_8()", 
        procesar:"result_tipo_1_2_7()",
        titulo:"<center><h5><span>Observa</span> las imágenes y <span>arrastra</span> la sílaba para completar la palabra.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "1-2-7",
        nota:cal
        }
        );
        return false;  
    };
    function start_8(){
        $("#ventana").load(ruta+'1-2-8/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_2_8()",
        titulo:"<center><h5><span>Selecciona</span> los dibujos que contengan las siguientes sílabas.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "1-2-8",
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