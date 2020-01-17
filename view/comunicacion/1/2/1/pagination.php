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
   function Page_3(){
        start_3();
        inicio();
         count = 3;
    }

    var cant=3;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_1(){
        $("#ventana").load(ruta+'1-2-1/index.php', 
        {
        next: "Page_2()", 
        procesar:"result_tipo_1_2_1()",
        titulo:"<center><h5><span>Relaciona</span> cada imagen con su respectiva imagen.</h5></center>",
        restaurar:"start_1()",
        dir:ruta,
        cod: "1-2-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_2(){
        $("#ventana").load(ruta+'1-2-2/index.php', 
        { 
        next: "Page_3()", 
        procesar:"result_tipo_1_2_2()",
        titulo:"<center><h5><span>Completa</span> con ta-, te-, ti-, to-, tu-.</h5></center>",
        restaurar:"start_2()",
        dir:ruta,
        cod: "1-2-2",
        nota:cal
        }
        );
        return false;
    };
    function start_3(){   
        $("#ventana").load(ruta+'1-2-3/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_2_3()",
        titulo:"<center><h5><span>Ordena</span> las palabras y <span>forma</span> oraciones.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "1-2-3",
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