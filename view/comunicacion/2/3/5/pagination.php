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
   
    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro ----------------------- 
    function start_12(){   
        $("#ventana").load(ruta+'2-3-12/index.php', 
        { 
        next: "Page_13()", 
        procesar:"result_tipo_2_3_12()",
        titulo:"<center><h5><span>Arrastra</span> 2 adjetivos que concuerden con cada imagen.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "2-3-12",
        nota:cal
        }          
        );
        return false;
    };

    function start_13(){   
        $("#ventana").load(ruta+'2-3-13/index.php', 
        { 
        next: "Page_14()", 
        procesar:"result_tipo_2_3_13()",
        titulo:"<center><h5><span>Observa</span> las imágenes y <span>selecciona</span> la palabra que mejor describa a cada una.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "2-3-13",
        nota:cal
        }          
        );
        return false;
    };
    function start_14(){   
        $("#ventana").load(ruta+'2-3-14/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_2_3_14()",
        titulo:"<center><h5><span>Resuelve</span> la sopa de letras.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "2-3-14",
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