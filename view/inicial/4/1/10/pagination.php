<script type="text/javascript">
  
   function Page_1(){
        start_1();
        inicio();
        count = 3;
    }

    var cant=1;
    var cal= 20/20;
    var ruta="../../../../exercises/inicial/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
   
    function start_1(){
        $("#ventana").load(ruta+'5-0-1/index.php', 
        {
        next: "Page_2()", 
        procesar:"result_tipo_5_0_1()",
        titulo:"<center><h5><span>Ordena</span> los siguientes elementos de acuerdo a cómo suceden en el texto.</h5></center>",
        restaurar:"start_1()",
        dir:ruta,
        cod: "5-0-1",
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