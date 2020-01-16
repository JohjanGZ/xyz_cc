<script type="text/javascript">
   function Page_1(){
        start_1();
        inicio();
        count = 3;
    }
   function  Page_2(){
        start_2();
        inicio();
         count = 3;
    }
   function Page_3(){
        start_3();
        inicio();
         count = 3;
    }
   function Page_4(){
        start_4();
        inicio();
         count = 3;
    }
   function  Page_5(){
        start_5();
        inicio();
         count = 3;
    }
   function Page_6(){
        start_6();
        inicio();
          count = 3;
    }
    var cant=6;
    var cal= cant/cant;
    console.log(cant);
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_1(){
        $("#ventana").load(ruta+'1-0-1/index.php', 
        {
        next: "Page_2()", 
        procesar:"result_tipo_1_0_1()",
        titulo:"<center><h5><span>Observa</span> los dibujos y <span>une</span> cada dibujo con su vocal inicial.</h5></center>",
        restaurar:"start_1()",
        dir:ruta,
        cod: "1-0-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_2(){
        $("#ventana").load(ruta+'1-0-2/index.php', 
        { 
        next: "Page_3()", 
        procesar:"result_tipo_1_0_2()",
        titulo:"<center><h5><span>Selecciona</span> la vocal correcta con la que comienza cada palabra.</h5></center>",
        restaurar:"start_2()",
        dir:ruta,
        cod:"1-0-2",
        nota:cal
        }
        );
        return false;
    };
    function start_3(){   
        $("#ventana").load(ruta+'1-0-3/index.php', 
        { 
        next: "Page_4()", 
        procesar:"result_tipo_1_0_3()",
        titulo:"<center><h5><span>Selecciona</span> los dibujos que lleven la vocal A.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod:"1-0-3",
        nota:cal
        }          
        );
        return false;
    };
    function start_4(){
        $("#ventana").load(ruta+'1-0-4/index.php', 
        {
            next: "Page_5()", 
            procesar:"result_tipo_1_0_4()",
            titulo:" <center><h5><span>Selecciona</span> los dibujos que lleven la vocal E.</h5></center>",
            restaurar:"start_4()",
            dir:ruta,
            cod:"1-0-4",
            nota:cal
        }
        );
        return false;
    };
    function start_5(){  
        $("#ventana").load(ruta+'1-0-5/index.php', 
        {   
        next: "Page_6()", 
        procesar:"result_tipo_1_0_5()",
            titulo:" <center><h5><span>Selecciona</span> los dibujos que lleven la vocal I.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "1-0-5",
         nota:cal
        }
        );
        return false;
    };
    function start_6(){  
        $("#ventana").load(ruta+'1-0-6/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_1_0_6()",
        titulo:"<center><h5><span>Selecciona</span> los dibujos dibujos que lleven la vocal U.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod:"1-0-6",
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