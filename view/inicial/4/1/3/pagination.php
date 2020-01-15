<script type="text/javascript">
  
   function Page_3(){
        start_3();
        inicio();
        count = 3;
    }

    var cant=1;
    var cal= 20/20;
    var ruta="../../../../exercises/inicial/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
   
    function start_3(){
        $("#ventana").load(ruta+'4-1-3/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_1_3()",
        titulo:"<center><h5><span>Observa</span> los recuadros y <span>selecciona</span> el que tenga solo una figura.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "4-1-3",
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