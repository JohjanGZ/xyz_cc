<script type="text/javascript">
  
   function Page_14(){
        start_14();
        inicio();
        count = 3;
    }
   function  Page_15(){
        start_15();
        inicio();
         count = 3;
    }
    function Page_16(){
        start_16();
        inicio();
        count = 3;
    }
   function  Page_17(){
        start_17();
        inicio();
         count = 3;
    }
    var cant=4;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_14(){
        $("#ventana").load(ruta+'3-7-14/index.php', 
        {
        next: "Page_15()", 
        procesar:"result_tipo_3_7_14()",
        titulo:"<center><h5><span>Selecciona</span> los recuadros que contengan una oración enunciativa.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "3-7-14",
        nota:cal
        }
        );
        return false;  
    };
    function start_15(){
        $("#ventana").load(ruta+'3-7-15/index.php', 
        {
        next: "Page_16()", 
        procesar:"result_tipo_3_7_15()",
        titulo:"<center><h5><span>Ordena</span> las palabras y forma oraciones.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "3-7-15",
        nota:cal
        }
        );
        return false;  
    };
    function start_16(){
        $("#ventana").load(ruta+'3-7-16/index.php', 
        {
        next: "Page_17()", 
        procesar:"result_tipo_3_7_16()",
        titulo:"<center><h5><span>Relaciona</span> las oración con sus respectivas clases.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "3-7-16",
        nota:cal
        }
        );
        return false;  
    };
    function start_17(){
        $("#ventana").load(ruta+'3-7-17/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_3_7_17()",
        titulo:"<center><h5><span>Selecciona</span> lo que expresa cada una de las siguientes oraciones.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "3-7-17",
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