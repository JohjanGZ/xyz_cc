<script type="text/javascript">
   
   function Page_7(){
        start_7();
        inicio();
         count = 3;
    }
   function  Page_8(){
        start_8();
        inicio();
         count = 3;
    }
   function Page_9(){
        start_9();
        inicio();
          count = 3;
    }
    var cant=3;
    var cal= cant/cant;
    console.log(cant);
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    
    function start_7(){  
        $("#ventana").load(ruta+'1-0-7/index.php', 
        {   
        next: "Page_8()", 
        procesar:"result_tipo_1_0_7()",
        titulo:"",
        restaurar:"start_7()",
        dir:ruta,
        cod: "1-0-7",
         nota:cal
        }
        );
        return false;
    };
    function start_8(){  
        $("#ventana").load(ruta+'1-0-8/index.php', 
        {
        next: "Page_9()", 
        procesar:"result_tipo_1_0_8()",
        titulo:"<center><h5>¿Cuántos peces se mencionan en la canción? <span>Elije.</span></h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod:"1-0-8",
         nota:cal
        }
        );
        return false;
    };
    function start_9(){
        $("#ventana").load(ruta+'1-0-9/index.php', 
        {
            next: "resultado()", 
            procesar:"result_tipo_1_0_9()",
            titulo:" <center><h5>¿Con quién conversan los peces? <span>Selecciona</span>.</h5></center>",
            restaurar:"start_9()",
            dir:ruta,
            cod:"1-0-9",
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