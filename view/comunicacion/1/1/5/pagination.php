<script type="text/javascript">
   function Page_12(){
        start_12();
        inicio();
        count = 3;
    }
   function  Page_13(){
        start_13();
        inicio();
         count = 3;
    }
   function Page_14(){
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
        $("#ventana").load(ruta+'1-1-12/index.php', 
        {
        next: "Page_13()", 
        procesar:"result_tipo_1_1_12()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> las palabras que empiezan con <span class='ftitulo'>m</span>.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "1-1-12",
        nota:cal
        }
        );
        return false;  
    };
    function start_13(){
        $("#ventana").load(ruta+'1-1-13/index.php', 
        { 
        next: "Page_14()", 
        procesar:"result_tipo_1_1_13()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la imagen que falta en la secuencia.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "1-1-13",
        nota:cal
        }
        );
        return false;
    };
    function start_14(){   
        $("#ventana").load(ruta+'1-1-14/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_1_14()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la imagen que falta en la secuencia.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "1-1-14",
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