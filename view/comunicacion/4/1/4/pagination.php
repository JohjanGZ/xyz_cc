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
   function  Page_15(){
        start_15();
        inicio();
         count = 3;
    }
    function  Page_16(){
        start_16();
        inicio();
         count = 3;
    }

    var cant=5;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_12(){
        $("#ventana").load(ruta+'3-1-12/index.php', 
        { 
        next: "Page_13()", 
        procesar:"result_tipo_3_1_12()",
        titulo:"<center><h5><span>Ubica</span> las palabras separadas en sílabas en los casilleros, teniendo en cuenta que la sílaba tónica debe ir en el casillero sombreado.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "3-1-12",
        nota:cal
        }
        );
        return false;
    };
    function start_13(){
        $("#ventana").load(ruta+'3-1-13/index.php', 
        { 
        next: "Page_14()", 
        procesar:"result_tipo_3_1_13()",
        titulo:"<center><h5><span>Clasifica</span> las palabras las palabras en <i>agudas</i> o <i>graves</i>.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "3-1-13",
        nota:cal
        }
        );
        return false;
    };
    function start_14(){
        $("#ventana").load(ruta+'3-1-14/index.php', 
        { 
        next: "Page_15()", 
        procesar:"result_tipo_3_1_14()",
        titulo:"<center><h5><span>Arrastra</span> en la casilla la sílaba tónica de cada palahra.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "3-1-14",
        nota:cal
        }
        );
        return false;
    };
    function start_15(){
        $("#ventana").load(ruta+'3-1-15/index.php', 
        { 
        next: "Page_16()", 
        procesar:"result_tipo_3_1_15()",
        titulo:"<center><h5><span>Relaciona</span> los tipos de palabras con su respectiva descripción.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "3-1-15",
        nota:cal
        }
        );
        return false;
    };
    function start_16(){
        $("#ventana").load(ruta+'3-1-16/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_3_1_16()",
        titulo:"<center><h5><span>Selecciona</span> las palabras <i>graves</i>.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "3-1-16",
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