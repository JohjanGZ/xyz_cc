<script type="text/javascript">
    function Page_3(){
        start_3();
        inicio();
         count = 3;
    }
    function  Page_4(){
        start_4();
        inicio();
         count = 3;
    }
    function Page_5(){
        start_5();
        inicio();
          count = 3;
    }
    function Page_6(){
        start_6();
        inicio();
         count = 3;
    }
    var cant=4;
    var cal= cant/cant;
    console.log(cant);
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
   
    function start_3(){
        $("#ventana").load(ruta+'2-0-3/index.php', 
        { 
        next: "Page_4()", 
        procesar:"result_tipo_2_0_3()",
        titulo:"<center><h5><span>Reconoce</span> la mayúscula que encuentres en el siguiente texto.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "2-0-3",
        nota:cal
        }
        );
        return false;
    };
    function start_4(){
        $("#ventana").load(ruta+'2-0-4/index.php', 
        { 
        next: "Page_5()", 
        procesar:"result_tipo_2_0_4()",
        titulo:"<center><h5><span>Arrastra</span> las siguientes opciones y <span>completa</span> las oraciones. </h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "2-0-4",
        nota:cal
        }
        );
        return false;
    };
    function start_5(){
        $("#ventana").load(ruta+'2-0-5/index.php', 
        { 
        next: "Page_6()", 
        procesar:"result_tipo_2_0_5()",
        titulo:"<center><h5><span>Lee</span> atentamente el cuento, luego  <span>arrastra</span> el tipo de punto que reconozcas.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "2-0-5",
        nota:cal
        }
        );
        return false;
    };
    function start_6(){   
        $("#ventana").load(ruta+'2-0-6/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_2_0_6()",
        titulo:"<center><h5><span>Coloca</span> la letra adecuada y el punto en los casilleros para completar la historia.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "2-0-6",
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