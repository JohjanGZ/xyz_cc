<script type="text/javascript">
  
    function  Page_7(){
        start_7();
        inicio();
         count = 3;
    }

    var cant=1;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    function start_7(){
        $("#ventana").load(ruta+'4-6-7/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_4_6_7()",
        titulo:"<center><h5><span>Lee</span> atentamente y luego ordena los números del 1 al 6 de acuerdo a los hechos durante una mesa redonda.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "4-6-7",
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