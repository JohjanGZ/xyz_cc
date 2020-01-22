<script type="text/javascript">
   function Page_1(){
        start_1();
        inicio();
        count = 3;
    }
   function  Page_2(){
        start_2();
        inicio();
         count = 3;
    }

    var cant=2;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
   
    function start_1(){
        $("#ventana").load(ruta+'2-0-1/index.php', 
        {
        next: "Page_2()", 
        procesar:"result_tipo_2_0_1()",
        titulo:"<center><h5><span>Observa</span> las imágenes y clasifica los nombres propios y comunes.</h5></center>",
        restaurar:"start_1()",
        dir:ruta,
        cod: "2-0-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_2(){
        $("#ventana").load(ruta+'2-0-2/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_2_0_2()",
        titulo:"<center><h5><span>Observa</span> los dibujos y <span>arrastra</span> dentro de los casilleros la letra inicial de cada uno.</center>",
        restaurar:"start_2()",
        dir:ruta,
        cod: "2-0-2",
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