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
        $("#ventana").load(ruta+'4-3-2/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_3_2()",
        titulo:"<center><h5><span>Observa</span> las figuras, luego <span>arrastra</span> cada figura al recuadro correspondiente.</h5></center>",
        restaurar:"start_2()",
        dir:ruta,
        cod: "4-3-2",
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