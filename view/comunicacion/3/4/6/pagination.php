<script type="text/javascript">
    function  Page_14(){
        start_14();
        inicio();
         count = 3;
    }
    function  Page_15(){
        start_15();
        inicio();
         count = 3;
    }
    function  Page_16(){
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
        $("#ventana").load(ruta+'3-4-14/index.php', 
        {
        next: "Page_15()", 
        procesar:"result_tipo_3_4_14()",
        titulo:"<center><h5><span>Observa</span> la imagen y <span>arrastra</span> el pronombre correspondiente.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "3-4-14",
        nota:cal
        }
        );
        return false;  
    };
    function start_15(){
        $("#ventana").load(ruta+'3-4-15/index.php', 
        {
        next: "Page_16()", 
        procesar:"result_tipo_3_4_15()",
        titulo:"<center><h5><span>Reemplaza</span> la palabra resaltada por un pronombre de la lista.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "3-4-15",
        nota:cal
        }
        );
        return false;  
    };
    function start_16(){
        $("#ventana").load(ruta+'3-4-16/index.php', 
        {
        next: "Page_17()", 
        procesar:"result_tipo_3_4_16()",
        titulo:"<center><h5><span><span>Completa</span> el cuadro con los pronombres del texto anterior</span> la respuesta correcta.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "3-4-16",
        nota:cal
        }
        );
        return false;  
    };
    function start_17(){
        $("#ventana").load(ruta+'3-4-17/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_3_4_17()",
        titulo:"<center><h5><span>Completa</span> las oraciones con el pronombre personal correspondiente.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "3-4-17",
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