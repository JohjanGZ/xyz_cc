<script type="text/javascript">
   function Page_5(){
        start_5();
        inicio();
        count = 3;
    }
   function  Page_6(){
        start_6();
        inicio();
         count = 3;
    }


    var cant=2;

    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_5(){
        $("#ventana").load(ruta+'1-2-5/index.php', 
        {
        next: "Page_6()", 
        procesar:"result_tipo_1_2_5()",
        titulo:"<center><h5><span class='ftitulo'>Pronuncia</span> en voz alta el nombre de cada imagen y <span>marca</span> con color rojo el nombre de las imágenes que comienzan con <span>d</span>, y con color azul los que comienzan con <span>f</span>.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "1-2-5",
        nota:cal
        }
        );
        return false;  
    };
    function start_6(){   
        $("#ventana").load(ruta+'1-2-6/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_2_6()",
        titulo:"<center><h5><span class='ftitulo'>Marca</span> el círculo que contiene la sílaba <span>ta-</span>.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "1-2-6",
        nota:cal
        }          
        );
        return false;
    };
    function resultado(){
        $("#ventana").load('../../../exercises/resultado/resultado.php');
        return false;
    };
</script>