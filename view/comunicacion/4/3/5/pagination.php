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
    function  Page_16(){
        start_16();
        inicio();
         count = 3;
    }

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_14(){
        $("#ventana").load(ruta+'3-3-14/index.php', 
        {
        next: "Page_15()", 
        procesar:"result_tipo_3_3_14()",
        titulo:"<center><h5><span>Lee</span> y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "3-3-14",
        nota:cal
        }
        );
        return false;  
    };
    function start_15(){
        $("#ventana").load(ruta+'3-3-15/index.php', 
        {
        next: "Page_16()", 
        procesar:"result_tipo_3_3_15()",
        titulo:"<center><h5><span>Lee</span> y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "3-3-15",
        nota:cal
        }
        );
        return false;  
    };
    function start_16(){
        $("#ventana").load(ruta+'3-3-16/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_3_3_16()",
        titulo:"<center><h5><span>Lee</span> y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "3-3-16",
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