<script type="text/javascript">
   function Page_22(){
        start_22();
        inicio();
        count = 3;
    }
   function  Page_23(){
        start_23();
        inicio();
         count = 3;
    }
   function Page_24(){
        start_24();
        inicio();
         count = 3;
    }
    function  Page_25(){
        start_25();
        inicio();
         count = 3;
    }
    function Page_26(){
        start_26();
        inicio();
        count = 3;
    }
   function  Page_27(){
        start_27();
        inicio();
         count = 3;
    }
   function Page_28(){
        start_28();
        inicio();
         count = 3;
    }
    function  Page_29(){
        start_29();
        inicio();
         count = 3;
    }
    function  Page_30(){
        start_30();
        inicio();
         count = 3;
    }
   function Page_31(){
        start_31();
        inicio();
         count = 3;
    }
    function  Page_32(){
        start_32();
        inicio();
         count = 3;
    }
    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_22(){
        $("#ventana").load(ruta+'1-3-22/index.php', 
        {
        next: "Page_23()", 
        procesar:"result_tipo_1_3_22()",
        titulo:"<center><h5><span class='ftitulo'>Marca</span> la palabra que corresponda a la imagen.</h5></center>",
        restaurar:"start_22()",
        dir:ruta,
        cod: "1-3-22",
        nota:cal
        }
        );
        return false;  
    };
    function start_23(){
        $("#ventana").load(ruta+'1-3-23/index.php', 
        { 
        next: "Page_24()", 
        procesar:"result_tipo_1_3_23()",
        titulo:"<center><h5><span class='ftitulo'>Marca</span> la palabra que corresponda a la imagen.</h5></center>",
        restaurar:"start_23()",
        dir:ruta,
        cod: "1-3-23",
        nota:cal
        }
        );
        return false;
    };
    function start_24(){   
        $("#ventana").load(ruta+'1-3-24/index.php', 
        { 
        next: "Page_25()", 
        procesar:"result_tipo_1_3_24()",
        titulo:"<center><h5><span class='ftitulo'>Completa</span> las palabras con <i>va, ve, vi, vo, vu</i>.</h5></center>",
        restaurar:"start_24()",
        dir:ruta,
        cod: "1-3-24",
        nota:cal
        }          
        );
        return false;
    };
    function start_25(){   
        $("#ventana").load(ruta+'1-3-25/index.php', 
        { 
        next: "Page_26()", 
        procesar:"result_tipo_1_3_25()",
        titulo:"<center><h5><span class='ftitulo'>Completa</span> las palabras con <i>va, ve, vi, vo, vu</i>.</h5></center>",
        restaurar:"start_25()",
        dir:ruta,
        cod: "1-3-25",
        nota:cal
        }          
        );
        return false;
    };
    function start_26(){   
        $("#ventana").load(ruta+'1-3-26/index.php', 
        { 
        next: "Page_27()", 
        procesar:"result_tipo_1_3_26()",
        titulo:"<center><h5><span class='ftitulo'>Completa</span> las palabras con <i>va, ve, vi, vo, vu</i>.</h5></center>",
        restaurar:"start_26()",
        dir:ruta,
        cod: "1-3-26",
        nota:cal
        }          
        );
        return false;
    };
    function start_27(){   
        $("#ventana").load(ruta+'1-3-27/index.php', 
        { 
        next: "Page_28()", 
        procesar:"result_tipo_1_3_27()",
        titulo:"<center><h5><span class='ftitulo'>Ordena</span> las sílabas y forma palabras. <span>Guíate</span> de las imágenes.</h5></center>",
        restaurar:"start_27()",
        dir:ruta,
        cod: "1-3-27",
        nota:cal
        }          
        );
        return false;
    };
    function start_28(){   
        $("#ventana").load(ruta+'1-3-28/index.php', 
        { 
        next: "Page_29()", 
        procesar:"result_tipo_1_3_28()",
        titulo:"<center><h5><span class='ftitulo'>Ordena</span> las sílabas y forma palabras. <span>Guíate</span> de las imágenes.</h5></center>",
        restaurar:"start_28()",
        dir:ruta,
        cod: "1-3-28",
        nota:cal
        }          
        );
        return false;
    };
    function start_29(){   
        $("#ventana").load(ruta+'1-3-29/index.php', 
        { 
        next: "Page_30()", 
        procesar:"result_tipo_1_3_29()",
        titulo:"<center><h5><span class='ftitulo'>Forma</span> oraciones con las siguientes palabras.</h5></center>",
        restaurar:"start_29()",
        dir:ruta,
        cod: "1-3-29",
        nota:cal
        }          
        );
        return false;
    };
    function start_30(){   
        $("#ventana").load(ruta+'1-3-30/index.php', 
        { 
        next: "Page_31()", 
        procesar:"result_tipo_1_3_30()",
        titulo:"<center><h5><span class='ftitulo'>Señala</span> la palabra que corresponde con la imagen.</h5></center>",
        restaurar:"start_30()",
        dir:ruta,
        cod: "1-3-30",
        nota:cal
        }          
        );
        return false;
    };
    function start_31(){   
        $("#ventana").load(ruta+'1-3-31/index.php', 
        { 
        next: "Page_32()", 
        procesar:"result_tipo_1_3_31()",
        titulo:"<center><h5><span class='ftitulo'>Señala</span> la palabra que corresponde con la imagen.</h5></center>",
        restaurar:"start_31()",
        dir:ruta,
        cod: "1-3-31",
        nota:cal
        }          
        );
        return false;
    };
    function start_32(){   
        $("#ventana").load(ruta+'1-3-32/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_3_32()",
        titulo:"<center><h5><span class='ftitulo'>Señala</span> la palabra que corresponde con la imagen.</h5></center>",
        restaurar:"start_32()",
        dir:ruta,
        cod: "1-3-32",
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