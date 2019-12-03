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
    function  Page_7(){
        start_7();
        inicio();
         count = 3;
    }
    function Page_8(){
        start_8();
        inicio();
          count = 3;
    }
    function Page_9(){
        start_9();
        inicio();
         count = 3;
    }
    function  Page_10(){
        start_10();
        inicio();
         count = 3;
    }
    function Page_11(){
        start_11();
        inicio();
          count = 3;
    }
    function Page_12(){
        start_12();
        inicio();
          count = 3;
    }
    var cant=10;
    var cal= cant/cant;
    console.log(cant);
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
   
    function start_3(){
        $("#ventana").load(ruta+'2-1-3/index.php', 
        { 
        next: "Page_4()", 
        procesar:"result_tipo_2_1_3()",
        titulo:"<center><h5><span>Observa</span> los dibujos y <span>arrastra</span> dentro de los casilleros la letra inicial de cada uno.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "2-1-3",
        nota:cal
        }
        );
        return false;
    };
    function start_4(){
        $("#ventana").load(ruta+'2-1-4/index.php', 
        { 
        next: "Page_5()", 
        procesar:"result_tipo_2_1_4()",
        titulo:"<center><h5><span>Observa</span> los dibujos y <span>arrastra</span> dentro de los casilleros la letra inicial de cada uno. </h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "2-1-4",
        nota:cal
        }
        );
        return false;
    };
    function start_5(){
        $("#ventana").load(ruta+'2-1-5/index.php', 
        { 
        next: "Page_6()", 
        procesar:"result_tipo_2_1_5()",
        titulo:"<center><h5><span>Observa</span> los dibujos y <span>arrastra</span> dentro de los casilleros la letra inicial de cada uno.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "2-1-5",
        nota:cal
        }
        );
        return false;
    };
    function start_6(){   
        $("#ventana").load(ruta+'2-1-6/index.php', 
        { 
        next: "Page_7()", 
        procesar:"result_tipo_2_1_6()",
        titulo:"<center><h5><span>Observa</span> los dibujos y <span>arrastra</span> dentro de los casilleros la letra inicial de cada uno.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "2-1-6",
        nota:cal
        }          
        );
        return false;
    };
    function start_7(){   
        $("#ventana").load(ruta+'2-1-7/index.php', 
        { 
        next: "Page_8()", 
        procesar:"result_tipo_2_1_7()",
        titulo:"<center><h5><span>Escribe</span> la letra inicial de cada dibujo.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "2-1-7",
        nota:cal
        }          
        );
        return false;
    };
    function start_8(){   
        $("#ventana").load(ruta+'2-1-8/index.php', 
        { 
        next: "Page_9()", 
        procesar:"result_tipo_2_1_8()",
        titulo:"<center><h5><span>Escribe</span> la letra inicial de cada dibujo.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "2-1-8",
        nota:cal
        }          
        );
        return false;
    };
    function start_9(){   
        $("#ventana").load(ruta+'2-1-9/index.php', 
        { 
        next: "Page_10()", 
        procesar:"result_tipo_2_1_9()",
        titulo:"<center><h5>De acuerdo con el abecedario, <span>completa</span> las letras que faltan.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "2-1-9",
        nota:cal
        }          
        );
        return false;
    };
    function start_10(){   
        $("#ventana").load(ruta+'2-1-10/index.php', 
        { 
        next: "Page_11()", 
        procesar:"result_tipo_2_1_10()",
        titulo:"<center><h5><span>Observa</span> atentamente las siguientes listas de palabras y, de acuerdo con el orden alfabético, <span>relaciona</span> con la posición que le corresponde.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "2-1-10",
        nota:cal
        }          
        );
        return false;
    };
    function start_11(){   
        $("#ventana").load(ruta+'2-1-11/index.php', 
        { 
        next: "Page_12()", 
        procesar:"result_tipo_2_1_11()",
        titulo:"<center><h5><span>Observa</span> atentamente las siguientes listas de palabras y, de acuerdo con el orden alfabético, <span>relaciona</span> con la posición que le corresponde.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "2-1-11",
        nota:cal
        }          
        );
        return false;
    };
    function start_12(){   
        $("#ventana").load(ruta+'2-1-12/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_2_1_12()",
        titulo:"<center><h5><span>Observa</span> atentamente las siguientes listas de palabras y, de acuerdo con el orden alfabético, <span>relaciona</span> con la posición que le corresponde.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "2-1-12",
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