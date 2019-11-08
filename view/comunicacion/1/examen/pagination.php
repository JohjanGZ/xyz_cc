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
        }
    } 

    //Define la cantidad de numeros aleatorios.
    var cantidadNumeros = 9;
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
        $("#ventana").load(ruta+'1-1-10/index.php', 
        {
        next: "Page_"+num_page[0]+"()", 
        procesar:"result_tipo_1_1_10()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la imagen que falta en la secuencia.</h5></center>",
        restaurar:"start_1()",
        dir:ruta,
        cod: "1-1-10",
        nota:cal
        }
        );
        return false;  
    };
    function start_2(){
        $("#ventana").load(ruta+'1-1-11/index.php', 
        { 
        next: "Page_"+num_page[1]+"()", 
        procesar:"result_tipo_1_1_11()",
        titulo:"<center><h5><span class='ftitulo'>Indica</span> la respuesta correcta.<br>¿A dónde quiero ir todas las mañanas?</h5></center>",
        restaurar:"start_2()",
        dir:ruta,
        cod: "1-1-11",
        nota:cal
        }
        );
        return false;
    };
    function start_3(){
        $("#ventana").load(ruta+'1-1-12/index.php', 
        {
        next: "Page_"+num_page[2]+"()", 
        procesar:"result_tipo_1_1_12()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> las palabras que empiezan con <span class='ftitulo'>m</span>.</h5></center>",
        restaurar:"start_3()",
        dir:ruta,
        cod: "1-1-12",
        nota:cal
        }
        );
        return false;  
    };
    function start_4(){
        $("#ventana").load(ruta+'1-1-13/index.php', 
        { 
        next: "Page_"+num_page[3]+"()", 
        procesar:"result_tipo_1_1_13()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la imagen que falta en la secuencia.</h5></center>",
        restaurar:"start_4()",
        dir:ruta,
        cod: "1-1-13",
        nota:cal
        }
        );
        return false;
    };
    function start_5(){   
        $("#ventana").load(ruta+'1-1-14/index.php', 
        { 
        next: "Page_"+num_page[4]+"()", 
        procesar:"result_tipo_1_1_14()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la imagen que falta en la secuencia.</h5></center>",
        restaurar:"start_5()",
        dir:ruta,
        cod: "1-1-14",
        nota:cal
        }          
        );
        return false;
    };
    function start_6(){
        $("#ventana").load(ruta+'1-1-15/index.php', 
        {
        next: "Page_"+num_page[5]+"()", 
        procesar:"result_tipo_1_1_15()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra</span> la sílaba con la que empieza cada imagen.</h5></center>",
        restaurar:"start_6()",
        dir:ruta,
        cod: "1-1-15",
        nota:cal
        }
        );
        return false;  
    };
    function start_7(){
        $("#ventana").load(ruta+'1-1-16/index.php', 
        { 
        next: "Page_"+num_page[6]+"()", 
        procesar:"result_tipo_1_1_16()",
        titulo:"<center><h5><span class='ftitulo'>Completa</span> con la sílaba La, Le o Lo según corresponda.</h5></center>",
        restaurar:"start_7()",
        dir:ruta,
        cod: "1-1-16",
        nota:cal
        }
        );
        return false;
    };
    function start_8(){
        $("#ventana").load(ruta+'1-1-17/index.php', 
        {
        next: "Page_"+num_page[7]+"()", 
        procesar:"result_tipo_1_1_17()",
        titulo:"<center><h5><span class='ftitulo'>Completa</span> el nombre de cada imagen con la sílaba que le corresponde <span class='ftitulo'>sa-, se-, si-, so-, su-</span>.</h5></center>",
        restaurar:"start_8()",
        dir:ruta,
        cod: "1-1-17",
        nota:cal
        }
        );
        return false;  
    };
    function start_9(){
        $("#ventana").load(ruta+'1-1-18/index.php', 
        { 
        next: "Page_"+num_page[8]+"()", 
        procesar:"result_tipo_1_1_18()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> y <span class='ftitulo'>Completa</span> cada oraciòn con la imagen que le corresponde.</h5></center>",
        restaurar:"start_9()",
        dir:ruta,
        cod: "1-1-18",
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