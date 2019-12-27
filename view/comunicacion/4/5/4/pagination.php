<script type="text/javascript">
   
   function Page_11(){
        start_11();
        inicio();
        count = 3;
    }
   function  Page_12(){
        start_12();
        inicio();
         count = 3;
    }
    function  Page_13(){
        start_13();
        inicio();
         count = 3;
    }
    function  Page_14(){
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

    var cant=6;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
    // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_11(){
        $("#ventana").load(ruta+'4-5-11/index.php', 
        {
        next: "Page_12()", 
        procesar:"result_tipo_4_5_11()",
        titulo:"<center><h5><span>Observa</span> las imágenes y <span>completa</span> con <i>b</i> o <i>v</i> según corresponda.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "4-5-11",
        nota:cal
        }
        );
        return false;  
    };
    function start_12(){
        $("#ventana").load(ruta+'4-5-12/index.php', 
        {
        next: "Page_13()", 
        procesar:"result_tipo_4_5_12()",
        titulo:"<center><h5><span>Observa</span> las imágenes y <span>completa</span> el crucigrama.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "4-5-12",
        nota:cal
        }
        );
        return false;  
    };
    function start_13(){
        $("#ventana").load(ruta+'4-5-13/index.php', 
        {
        next: "Page_14()", 
        procesar:"result_tipo_4_5_13()",
        titulo:"<center><h5><span>Selecciona</span> el nombre correcto de cada dibujo.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "4-5-13",
        nota:cal
        }
        );
        return false;  
    };
    function start_14(){
        $("#ventana").load(ruta+'4-5-14/index.php', 
        {
        next: "Page_15()", 
        procesar:"result_tipo_4_5_14()",
        titulo:"<center><h5><span>Completa</span> las palabras <span>seleccionando</span> <i>b</i> o <i>v</i> según sea correcta su escritura.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "4-5-14",
        nota:cal
        }
        );
        return false;  
    };
    function start_15(){
        $("#ventana").load(ruta+'4-5-15/index.php', 
        {
        next: "Page_16()", 
        procesar:"result_tipo_4_5_15()",
        titulo:"<center><h5><span>Arrastra</span> el nombre correspondiente a cada imagen.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "4-5-15",
        nota:cal
        }
        );
        return false;  
    };
    function start_16(){
        $("#ventana").load(ruta+'4-5-16/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_4_5_16()",
        titulo:"<center><h5><span>Localiza</span> en la sopa de letras las siguientes palabras: </h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "4-5-16",
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