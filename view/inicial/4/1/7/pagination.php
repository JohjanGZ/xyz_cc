<script type="text/javascript">
  
   function Page_7(){
        start_7();
        inicio();
        count = 3;
    }

    var cant=1;
    var cal= 20/20;
    var ruta="../../../../exercises/inicial/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
   
    function start_7(){
        $("#ventana").load(ruta+'4-1-7/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_4_1_7()",
        titulo:"<center><h5><span>Observa</span> el número arriba de los recuadros y <span>selecciona</span> el número de figuras que se indica.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "4-1-7",
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