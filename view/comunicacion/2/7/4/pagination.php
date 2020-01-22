<script type="text/javascript">
 
    function Page_18(){
        start_18();
        inicio();
        count = 3;
    }

    var cant=1;
    var cal= 20/20;
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
  

    function start_18(){
        $("#ventana").load(ruta+'2-7-18/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_7_18()",
        titulo:"<center><h5><span>Observa</span> los dibujos y <span>completa</span> las  analogías.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "2-7-18",
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