<script type="text/javascript">
   function Page_13(){
        start_13();
        inicio();
        count = 3;
    }
   function  Page_14(){
        start_14();
        inicio();
         count = 3;
    }
    function Page_15(){
        start_15();
        inicio();
        count = 3;
    }
    function Page_16(){
        start_16();
        inicio();
        count = 3;
    }

    var cant=4;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_13(){
        $("#ventana").load(ruta+'4-3-13/index.php', 
        {
        next: "Page_14()", 
        procesar:"result_tipo_4_3_13()",
        titulo:"<center><h5><span>Arrastra</span> el determinante posesivo de cada imagen.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "4-3-13",
        nota:cal
        }
        );
        return false;  
    };
    function start_14(){
        $("#ventana").load(ruta+'4-3-14/index.php', 
        { 
        next: "Page_15()", 
        procesar:"result_tipo_4_3_14()",
        titulo:"<center><h5><span>Completa</span> las oraciones utilizando determinantes posesivos.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "4-3-14",
        nota:cal
        }
        );
        return false;
    };
    function start_15(){
        $("#ventana").load(ruta+'4-3-15/index.php', 
        { 
        next: "Page_16()", 
        procesar:"result_tipo_4_3_15()",
        titulo:"<center><h5><span>Completa</span> el cuadro con los determinantes posesivos correspondientes.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "4-3-15",
        nota:cal
        }
        );
        return false;
    };
    function start_16(){
        $("#ventana").load(ruta+'4-3-16/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_3_16()",
        titulo:"<center><h5><span>Relaciona</span> según convenga.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "4-3-16",
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