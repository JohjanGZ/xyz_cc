<script type="text/javascript">   
    // Palabras con Ñ
    function Page_4(){
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
    function Page_7(){
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
    function Page_10(){
        start_10();
        inicio();
        count = 3;
    }
    function Page_11(){
        start_11();
        inicio();
        count = 3;
    }
    // Palabras con CH
    function Page_12(){
        start_12();
        inicio();
        count = 3;
    }
    function Page_13(){
        start_13();
        inicio();
        count = 3;
    }
    function Page_14(){
        start_14();
        inicio();
        count = 3;
    }
    function Page_15(){
        start_15();
        inicio();
        count = 3;
    }
    // Palabras con X
    function Page_16(){
        start_16();
        inicio();
        count = 3;
    }
    function Page_17(){
        start_17();
        inicio();
        count = 3;
    }
    function Page_18(){
        start_18();
        inicio();
        count = 3;
    }
    function Page_19(){
        start_19();
        inicio();
        count = 3;
    }
    function Page_20(){
        start_20();
        inicio();
        count = 3;
    }
    // Palabras con W
    function Page_21(){
        start_21();
        inicio();
        count = 3;
    }
    // Palabras con K
    function Page_22(){
        start_22();
        inicio();
        count = 3;
    }
    function Page_23(){
        start_23();
        inicio();
        count = 3;
    }
    function Page_24(){
        start_24();
        inicio();
        count = 3;
    }
    // Palabras con GÜ
    function Page_25(){
        start_25();
        inicio();
        count = 3;
    }
    function Page_26(){
        start_26();
        inicio();
        count = 3;
    }
    function Page_27(){
        start_27();
        inicio();
        count = 3;
    }
    function Page_28(){
        start_28();
        inicio();
        count = 3;
    }
    var cant=5;
    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    // Palabras con Ñ
    function start_4(){   
        $("#ventana").load(ruta+'1-6-4/index.php', 
        { 
        next: "Page_5()", 
        procesar:"result_tipo_1_6_4()",
        titulo:"<center><h5><span class='ftitulo'>ña - ñe - ñi - ño - ñu</span><br><span class='ftitulo'>Completa</span> el crucigrama y <span class='ftitulo'>descubre</span> la palabra escondida.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "1-6-4",
        nota:cal
        }          
        );
        return false;
    };
    function start_5(){   
        $("#ventana").load(ruta+'1-6-5/index.php', 
        { 
        next: "Page_6()", 
        procesar:"result_tipo_1_6_5()",
        titulo:"<center><h5><span class='ftitulo'>ña - ñe - ñi - ño - ñu</span><br><span class='ftitulo'>Completa</span> el crucigrama y <span class='ftitulo'>descubre</span> la palabra escondida.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "1-6-5",
        nota:cal
        }          
        );
        return false;
    };
    function start_6(){   
        $("#ventana").load(ruta+'1-6-6/index.php', 
        { 
        next: "Page_7()", 
        procesar:"result_tipo_1_6_6()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la sílaba que lleva cada palabra.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "1-6-6",
        nota:cal
        }          
        );
        return false;
    };
    function start_7(){   
        $("#ventana").load(ruta+'1-6-7/index.php', 
        { 
        next: "Page_8()", 
        procesar:"result_tipo_1_6_7()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la sílaba que lleva cada palabra.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "1-6-7",
        nota:cal
        }          
        );
        return false;
    };
    function start_8(){   
        $("#ventana").load(ruta+'1-6-8/index.php', 
        { 
        next: "Page_9()", 
        procesar:"result_tipo_1_6_8()",
        titulo:"<center><h5><span class='ftitulo'>Escribe</span> el nombre de las imágenes.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "1-6-8",
        nota:cal
        }          
        );
        return false;
    };
    function start_9(){   
        $("#ventana").load(ruta+'1-6-9/index.php', 
        { 
        next: "Page_10()", 
        procesar:"result_tipo_1_6_9()",
        titulo:"<center><h5><span class='ftitulo'>Escribe</span> el plural de las imágenes.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "1-6-9",
        nota:cal
        }          
        );
        return false;
    };
    function start_10(){   
        $("#ventana").load(ruta+'1-6-10/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_6_10()",
        titulo:"<center><h5><span class='ftitulo'>Escribe</span> el plural de las imágenes.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "1-6-10",
        nota:cal
        }          
        );
        return false;
    };
    function start_11(){   
        $("#ventana").load(ruta+'1-6-11/index.php', 
        { 
        next: "Page_12()", 
        procesar:"result_tipo_1_6_11()",
        titulo:"<center><h5><span class='ftitulo'>Junta</span> las sílabas y forma palabras.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "1-6-11",
        nota:cal
        }          
        );
        return false;
    };
    // Palabras con CH
    function start_12(){   
        $("#ventana").load(ruta+'1-6-12/index.php', 
        { 
        next: "Page_13()", 
        procesar:"result_tipo_1_6_12()",
        titulo:"<center><h5><span class='ftitulo'>cha - che - chi - cho - chu</span><br><span class='ftitulo'>Ordena</span> las sílabas y <span class='ftitulo'>escribe</span> las palabras.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "1-6-12",
        nota:cal
        }          
        );
        return false;
    };
    function start_13(){   
        $("#ventana").load(ruta+'1-6-13/index.php', 
        { 
        next: "Page_14()", 
        procesar:"result_tipo_1_6_13()",
        titulo:"<center><h5><span class='ftitulo'>cha - che - chi - cho - chu</span><br><span class='ftitulo'>Ordena</span> las sílabas y <span class='ftitulo'>escribe</span> las palabras.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "1-6-13",
        nota:cal
        }          
        );
        return false;
    };
    function start_14(){   
        $("#ventana").load(ruta+'1-6-14/index.php', 
        { 
        next: "Page_15()", 
        procesar:"result_tipo_1_6_14()",
        titulo:"<center><h5><span class='ftitulo'>Ordena</span> las palabras y <span class='ftitulo'>escribe</span> la oración.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "1-6-14",
        nota:cal
        }          
        );
        return false;
    };
    function start_15(){   
        $("#ventana").load(ruta+'1-6-15/index.php', 
        { 
        next: "Page_16()", 
        procesar:"result_tipo_1_6_15()",
        titulo:"<center><h5><span class='ftitulo'>Ordena</span> las palabras y <span class='ftitulo'>escribe</span> la oración.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "1-6-15",
        nota:cal
        }          
        );
        return false;
    };
    // Palabra con X
    function start_16(){   
        $("#ventana").load(ruta+'1-6-16/index.php', 
        { 
        next: "Page_17()", 
        procesar:"result_tipo_1_6_16()",
        titulo:"<center><h5><span class='ftitulo'>xa - xe - xi - xo - xu</span><br><span class='ftitulo'>Arrastra</span> cada una de las palabras debajo del dibujo con el que esta relacionada.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "1-6-16",
        nota:cal
        }          
        );
        return false;
    };
    function start_17(){   
        $("#ventana").load(ruta+'1-6-17/index.php', 
        { 
        next: "Page_18()", 
        procesar:"result_tipo_1_6_17()",
        titulo:"<center><h5><span class='ftitulo'>xa - xe - xi - xo - xu</span><br><span class='ftitulo'>Arrastra</span> cada una de las palabras debajo del dibujo con el que esta relacionada.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "1-6-17",
        nota:cal
        }          
        );
        return false;
    };
    function start_18(){   
        $("#ventana").load(ruta+'1-6-18/index.php', 
        { 
        next: "Page_19()", 
        procesar:"result_tipo_1_6_18()",
        titulo:"<center><h5><span class='ftitulo'>xa - xe - xi - xo - xu</span><br><span class='ftitulo'>Arrastra</span> cada una de las palabras debajo del dibujo con el que esta relacionada.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "1-6-18",
        nota:cal
        }          
        );
        return false;
    };
    function start_19(){   
        $("#ventana").load(ruta+'1-6-19/index.php', 
        { 
        next: "Page_20()", 
        procesar:"result_tipo_1_6_19()",
        titulo:"<center><h5><span class='ftitulo'>Completa</span> las oraciones con las siguientes palabras.</h5></center>",
        restaurar:"start_19()",
        dir:ruta,
        cod: "1-6-19",
        nota:cal
        }          
        );
        return false;
    };
    function start_20(){   
        $("#ventana").load(ruta+'1-6-20/index.php', 
        { 
        next: "Page_21()", 
        procesar:"result_tipo_1_6_20()",
        titulo:"<center><h5><span class='ftitulo'>Completa</span> las oraciones con las siguientes palabras.</h5></center>",
        restaurar:"start_20()",
        dir:ruta,
        cod: "1-6-20",
        nota:cal
        }          
        );
        return false;
    };
    // Palabras con W
    function start_21(){   
        $("#ventana").load(ruta+'1-6-21/index.php', 
        { 
        next: "Page_22()", 
        procesar:"result_tipo_1_6_21()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra</span> el nombre de cada imagen.</h5></center>",
        restaurar:"start_21()",
        dir:ruta,
        cod: "1-6-21",
        nota:cal
        }          
        );
        return false;
    };
    // Palabras con K
    function start_22(){   
        $("#ventana").load(ruta+'1-6-22/index.php', 
        { 
        next: "Page_23()", 
        procesar:"result_tipo_1_6_22()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra</span> el nombre de cada imagen.</h5></center>",
        restaurar:"start_22()",
        dir:ruta,
        cod: "1-6-22",
        nota:cal
        }          
        );
        return false;
    };
    function start_23(){   
        $("#ventana").load(ruta+'1-6-23/index.php', 
        { 
        next: "Page_24()", 
        procesar:"result_tipo_1_6_23()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra</span> el nombre de cada imagen.</h5></center>",
        restaurar:"start_23()",
        dir:ruta,
        cod: "1-6-23",
        nota:cal
        }          
        );
        return false;
    };
    function start_24(){   
        $("#ventana").load(ruta+'1-6-24/index.php', 
        { 
        next: "Page_25()", 
        procesar:"result_tipo_1_6_24()",
        titulo:"<center><h5><span class='ftitulo'>Ordena</span> las siguientes palabras y <span class='ftitulo'>escribe</span> las oraciones.</h5></center>",
        restaurar:"start_24()",
        dir:ruta,
        cod: "1-6-24",
        nota:cal
        }          
        );
        return false;
    };
    // Palabras con GÜ
    function start_25(){   
        $("#ventana").load(ruta+'1-6-25/index.php', 
        { 
        next: "Page_26()", 
        procesar:"result_tipo_1_6_25()",
        titulo:"<center><h5><span class='ftitulo'>güe - güi</span><br><span class='ftitulo'>escribe</span> el nombre de cada imagen.</h5></center>",
        restaurar:"start_25()",
        dir:ruta,
        cod: "1-6-25",
        nota:cal
        }          
        );
        return false;
    };
    function start_26(){   
        $("#ventana").load(ruta+'1-6-26/index.php', 
        { 
        next: "Page_27()", 
        procesar:"result_tipo_1_6_26()",
        titulo:"<center><h5><span class='ftitulo'>Completa</span> según el ejemplo.</h5></center>",
        restaurar:"start_26()",
        dir:ruta,
        cod: "1-6-26",
        nota:cal
        }          
        );
        return false;
    };
    function start_27(){   
        $("#ventana").load(ruta+'1-6-27/index.php', 
        { 
        next: "Page_28()", 
        procesar:"result_tipo_1_6_27()",
        titulo:"<center><h5><span class='ftitulo'>Coloca</span> cada palabra donde corresponde.<br> Sabiendo que.<br><span class='ftitulo'>gue - gui</span> la u no suena <br> <span class='ftitulo'>güe - güi</span> la u sí suena</h5></center>",
        restaurar:"start_27()",
        dir:ruta,
        cod: "1-6-27",
        nota:cal
        }          
        );
        return false;
    };
    function start_28(){   
        $("#ventana").load(ruta+'1-6-28/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_6_28()",
        titulo:"<center><h5><span class='ftitulo'>Completa.</span></h5></center>",
        restaurar:"start_28()",
        dir:ruta,
        cod: "1-6-28",
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