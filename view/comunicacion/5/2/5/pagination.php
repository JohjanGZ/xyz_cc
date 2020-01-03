<script type="text/javascript">
    
    function Page_14(){
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

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

   
    function start_14(){
        $("#ventana").load(ruta+'4-2-14/index.php', 
        {
        next: "Page_15()", 
        procesar:"result_tipo_4_2_14()",
        titulo:"<center><h5><span>Encuentra</span>, en la sopa de letras, los siguientes adjetivos.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "4-2-14",
        nota:cal
        }
        );
        return false;  
    };
    function start_15(){
        $("#ventana").load(ruta+'4-2-15/index.php', 
        {
        next: "Page_16()", 
        procesar:"result_tipo_4_2_15()",
        titulo:"<center><h5><span>Selecciona</span> los adjetivos de las siguientes oraciones.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "4-2-15",
        nota:cal
        }
        );
        return false;  
    };
    function start_16(){
        $("#ventana").load(ruta+'4-2-16/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_2_16()",
        titulo:"<center><h5><span>Selecciona</span> los adjetivos de las siguientes oraciones.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "4-2-16",
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