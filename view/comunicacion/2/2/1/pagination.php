<script type="text/javascript">

   function Page_1(){
        start_1();
        inicio();
        count = 3;
    }

    var cant=1;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_1(){
        $("#ventana").load(ruta+'2-2-1/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_2_1()",
        titulo:"<center><h5><span>Encuentra</span> en la sopa de letras los antónimos de las siguientes palabras.</h5></center>",
        restaurar:"start_1()",
        dir:ruta,
        cod: "2-2-1",
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