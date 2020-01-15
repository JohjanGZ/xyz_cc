<script type="text/javascript">
  
   function Page_2(){
        start_2();
        inicio();
        count = 3;
    }

    var cant=1;
    var cal= 20/20;
    var ruta="../../../../exercises/inicial/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
   
    function start_2(){
        $("#ventana").load(ruta+'4-1-2/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_1_2()",
        titulo:"<center><h5><span>Observa</span> los recuadros y <span>selecciona</span> los que tienen más elementos.</h5></center>",
        restaurar:"start_2()",
        dir:ruta,
        cod: "4-1-2",
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