<script type="text/javascript">
   function Page_3(){
        start_3();
        inicio();
         count = 3;
    }
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
    function Page_7(){
        start_7();
        inicio();
         count = 3;
    }
    function Page_8(){
        start_8();
        inicio();
         count = 3;
    }


    var cant=6;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
   
    function start_3(){
        $("#ventana").load(ruta+'2-2-3/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_2_3()",
        titulo:"<center><h5><span>Selecciona</span> y <span>une</span> las palabras que tienen significados semejantes.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "2-2-3",
        nota:cal
        }
        );
        return false;  
    };
    function start_4(){
        $("#ventana").load(ruta+'2-2-4/index.php', 
        {
        next: "Page_5()", 
        procesar:"result_tipo_2_2_4()",
        titulo:"<center><h5><span>Escribe</span> el sinónimo de la palabra que está destacada. <span>Emplea</span> uno de los términos de las casillas.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "2-2-4",
        nota:cal
        }
        );
        return false;  
    };
    function start_5(){
        $("#ventana").load(ruta+'2-2-5/index.php', 
        {
        next: "Page_6()", 
        procesar:"result_tipo_2_2_5()",
        titulo:"<center><h5><span>Completa</span> las oraciones con los sinónimos de las palabras entre paréntesis.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "2-2-5",
        nota:cal
        }
        );
        return false;  
    };
    function start_6(){
        $("#ventana").load(ruta+'2-2-6/index.php', 
        {
        next: "Page_7()", 
        procesar:"result_tipo_2_2_6()",
        titulo:"<center><h5><span>Ordena</span> las sílabas de tal manera que formes una pareja de sinónimos, luego <span>escríbelos</span> en los espacios correspondientes.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "2-2-6",
        nota:cal
        }
        );
        return false;  
    };
    function start_7(){
        $("#ventana").load(ruta+'2-2-7/index.php', 
        {
        next: "Page_8()", 
        procesar:"result_tipo_2_2_7()",
        titulo:"<center><h5>En cada lista de palabras se ha colocado una que no es sinónima de las demás. <span>Localízala</span> y <span>seleccionala</span></h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "2-2-7",
        nota:cal
        }
        );
        return false;  
    };
    function start_8(){
        $("#ventana").load(ruta+'2-2-8/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_2_8()",
        titulo:"<center><h5>De los grupos de palabras sinónimas, hay una que no corresponde. <span>Escríbela</span> en el recuadro.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "2-2-8",
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