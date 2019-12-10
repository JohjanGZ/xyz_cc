<script type="text/javascript">
    function  Page_12(){
        start_12();
        inicio();
         count = 3;
    }
    function  Page_13(){
        start_13();
        inicio();
         count = 3;
    }
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
        start_16();
        inicio();
         count = 3;
    }
    var cant=6;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_12(){
        $("#ventana").load(ruta+'3-5-12/index.php', 
        {
        next: "Page_13()", 
        procesar:"result_tipo_3_5_12()",
        titulo:"<center><h5><span>Observa</span> las imágenes y seleciona las oraciones que estén en tiempo presente.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "3-5-12",
        nota:cal
        }
        );
        return false;  
    };
    function start_13(){
        $("#ventana").load(ruta+'3-5-13/index.php', 
        {
        next: "Page_14()", 
        procesar:"result_tipo_3_5_13()",
        titulo:"<center><h5><span>Observa</span> las imágenes y seleciona las oraciones que estén en tiempo pasado.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "3-5-13",
        nota:cal
        }
        );
        return false;  
    };
    function start_14(){
        $("#ventana").load(ruta+'3-5-14/index.php', 
        {
        next: "Page_15()", 
        procesar:"result_tipo_3_5_14()",
        titulo:"<center><h5><span>Selecciona</span> la oración que corresponda con el tiempo que se indica.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "3-5-14",
        nota:cal
        }
        );
        return false;  
    };
    function start_15(){
        $("#ventana").load(ruta+'3-5-15/index.php', 
        {
        next: "Page_16()", 
        procesar:"result_tipo_3_5_15()",
        titulo:"<center><h5><span>Completa</span> las siguientes oraciones seleccionando el verbo en el tiempo que se indica.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "3-5-15",
        nota:cal
        }
        );
        return false;  
    };
    function start_16(){
        $("#ventana").load(ruta+'3-5-16/index.php', 
        {
        next: "Page_17()", 
        procesar:"result_tipo_3_5_16()",
        titulo:"<center><h5><span>Completa</span> las oraciones utilizando el verbo adecuado.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "3-5-16",
        nota:cal
        }
        );
        return false;  
    };
    function start_17(){
        $("#ventana").load(ruta+'3-5-17/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_3_5_17()",
        titulo:"<center><h5><span>Arrastra</span> el <i>tiempo, número y persona</i> que le corresponde a cada verbo.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "3-5-17",
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