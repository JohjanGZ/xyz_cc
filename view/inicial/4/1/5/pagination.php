<script type="text/javascript">
  
   function Page_5(){
        start_5();
        inicio();
        count = 3;
    }

    var cant=1;
    var cal= 20/20;
    var ruta="../../../../exercises/inicial/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
   
    function start_5(){
        $("#ventana").load(ruta+'4-1-5/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_1_5()",
        titulo:"<center><h5><span>Selecciona</span> el recuadro que tenga 5 figuras iguales.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "4-1-5",
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