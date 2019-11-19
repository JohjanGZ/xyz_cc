<script type="text/javascript">
    function  Page_lectura_6_1(){
        start_lectura_6_1();
        inicio();
         count = 3;
    }
    function  Page_lectura_6_2(){
        start_lectura_6_2();
        inicio();
         count = 3;
    }
    function  Page_lectura_6_3(){
        start_lectura_6_3();
        inicio();
         count = 3;
    }
    function  Page_lectura_6_4(){
        start_lectura_6_4();
        inicio();
         count = 3;
    }

    function  Page_29(){
        start_29();
        inicio();
         count = 3;
    }
    function  Page_30(){
        start_30();
        inicio();
         count = 3;
    }
    function  Page_31(){
        start_31();
        inicio();
         count = 3;
    } 
    function  Page_32(){
        start_32();
        inicio();
         count = 3;
    } 
    function  Page_33(){
        start_33();
        inicio();
         count = 3;
    }
    function  Page_34(){
        start_34();
        inicio();
         count = 3;
    } 
   
    var cant=5;
    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_6_1(){   
        $("#ventana").load(ruta+'lectura1-6-4-1/index.php', 
        { 
        next: "Page_lectura_6_2()", 
        procesar:"result_tipo_1_6_1()",
        // titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y responde.</h5></center>",
        restaurar:"start_lectura_6_1()",
        dir:ruta,
        cod: "lectura1-6-4-1",
        nota:cal
        }          
        );
        return false;
    };
    function start_lectura_6_2(){   
        $("#ventana").load(ruta+'lectura1-6-4-2/index.php', 
        { 
        next: "Page_lectura_6_3()", 
        procesar:"result_tipo_1_6_2()",
        // titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y responde.</h5></center>",
        restaurar:"start_lectura_6_2()",
        dir:ruta,
        cod: "lectura1-6-4-2",
        nota:cal
        }          
        );
        return false;
    };
    function start_lectura_6_3(){   
        $("#ventana").load(ruta+'lectura1-6-4-3/index.php', 
        { 
        next: "Page_lectura_6_4()", 
        procesar:"result_tipo_1_6_3()",
        // titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y responde.</h5></center>",
        restaurar:"start_lectura_6_3()",
        dir:ruta,
        cod: "lectura1-6-4-3",
        nota:cal
        }          
        );
        return false;
    };
    function start_lectura_6_4(){   
        $("#ventana").load(ruta+'lectura1-6-4-4/index.php', 
        { 
        next: "Page_5()", 
        procesar:"result_tipo_1_6_4()",
        // titulo:"<center><h5><span class='ftitulo'>Lee</span> atentamente y responde.</h5></center>",
        restaurar:"start_lectura_6_4()",
        dir:ruta,
        cod: "lectura1-6-4-4",
        nota:cal
        }          
        );
        return false;
    };
    function start_29(){   
        $("#ventana").load(ruta+'1-6-29/index.php', 
        { 
        next: "Page_30()", 
        procesar:"result_tipo_1_6_29()",
        titulo:"<center><h5><span class='ftitulo'>Observa</span> las princesas y <span class='ftitulo'>selecciona</span> la que pertenece al cuento.</h5></center>",
        restaurar:"start_29()",
        dir:ruta,
        cod: "1-6-29",
        nota:cal
        }          
        );
        return false;
    };
    function start_30(){   
        $("#ventana").load(ruta+'1-6-30/index.php', 
        { 
        next: "Page_31()", 
        procesar:"result_tipo_1_6_30()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la repuesta correcta <br>¿Qué le gustaba a la princesa?.</h5></center>",
        restaurar:"start_30()",
        dir:ruta,
        cod: "1-6-30",
        nota:cal
        }          
        );
        return false;
    };
    function start_31(){   
        $("#ventana").load(ruta+'1-6-31/index.php', 
        { 
        next: "Page_32()", 
        procesar:"result_tipo_1_6_31()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la repuesta correcta <br>¿Dónde dejó la rana la bolita?.</h5></center>",
        restaurar:"start_31()",
        dir:ruta,
        cod: "1-6-31",
        nota:cal
        }          
        );
        return false;
    };
    function start_32(){   
        $("#ventana").load(ruta+'1-6-32/index.php', 
        { 
        next: "Page_33()", 
        procesar:"result_tipo_1_6_32()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la repuesta correcta <br>¿Dónde perdio la bolita de oro?.</h5></center>",
        restaurar:"start_32()",
        dir:ruta,
        cod: "1-6-32",
        nota:cal
        }          
        );
        return false;
    };
    function start_33(){   
        $("#ventana").load(ruta+'1-6-33/index.php', 
        { 
        next: "Page_34()", 
        procesar:"result_tipo_1_6_33()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la repuesta correcta <br>¿Que le pidió la rana a cambio de la bolita de oro?.</h5></center>",
        restaurar:"start_33()",
        dir:ruta,
        cod: "1-6-33",
        nota:cal
        }          
        );
        return false;
    };
    function start_34(){   
        $("#ventana").load(ruta+'1-6-34/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_6_34()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> los enunciados y <span class='ftitulo'>selecciona</span> verdadero o falso según los hechos de la lectura.</h5></center>",
        restaurar:"start_34()",
        dir:ruta,
        cod: "1-6-34",
        nota:cal
        }          
        );
        return false;
    };

    function resultado(){
        $("#ventana").load('../../../exercises/resultado/resultado.php');
        return false;
    };
</script>