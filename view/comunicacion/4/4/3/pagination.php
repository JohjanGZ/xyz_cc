<script type="text/javascript">
   
   
   function  Page_6(){
        start_6();
        inicio();
         count = 3;
    }
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
  

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_6(){
        $("#ventana").load(ruta+'4-4-6/index.php', 
        {
        next: "Page_7()", 
        procesar:"result_tipo_4_4_6()",
        titulo:"<center><h5><span>Observa</span> la imagen y <span>selecciona</span> las oraciones que sean <i>exclamativas</i> o <i>interrogativas</i>.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "4-4-6",
        nota:cal
        }
        );
        return false;  
    };
    function start_7(){
        $("#ventana").load(ruta+'4-4-7/index.php', 
        {
        next: "Page_8()", 
        procesar:"result_tipo_4_4_7()",
        titulo:"<center><h5><span>Observa</span> la imagen y <span>selecciona</span> las oraciones que sean <i>exclamativas</i> o <i>interrogativas</i>.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "4-4-7",
        nota:cal
        }
        );
        return false;  
    };
    function start_8(){
        $("#ventana").load(ruta+'4-4-8/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_4_8()",
        titulo:"<center><h5><span>Arrastra</span> los signos de interrogación y de exclamación donde sea necesario.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "4-4-8",
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