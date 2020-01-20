<script type="text/javascript">
    function  Page_1(){
        start_1();
        inicio();
         count = 3;
    }
   function Page_2(){
        start_2();
        inicio();
        count = 3;
    }
    function  Page_3(){
        start_3();
        inicio();
         count = 3;
    }
    function  Page_4(){
        start_4();
        inicio();
         count = 3;
    }
   
    var cant=4;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_1(){   
        $("#ventana").load(ruta+'1-4-1/index.php', 
        { 
        next: "Page_2()", 
        procesar:"result_tipo_1_4_1()",
        titulo:"<center><h5><span>Arrastra</span> el nombre de cada imagen.</h5></center>",
        restaurar:"start_1()",
        dir:ruta,
        cod: "1-4-1",
        nota:cal
        }          
        );
        return false;
    };
    function start_2(){   
        $("#ventana").load(ruta+'1-4-2/index.php', 
        { 
        next: "Page_3()", 
        procesar:"result_tipo_1_4_2()",
        titulo:"<center><h5><span>Relaciona</span> cada nombre con la imagen que le corresponde.</h5></center>",
        restaurar:"start_2()",
        dir:ruta,
        cod: "1-4-2",
        nota:cal
        }          
        );
        return false;
    };
    function start_3(){   
        $("#ventana").load(ruta+'1-4-3/index.php', 
        { 
        next: "Page_4()", 
        procesar:"result_tipo_1_4_3()",
        titulo:"<center><h5><span>Relaciona</span> cada nombre con la imagen que le corresponde.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "1-4-3",
        nota:cal
        }          
        );
        return false;
    };
    function start_4(){   
        $("#ventana").load(ruta+'1-4-4/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_4_4()",
        titulo:"<center><h5><span>Completa</span> las oraciones con los nombres de los dibujos.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "1-4-4",
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