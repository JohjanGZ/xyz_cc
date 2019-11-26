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
        }
    } 

    //Define la cantidad de numeros aleatorios.
    var cantidadNumeros = 18;
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
    var ruta="../../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_1(){
        $("#ventana").load(ruta+'1-0-1/index.php', 
        {
        next: "Page_"+numeroAleatorio+"()", 
        procesar:"result_tipo_1_0_1()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la imagen que falta en la secuencia.</h5></center>",
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
        next: "Page_"+num_page[1]+"()", 
        procesar:"result_tipo_1_0_2()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la imagen que falta en la secuencia.</h5></center>",
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
        next: "Page_"+num_page[2]+"()", 
        procesar:"result_tipo_1_0_3()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la imagen que falta en la secuencia.</h5></center>",
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
            next: "Page_"+num_page[3]+"()", 
            procesar:"result_tipo_1_0_4()",
            titulo:" <center><h5><span class='ftitulo'>Selecciona</span> la imagen que falta en la secuencia.</h5></center>",
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
        next: "Page_"+num_page[4]+"()", 
        procesar:"result_tipo_1_0_5()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la imagen que falta en la secuencia.</h5></center>",
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
        next: "Page_"+num_page[5]+"()", 
        procesar:"result_tipo_1_0_6()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> los dibujos cuyos nombres empiecen con:</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod:"1-0-6",
         nota:cal
        }
        );
        return false;
    };
    function start_7(){  
        $("#ventana").load(ruta+'1-0-7/index.php', 
        {
        next: "Page_"+num_page[6]+"()", 
        procesar:"result_tipo_1_0_7()",
        titulo:"<center><h5><span class='ftitulo'>Observa</span> los dibujos y <span class='ftitulo'>une</span> cada dibujo con su vocal inicial</h5></center>",
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
        next: "Page_"+num_page[7]+"()", 
        procesar:"result_tipo_1_0_8()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> los dibujos que lleven al final la vocal 'a'</center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "1-0-8",
         nota:cal
        }
        );
        return false;
    };
    function start_9(){  
        $("#ventana").load(ruta+'1-0-9/index.php', 
        {
        next: "Page_"+num_page[8]+"()", 
        procesar:"result_tipo_1_0_9()",
        titulo:"<center><h5> <span class='ftitulo'>Selecciona</span> las palabras que contengan la vocal <span>(</span>U<span>)</span>.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "1-0-9",
        nota:cal
        }
        );
        return false;
    };
    function start_10(){  
        $("#ventana").load(ruta+'1-0-10/index.php', 
        { 
         next: "Page_"+num_page[9]+"()",  
        procesar:"result_tipo_1_0_10()",
        titulo:"<center><h5> <span class='ftitulo'>Selecciona</span> la letra <span>(</span>U<span>) en cada nombre.</span>.</h5></center>",
        restaurar:"start_10()",
        dir:ruta,
        cod: "1-0-10",
        nota:cal
        }                    
        );
        return false;
    };
    function start_11(){  
        $("#ventana").load(ruta+'1-0-11/index.php', 
        { 
        next: "Page_"+num_page[10]+"()",  
        procesar:"result_tipo_1_0_11()",
        titulo:"<center><h5><span class='ftitulo'>observa</span> y <span class='ftitulo'>selecciona</span> el dibujo que lleve la vocal 'e'.</h5></center>",
        restaurar:"start_11()",
        dir:ruta,
        cod: "1-0-11",
        nota:cal
        }                    
        );
        return false;
    };
    function start_12(){  
        $("#ventana").load(ruta+'1-0-12/index.php', 
        { 
        next: "Page_"+num_page[11]+"()", 
        procesar:"result_tipo_1_0_12()",
        titulo:"<center><h5><span class='ftitulo'>observa</span> y <span class='ftitulo'>selecciona</span> el dibujo que lleve la vocal 'i'.</h5></center>",
        restaurar:"start_12()",
        dir:ruta,
        cod: "1-0-12",
        nota:cal
        }                    
        );
        return false;
    };
    function start_13(){  
        $("#ventana").load(ruta+'1-0-13/index.php', 
        { 
       next: "Page_"+num_page[12]+"()",  
        procesar:"result_tipo_1_0_13()",
        titulo:"<center><h5><span class='ftitulo'>Relaciona</span> cada diagrama con la expresión que le corresponde.</h5></center>",
        restaurar:"start_13()",
        dir:ruta,
        cod: "1-0-13",
        nota:cal
        }                    
        );
        return false;
    };
    function start_14(){  
        $("#ventana").load(ruta+'1-0-14/index.php', 
        { 
        next: "Page_"+num_page[13]+"()", 
        procesar:"result_tipo_1_0_14()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la vocal correcta con la que comienza cada palabra.</h5></center>",
        restaurar:"start_14()",
        dir:ruta,
        cod: "1-0-14",
        nota:cal
        }                    
        );
        return false;
    };
    function start_15(){  
        $("#ventana").load(ruta+'1-0-15/index.php', 
        { 
        next: "Page_"+num_page[14]+"()", 
        procesar:"result_tipo_1_0_15()",
        titulo:"<center><h5><span class='ftitulo'>Clasifica</span> cada dibujo de acuerdo a la vocal con la que termine su nombre.</h5></center>",
        restaurar:"start_15()",
        dir:ruta,
        cod: "1-0-15",
        nota:cal  
        }                    
        );
        return false;
    };
    function start_16(){  
        $("#ventana").load(ruta+'1-0-16/index.php', 
        { 
        next: "Page_"+num_page[15]+"()", 
        procesar:"result_tipo_1_0_16()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> las imágenes de la parte inferior que sean iguales a las que se muestran.</h5></center>",
        restaurar:"start_16()",
        dir:ruta,
        cod: "1-0-16",
        nota:cal  
        }                    
        );
        return false;
    };
    function start_17(){  
        $("#ventana").load(ruta+'1-0-17/index.php', 
        { 
        next: "Page_"+num_page[16]+"()", 
        procesar:"result_tipo_1_0_17()",
        titulo:"<center><h5><span >Selecciona</span> las imágenes de la parte inferior que sean iguales a las que se muestran.</h5></center>",
        restaurar:"start_17()",
        dir:ruta,
        cod: "1-0-17",
        nota:cal  
        }                    
        );
        return false;
    };
    function start_18(){  
        $("#ventana").load(ruta+'1-0-18/index.php', 
        { 
        next: "Page_"+num_page[17]+"()", 
        procesar:"result_tipo_1_0_18()",
        titulo:"<center><h5><span >Ordena</span> las siguientes secuencias.</h5></center>",
        restaurar:"start_18()",
        dir:ruta,
        cod:"1-0-18",
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