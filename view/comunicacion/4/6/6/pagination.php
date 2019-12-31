<script type="text/javascript">
  
   
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
    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    
    function start_13(){
        $("#ventana").load(ruta+'4-6-13/index.php', 
        { 
        next: "Page_14()", 
        procesar:"result_tipo_4_6_13()",
        titulo:"<center><h5><span>Relaciona</span> por causa y efecto.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "4-6-13",
        nota:cal
        }
        );
        return false;
    };
    function start_14(){
        $("#ventana").load(ruta+'4-6-14/index.php', 
        { 
        next: "Page_15()", 
        procesar:"result_tipo_4_6_14()",
        titulo:"<center><h5><span>Completa</span> los recuadros con la causa más adecuada en cada caso.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "4-6-14",
        nota:cal
        }
        );
        return false;
    };
    function start_15(){
        $("#ventana").load(ruta+'4-6-15/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_4_6_15()",
        titulo:"<center><h5><span>Observa</span> las imágenes y luego <span>selecciona</span> la <i>causa</i> y <i>efecto</i> de cada situación.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "4-6-15",
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