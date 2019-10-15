<script type="text/javascript">
   function PageTipo2_1_1(){
        start2_1_1();
        inicio();
        count = 3;
    }
   function  PageTipo2_1_2(){
        start2_1_2();
        inicio();
         count = 3;
    }
   function PageTipo2_1_3(){
        start2_1_3();
        inicio();
         count = 3;
    }
   function PageTipo2_1_4(){
        start2_1_4();
        inicio();
         count = 3;
    }
   function  PageTipo2_1_5(){
        start2_1_5();
        inicio();
         count = 3;
    }
   function PageTipo2_1_6(){
        start2_1_6();
        inicio();
    }
   function PageTipo2_1_7(){
        start2_1_7();
        inicio();
         count = 3;
    }
   function  PageTipo2_1_8(){
        start2_1_8();
        inicio();
         count = 3;
    }
   function PageTipo2_1_9(){
        start2_1_9();
        inicio();
         count = 3;
    }
   function PageTipo2_1_10(){
        start2_1_10();
        inicio();
         count = 3;
    }
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start2_1_1(){
        $("#ventana").load('../exercises/inicial/3-1/index.php', 
        {
        next: "PageTipo2_1_2()", 
        procesar:"result_tipo_2_1_1()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la imagen que no muestra el buen uso del agua.</h5></center>",
        restaurar:"start2_1_1()",
        ejercicio:"2-1-1",
        }
        );
        return false;  
    };
    function start2_1_2(){
        $("#ventana").load('../exercises/inicial/3-2/index.php', 
        { 
        next: "PageTipo2_1_3()", 
        procesar:"result_tipo_2_1_2()",
        titulo:"<center><h5><span class='ftitulo'>Colorea</span> cada vocal con el color que indica.</h5></center>",
        restaurar:"start2_1_2()",
        ejercicio:"2-1-2"
        }
        );
        return false;
    };
    function start2_1_3(){ 
        $("#ventana").load('../exercises/inicial/3-3/index.php', 
        { 
        next: "PageTipo2_1_4()", 
        procesar:"result_tipo_2_1_3()",
        titulo:"<center><h5><span class='ftitulo'>Relaciona</span> Relaciona cada imagen con su sombra.</h5></center>",
         restaurar:"start2_1_3()",
         ejercicio:"2-1-3"
        }          
        );
        return false;
    };
    function start2_1_4(){
        $("#ventana").load('../exercises/inicial/3-4/index.php', 
        {
            next: "PageTipo2_1_5()", 
            procesar:"result_tipo_2_1_4()",
            titulo:" <center><h5><span class='ftitulo'>Relaciona</span> las imágenes con la vocal que corresponde.</h5></center>",
            restaurar:"start2_1_4()",
            ejercicio:"2-1-4"
        }
        );
        return false;
    };
    function start2_1_5(){  
        $("#ventana").load('../exercises/inicial/3-5/index.php',
        {
        next: "resultado()", 
        procesar:"result_tipo_2_1_5()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> cuál de las siguientes imágenes no pertenece a cada grupo.</h5></center>",
        restaurar:"start2_1_5()",
        ejercicio:"2-1-5"
        }
        );
        return false;
    };
    function start2_1_6(){  
        $("#ventana").load('../exercises/inicial/6/index.php', 
        {
        next: "resultado()", 
        procesar:"result_tipo_2_1_6()",
        titulo:"<center><h5><span class='ftitulo'>Lee</span> y <span class='ftitulo'>selecciona</span> las respuestas que completan las oraciones.</h5></center>",
        restaurar:"start2_1_6()",
        ejercicio:"2-1-6"
        }
        );
        return false;
    };
    function start2_1_7(){
        $("#ventana").load('../exercises/2-1-7/', 
        {
        next: "PageTipo2_1_8()", 
        procesar:"result_tipo_2_1_7()",
        titulo:"<center><h5><span class='ftitulo'>Observa</span> el diagrama <span class='ftitulo'>Coloca</span> los elementos segun corresponda y<span class='ftitulo'> Completa</span> las oraciones </h5></center>",
        restaurar:"start2_1_7()",
        ejercicio:"2-1-7"
        }
        );
        return false;
    };
    function start2_1_8(){  
        $("#ventana").load('../exercises/2-1-8/', 
        {
        next: "PageTipo2_1_9()", 
        procesar:"result_tipo_2_1_8()",
        titulo:"<center><h5><span class='ftitulo'>Observa</span> el diagrama y<span class='ftitulo'> Completa</span> las oraciones </h5></center>",
        restaurar:"start2_1_8()",
        ejercicio:"2-1-8"
        }
        );
        return false;
    };
    function start2_1_9(){  
        $("#ventana").load('../exercises/2-1-9/', 
        {
        next: "PageTipo2_1_10()", 
        procesar:"result_tipo_2_1_9()",
        titulo:"<center><h5> <span class='ftitulo'>Observa</span> la imagen y <span class='ftitulo'>Señala</span> verdadero <span style='color:#ffd768'>(</span>V<span style='color:#ffd768'>)</span> o falso <span style='color:#b9659b'>(</span>F<span style='color:#b9659b'>)</span> según corresponda.</h5></center>",
        restaurar:"start2_1_9()",
        ejercicio:"2-1-9"
        }
        );
        return false;
    };
    function start2_1_10(){
        $("#ventana").load('../exercises/2-1-10/', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_2_1_10()",
        titulo:"<center><h5><span class='ftitulo'>Relaciona</span> cada diagrama con la expresión que le corresponde.</h5></center>",
        restaurar:"start2_1_10()",
        ejercicio:"2-1-10"
        }                    
        );
        return false;
    };
    function resultado(){
        $("#ventana").load('../exercises/resultado/resultado.php');
        return false;
    };
</script>