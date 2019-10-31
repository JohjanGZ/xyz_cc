<script type="text/javascript">
   function Page_15(){
        start_15();
        inicio();
        count = 3;
    }
   function  Page_16(){
        start_16();
        inicio();
         count = 3;
    }
   function Page_17(){
        start_17();
        inicio();
         count = 3;
    }
    function  Page_18(){
        start_18();
        inicio();
         count = 3;
    }
   function Page_19(){
        start_19();
        inicio();
         count = 3;
    }
    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_15(){
        $("#ventana").load(ruta+'1-2-15/index.php', 
        {
        next: "Page_16()", 
        procesar:"result_tipo_1_2_15()",
        /*titulo:"<center><h5><span class='ftitulo'>Encierra</span> con un círculo las sílabas <span class='ftitulo'>da-, de-, di-, do-, du-</span> en las siguientes palabras:.</h5></center>",*/
        restaurar:"start_15()",
        dir:ruta,
        cod: "1-2-15",
        nota:cal
        }
        );
        return false;  
    };
    function start_16(){
        $("#ventana").load(ruta+'1-2-16/index.php', 
        { 
        next: "Page_17()", 
        procesar:"result_tipo_1_2_16()",
        titulo:"<center><h5>¿Cuántos peces se mencionan en la canción?<span class='ftitulo'> Elije.</span></h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "1-2-16",
        nota:cal
        }
        );
        return false;
    };
    function start_17(){   
        $("#ventana").load(ruta+'1-2-17/index.php', 
        { 
        next: "Page_18()", 
        procesar:"result_tipo_1_2_17()",
        titulo:"<center><h5>¿Con quién conversan los peces? <span class='ftitulo'>Selecciona.</span></h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "1-2-17",
        nota:cal
        }          
        );
        return false;
    };
    function start_18(){   
        $("#ventana").load(ruta+'1-2-18/index.php', 
        { 
        next: "Page_19()", 
        procesar:"result_tipo_1_2_18()",
        titulo:"<center><h5>¿Qué hacen los peces en el mar?<span class='ftitulo'> Selecciona.</span></h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "1-2-18",
        nota:cal
        }          
        );
        return false;
    };
    function start_19(){   
        $("#ventana").load(ruta+'1-2-19/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_2_19()",
        titulo:"<center><h5><span class='ftitulo'>Señala</span> aquellos animales que no son peces.</h5></center>",
        restaurar:"start_19()",
        dir:ruta,
        cod: "1-2-19",
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