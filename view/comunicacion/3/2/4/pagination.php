<script type="text/javascript">
   
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

    var cant=2;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_12(){
        $("#ventana").load(ruta+'3-2-12/index.php', 
        {
        next: "Page_13()", 
        procesar:"result_tipo_3_2_12()",
        titulo:"<center><h5><span>Lee</span> la palabra, <span>selecciona</span> la cantidad de sílabas y <span>elige</span> si es diptongo o hiato.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "3-2-12",
        nota:cal
        }
        );
        return false;  
    };
    function start_13(){
        $("#ventana").load(ruta+'3-2-13/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_3_2_13()",
        titulo:"<center><h5><span>Arrastra</span> las palabras y <span>ubícalas</span> donde correspondan.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "3-2-13",
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