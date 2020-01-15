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
        $("#ventana").load(ruta+'4-4-1/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_4_1()",
        titulo:"<center><h5><span>Arrastra</span> lo que Dios creó a los recuadros en blanco.</h5></center>",
        restaurar:"start_1()",
        dir:ruta,
        cod: "4-4-1",
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