<script type="text/javascript">
   function Page_4(){
        start_4();
        inicio();
        count = 3;
    }
    function Page_5(){
        start_5();
        inicio();
        count = 3;
    }
    function Page_6(){
        start_6();
        inicio();
        count = 3;
    }
    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_4(){
        $("#ventana").load(ruta+'5-4-4/index.php', 
        {
        next: "Page_5()", 
        procesar:"result_tipo_5_4_4()",
        titulo:"<center><h5><span>Completa</span> el enunciado con la alternativa propuesta.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "5-4-4",
        nota:cal
        }
        );
        return false;  
    };
    function start_5(){
        $("#ventana").load(ruta+'5-4-5/index.php', 
        {
        next: "Page_6()", 
        procesar:"result_tipo_5_4_5()",
        titulo:"<center><h5><span>Selecciona</span> el propósito de la exposición.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "5-4-5",
        nota:cal
        }
        );
        return false;  
    };
    function start_6(){
        $("#ventana").load(ruta+'5-4-6/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_5_4_6()",
        titulo:"<center><h5><span>Organiza</span> los enunciados para realizar la exposición y <span>selecciona</span> la alternativa correcta.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "5-4-6",
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