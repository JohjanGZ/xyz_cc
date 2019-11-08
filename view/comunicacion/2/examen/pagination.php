<script type="text/javascript">
   function  Page_1(){
        start_1();
        inicio();
         count = 3;
    }
   function Page_2(){
        start_2();
        inicio();
        count = 3;
    }
    function  Page_3(){
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
    function  Page_7(){
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
    function  Page_12(){
        start_12();
        inicio();
         count = 3;
    }
   function Page_13(){
        start_13();
        inicio();
        count = 3;
    }
    function  Page_14(){
        start_14();
        inicio();
         count = 3;
    }
   function Page_15(){
        start_15();
        inicio();
        count = 3;
    }
    function  Page_16(){
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
   function  Page_19(){
        start_19();
        inicio();
         count = 3;
    }
   function Page_20(){
        start_20();
        inicio();
         count = 3;
    }
    function  Page_21(){
        start_21();
        inicio();
         count = 3;
    }
    function Page_22(){
        start_22();
        inicio();
        count = 3;
    }
   function  Page_23(){
        start_23();
        inicio();
         count = 3;
    }
   function Page_24(){
        start_24();
        inicio();
         count = 3;
    }
    function  Page_25(){
        start_25();
        inicio();
         count = 3;
    }
    function Page_26(){
        start_26();
        inicio();
        count = 3;
    }
   function  Page_27(){
        start_27();
        inicio();
         count = 3;
    }
   function Page_28(){
        start_28();
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
   function Page_31(){
        start_31();
        inicio();
         count = 3;
    }
    function  Page_32(){
        start_32();
        inicio();
         count = 3;
    }
   function Page_33(){
        start_33();
        inicio();
        count = 3;
    }
   function  Page_34(){
        start_34();
        inicio();
         count = 3;
    }
   function Page_35(){
        start_35();
        inicio();
         count = 3;
    }
    function  Page_36(){
        start_36();
        inicio();
         count = 3;
    }

    function Paginas(num_page){
        switch (num_page) {
            case 1: 
                Page_1()
                break;
            case 2: 
                Page_2()
                break;
            case 3: 
                Page_3()
                break;
            case 4: 
                Page_4()
                break;
            case 5: 
                Page_5()
                break;
            case 6: 
                Page_6()
                break;
            case 7: 
                Page_7()
                break;
            case 8: 
                Page_8()
                break;
            case 9: 
                Page_9()
                break;
            case 10:
                Page_10()
                break;
            case 11:
                Page_11()
                break;
            case 12:
                Page_12()
                break;
            case 13:
                Page_13()
                break;
            case 14:
                Page_14()
                break;
            case 15:
                Page_15()
                break;
            case 16:
                Page_16()
                break;
            case 17:
                Page_17()
                break;
            case 18:
                Page_18()
                break;
            case 19:
                Page_19()
                break;
            case 20:
                Page_20()
                break;
            case 21:
                Page_21()
                break;
            case 22:
                Page_22()
                break;
            case 23:
                Page_23()
                break;
            case 24:
                Page_24()
                break;
            case 25:
                Page_25()
                break;
            case 26:
                Page_26()
                break;
            case 27:
                Page_27()
                break;
            case 28:
                Page_28()
                break;
            case 29:
                Page_29()
                break;
            case 30:
                Page_30()
                break;
            case 31:
                Page_31()
                break;
            case 32:
                Page_32()
                break;
            case 33:
                Page_33()
                break;
            case 34:
                Page_34()
                break;
            case 35:
                Page_35()
                break;
            case 36:
                Page_36()
                break;
        }
    } 

    //Define la cantidad de numeros aleatorios.
    var cantidadNumeros = 36;
    var num_page = []

    while(num_page.length < cantidadNumeros ){
        var numeroAleatorio = Math.floor(Math.random()*cantidadNumeros)+1;
        var existe = false;
        for(var i=0;i<num_page.length;i++){
            if(num_page[i] == numeroAleatorio){
                existe = true;
                break;
            }
        }
        if(!existe){
            num_page[num_page.length] = numeroAleatorio;
        }
    }
    //console.log(num_page);
    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_1(){
        $("#ventana").load(ruta+'1-2-1/index.php', 
        {
        next: "Page_"+num_page[0]+"()", 
        procesar:"result_tipo_1_2_1()",
        titulo:"<center><h5><span class='ftitulo'>Encierra</span> con un círculo las sílabas <span class='ftitulo'>da-, de-, di-, do-, du-</span> en las siguientes palabras:.</h5></center>",
        restaurar:"start_1()",
        dir:ruta,
        cod: "1-2-1",
        nota:cal
        }
        );
        return false;  
    };
    function start_2(){
        $("#ventana").load(ruta+'1-2-2/index.php', 
        { 
        next: "Page_"+num_page[1]+"()", 
        procesar:"result_tipo_1_2_2()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra</span> las palabras, colocando las sílabas, segun se indica.</h5></center>",
        restaurar:"start_2()",
        dir:ruta,
        cod: "1-2-2",
        nota:cal
        }
        );
        return false;
    };
    function start_3(){   
        $("#ventana").load(ruta+'1-2-3/index.php', 
        { 
        next: "Page_"+num_page[2]+"()", 
        procesar:"result_tipo_1_2_3()",
        titulo:"<center><h5><span class='ftitulo'>Observa</span> la letra que tiene cada pescador en su bote y <span class='ftitulo'>une</span> sus respectivas cañas con los peces que indica cada letra.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "1-2-3",
        nota:cal
        }          
        );
        return false;
    };
    function start_4(){   
        $("#ventana").load(ruta+'1-2-4/index.php', 
        { 
        next: "Page_"+num_page[3]+"()", 
        procesar:"result_tipo_1_2_4()",
        titulo:"<center><h5><span class='ftitulo'>Indica</span>, según el poema, ¿en dónde siente esas hermosas palabras?.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "1-2-4",
        nota:cal
        }          
        );
        return false;
    };
    function start_5(){
        $("#ventana").load(ruta+'1-2-5/index.php', 
        {
        next: "Page_"+num_page[4]+"()", 
        procesar:"result_tipo_1_2_5()",
        titulo:"<center><h5><span class='ftitulo'>Pronuncia</span> en voz alta el nombre de cada imagen y <span>marca</span> con color rojo el nombre de las imágenes que comienzan con <span>d</span>, y con color azul los que comienzan con <span>f</span>.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "1-2-5",
        nota:cal
        }
        );
        return false;  
    };
    function start_6(){   
        $("#ventana").load(ruta+'1-2-6/index.php', 
        { 
        next: "Page_"+num_page[5]+"()", 
        procesar:"result_tipo_1_2_6()",
        titulo:"<center><h5><span class='ftitulo'>Marca</span> el círculo que contiene la sílaba <span>ta-</span>.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "1-2-6",
        nota:cal
        }          
        );
        return false;
    };
    function start_7(){
        $("#ventana").load(ruta+'1-2-7/index.php', 
        {
        next: "Page_"+num_page[6]+"()", 
        procesar:"result_tipo_1_2_7()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> las siluestas que se encuentren en igual posición que la figura modelo.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "1-2-7",
        nota:cal
        }
        );
        return false;  
    };
    function start_8(){
        $("#ventana").load(ruta+'1-2-8/index.php', 
        { 
        next: "Page_"+num_page[7]+"()", 
        procesar:"result_tipo_1_2_8()",
        titulo:"<center><h5><span class='ftitulo'>Observa</span> la imagen y <span class='ftitulo'>selecciona</span> que frutas puedes reconocer.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "1-2-8",
        nota:cal
        }
        );
        return false;
    };
    function start_9(){   
        $("#ventana").load(ruta+'1-2-9/index.php', 
        { 
        next: "Page_"+num_page[8]+"()", 
        procesar:"result_tipo_1_2_9()",
        titulo:"<center><h5><span class='ftitulo'>Indica</span>, según el poema, ¿en dónde siente esas hermosas palabras?.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "1-2-9",
        nota:cal
        }          
        );
        return false;
    };
    function start_10(){
        $("#ventana").load(ruta+'1-2-10/index.php', 
        {
        next: "Page_"+num_page[9]+"()", 
        procesar:"result_tipo_1_2_10()",
        titulo:"<center><h5><span class='ftitulo'>Relaciona</span> cada imagen con su respectiva palabra.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "1-2-10",
        nota:cal
        }
        );
        return false;  
    };
    function start_11(){
        $("#ventana").load(ruta+'1-2-11/index.php', 
        { 
        next: "Page_"+num_page[10]+"()", 
        procesar:"result_tipo_1_2_11()",
        titulo:"<center><h5><span class='ftitulo'>Completa</span> con ta-, te-, ti-, to-, tu-.</center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "1-2-11",
        nota:cal
        }
        );
        return false;
    };
    function start_12(){   
        $("#ventana").load(ruta+'1-2-12/index.php', 
        { 
        next: "Page_"+num_page[11]+"()", 
        procesar:"result_tipo_1_2_12()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra</span> las sílabas y <span>forma</span> los nombres de las ilustraciones.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "1-2-12",
        nota:cal
        }          
        );
        return false;
    };
    function start_13(){   
        $("#ventana").load(ruta+'1-2-13/index.php', 
        { 
        next: "Page_"+num_page[12]+"()", 
        procesar:"result_tipo_1_2_13()",
        titulo:"<center><h5><span class='ftitulo'>Ordena</span> las palabras y <span>forma</span> oraciones.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "1-2-13",
        nota:cal
        }          
        );
        return false;
    };

    function start_14(){
        $("#ventana").load(ruta+'1-2-24/index.php', 
        {
        next: "Page_"+num_page[13]+"()", 
        procesar:"result_tipo_1_2_24()",
        /*titulo:"<center><h5><span class='ftitulo'>Encierra</span> con un círculo las sílabas <span class='ftitulo'>da-, de-, di-, do-, du-</span> en las siguientes palabras:.</h5></center>",*/
        restaurar:"start_14()",
        dir:ruta,
        cod: "1-2-24",
        nota:cal
        }
        );
        return false;  
    };
    function start_15(){
        $("#ventana").load(ruta+'1-2-25/index.php', 
        { 
        next: "Page_"+num_page[14]+"()", 
        procesar:"result_tipo_1_2_25()",
        titulo:"<center><h5><span class='ftitulo'>Observa </span>los dibujos y luego <span>completa</span> sus nombres.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "1-2-25",
        nota:cal
        }
        );
        return false;
    };
    function start_16(){   
        $("#ventana").load(ruta+'1-2-26/index.php', 
        { 
        next: "Page_"+num_page[15]+"()", 
        procesar:"result_tipo_1_2_26()",
        titulo:"<center><h5><span class='ftitulo'>Observa </span>las imagen anterior y <span class='ftitulo'>determina</span>, ¿qué haran los médicos? luego <span class='ftitulo'>marca </span> según corresponde.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "1-2-26",
        nota:cal
        }          
        );
        return false;
    };
    function start_17(){   
        $("#ventana").load(ruta+'1-2-27/index.php', 
        { 
        next: "Page_"+num_page[16]+"()", 
        procesar:"result_tipo_1_2_27()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona </span> los dibujos que contengan las siguientes sílabas:</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "1-2-27",
        nota:cal
        }          
        );
        return false;
    };
    function start_18(){   
        $("#ventana").load(ruta+'1-2-28/index.php', 
        { 
        next: "Page_"+num_page[17]+"()", 
        procesar:"result_tipo_1_2_28()",
        titulo:"<center><h5><span class='ftitulo'>Observa </span>los dibujos y luego <span>completa</span> sus nombres con an-, en-, in-, on-.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod: "1-2-28",
        nota:cal
        }          
        );
        return false;
    };
    function start_19(){   
        $("#ventana").load(ruta+'1-2-29/index.php', 
        { 
        next: "Page_"+num_page[18]+"()", 
        procesar:"result_tipo_1_2_29()",
        titulo:"<center><h5><span class='ftitulo'>Observa </span>los dibujos y luego <span>completa</span> sus nombres con an-, en-, in-, on-.</h5></center>",
        restaurar:"start_19()",
        dir:ruta,
        cod: "1-2-29",
        nota:cal
        }          
        );
        return false;
    };
    function start_20(){   
        $("#ventana").load(ruta+'1-2-30/index.php', 
        { 
        next: "Page_"+num_page[19]+"()", 
        procesar:"result_tipo_1_2_30()",
        titulo:"<center><h5><span class='ftitulo'>Observa </span>los dibujos y luego <span>completa</span> sus nombres con an-, en-, in-, on-.</h5></center>",
        restaurar:"start_20()",
        dir:ruta,
        cod: "1-2-30",
        nota:cal
        }          
        );
        return false;
    };

    function start_21(){   
        $("#ventana").load(ruta+'1-2-31/index.php', 
        { 
        next: "Page_"+num_page[20]+"()", 
        procesar:"result_tipo_1_2_31()",
        titulo:"<center><h5><span class='ftitulo'>Relaciona </span>cada imagen con su nombre respectivo.</h5></center>",
        restaurar:"start_21()",
        dir:ruta,
        cod: "1-2-31",
        nota:cal
        }          
        );
        return false;
    };
    function start_22(){   
        $("#ventana").load(ruta+'1-2-32/index.php', 
        { 
        next: "Page_"+num_page[21]+"()", 
        procesar:"result_tipo_1_2_32()",
        titulo:"<center><h5><span class='ftitulo'>Completa </span>las oraciones con las palabras del recuadro.</h5></center>",
        restaurar:"start_22()",
        dir:ruta,
        cod: "1-2-32",
        nota:cal
        }          
        );
        return false;
    };

    function start_23(){   
        $("#ventana").load(ruta+'1-2-33/index.php', 
        { 
        next: "Page_"+num_page[22]+"()", 
        procesar:"result_tipo_1_2_33()",
        titulo:"<center><h5><span class='ftitulo'>Busca, </span>en la sopa de letras, la familia de palabras de <span class='ftitulo'>pan</span>.</h5></center>",
        restaurar:"start_23()",
        dir:ruta,
        cod: "1-2-33",
        nota:cal
        }          
        );
        return false;
    };
    function start_24(){   
        $("#ventana").load(ruta+'1-2-34/index.php', 
        { 
        next: "Page_"+num_page[23]+"()", 
        procesar:"result_tipo_1_2_34()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra </span>las palabras a donde corresponde.</h5></center>",
        restaurar:"start_24()",
        dir:ruta,
        cod: "1-2-34",
        nota:cal
        }          
        );
        return false;
    };
    function start_25(){   
        $("#ventana").load(ruta+'1-2-35/index.php', 
        { 
        next: "Page_"+num_page[24]+"()", 
        procesar:"result_tipo_1_2_35()",
        titulo:"<center><h5><span class='ftitulo'>Observa </span>y <span>une</span> las figuras del lado izquierdo con las que se ubican al lado derecho que correspondan a la misma familia de palabras.</h5></center>",
        restaurar:"start_25()",
        dir:ruta,
        cod: "1-2-35",
        nota:cal
        }          
        );
        return false;
    };
    function start_26(){   
        $("#ventana").load(ruta+'1-2-36/index.php', 
        { 
        next: "Page_"+num_page[25]+"()", 
        procesar:"result_tipo_1_2_36()",
        titulo:"<center><h5><span class='ftitulo'>Observa </span>y <span>une</span> las figuras del lado izquierdo con las que se ubican al lado derecho que correspondan a la misma familia de palabras.</h5></center>",
        restaurar:"start_26()",
        dir:ruta,
        cod: "1-2-36",
        nota:cal
        }          
        );
        return false;
    };
    function start_27(){   
        $("#ventana").load(ruta+'1-2-37/index.php', 
        { 
        next: "Page_"+num_page[26]+"()", 
        procesar:"result_tipo_1_2_37()",
        titulo:"<center><h5><span class='ftitulo'>Observa </span>y <span>une</span> las figuras del lado izquierdo con las que se ubican al lado derecho que correspondan a la misma familia de palabras.</h5></center>",
        restaurar:"start_27()",
        dir:ruta,
        cod: "1-2-37",
        nota:cal
        }          
        );
        return false;
    };

    function start_28(){   
        $("#ventana").load(ruta+'1-2-38/index.php', 
        { 
        next: "Page_"+num_page[27]+"()", 
        procesar:"result_tipo_1_2_38()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra </span>la palabra que corresponde a la imagen.</h5></center>",
        restaurar:"start_28()",
        dir:ruta,
        cod: "1-2-38",
        nota:cal
        }          
        );
        return false;
    };
    function start_29(){   
        $("#ventana").load(ruta+'1-2-39/index.php', 
        { 
        next: "Page_"+num_page[28]+"()", 
        procesar:"result_tipo_1_2_39()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra </span>la palabra que corresponde a la imagen.</h5></center>",
        restaurar:"start_29()",
        dir:ruta,
        cod: "1-2-39",
        nota:cal
        }          
        );
        return false;
    };
    function start_30(){   
        $("#ventana").load(ruta+'1-2-40/index.php', 
        { 
        next: "Page_"+num_page[29]+"()", 
        procesar:"result_tipo_1_2_40()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra </span>la palabra que corresponde a la imagen.</h5></center>",
        restaurar:"start_30()",
        dir:ruta,
        cod: "1-2-40",
        nota:cal
        }          
        );
        return false;
    };
    function start_31(){   
        $("#ventana").load(ruta+'1-2-41/index.php', 
        { 
        next: "Page_"+num_page[30]+"()", 
        procesar:"result_tipo_1_2_41()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra </span>un sustantivo propio para cada persona.</h5></center>",
        restaurar:"start_31()",
        dir:ruta,
        cod: "1-2-41",
        nota:cal
        }          
        );
        return false;
    };
    function start_32(){   
        $("#ventana").load(ruta+'1-2-42/index.php', 
        { 
        next: "Page_"+num_page[31]+"()", 
        procesar:"result_tipo_1_2_42()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra </span>un sustantivo común y uno propio según sea el caso. <span>Guíate</span> del ejemplo.</h5></center>",
        restaurar:"start_32()",
        dir:ruta,
        cod: "1-2-42",
        nota:cal
        }          
        );
        return false;
    };
    function start_33(){   
        $("#ventana").load(ruta+'1-2-43/index.php', 
        { 
        next: "Page_"+num_page[32]+"()", 
        procesar:"result_tipo_1_2_43()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra </span>un sustantivo común y uno propio según sea el caso. <span>Guíate</span> del ejemplo.</h5></center>",
        restaurar:"start_33()",
        dir:ruta,
        cod: "1-2-43",
        nota:cal
        }          
        );
        return false;
    };
    function start_34(){   
        $("#ventana").load(ruta+'1-2-44/index.php', 
        { 
        next: "Page_"+num_page[33]+"()", 
        procesar:"result_tipo_1_2_44()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra </span>un sustantivo común y uno propio según sea el caso. <span>Guíate</span> del ejemplo.</h5></center>",
        restaurar:"start_34()",
        dir:ruta,
        cod: "1-2-44",
        nota:cal
        }          
        );
        return false;
    };
    function start_35(){   
        $("#ventana").load(ruta+'1-2-45/index.php', 
        {
        next: "Page_"+num_page[34]+"()", 
        procesar:"result_tipo_1_2_45()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra </span>un sustantivo común y uno propio según sea el caso. <span>Guíate</span> del ejemplo.</h5></center>",
        restaurar:"start_35()",
        dir:ruta,
        cod: "1-2-45",
        nota:cal
        }          
        );
        return false;
    };
    function start_36(){   
        $("#ventana").load(ruta+'1-2-46/index.php', 
        { 
        next: "Page_"+num_page[35]+"()", 
        procesar:"result_tipo_1_2_46()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra </span>un sustantivo común y uno propio según sea el caso. <span>Guíate</span> del ejemplo.</h5></center>",
        restaurar:"start_36()",
        dir:ruta,
        cod: "1-2-46",
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