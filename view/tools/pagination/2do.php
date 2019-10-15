<script type="text/javascript">
	//--- para iniciar cronometro desde cero. 

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

        function PageTipo2_2_1(){
        start2_2_1();
        inicio();
    }
        function PageTipo2_2_2(){
        start2_2_2();
        inicio();
    }
        function PageTipo2_2_3(){
        start2_2_3();
        inicio();
    }
        function PageTipo2_2_4(){
        start2_2_4();
        inicio();
    }
        function PageTipo2_2_5(){
        start2_2_5();
        inicio();
    }
        function PageTipo2_2_6(){
        start2_2_6();
        inicio();
    }

// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    function start2_1_1(){


        $("#ventana").load('../exercises/2-1-1/', 
        {
           
            next: "PageTipo2_1_2()", 
            procesar:"result_tipo_2_1_1()",
            titulo:"<center><h5><span class='ftitulo'>Agrupa</span> los siguientes elementos segun sus caracteristicas </h5></center>",
            restaurar:"start2_1_1()",
            ejercicio:"2-1-1",
        }

        );

        return false;
        
    };

    function start2_1_2(){

        $("#ventana").load('../exercises/2-1-2/', 
        {

           
            next: "PageTipo2_1_3()", 
            procesar:"result_tipo_2_1_2()",
            titulo:"<center><h5><span class='ftitulo'>Lee </span>  y  <span class='ftitulo'>clasifica </span> los elementos en el conjunto correspondiente.</h5></center>",
            restaurar:"start2_1_2()",
            ejercicio:"2-1-2"
        }
        );

        return false;
        };


    function start2_1_3(){

      
        
        $("#ventana").load('../exercises/2-1-3/', 
        {

           
            next: "PageTipo2_1_4()", 
            procesar:"result_tipo_2_1_3()",
            titulo:"<center><h5><span class='ftitulo'>Observa</span> el diagrama y<span class='ftitulo'> coloca</span> verdadero <span style='color:#ffd768'>(</span>V<span style='color:#ffd768'>)</span> o falso <span style='color:#b9659b'>(</span>F<span style='color:#b9659b'>)</span> según corresponda.</h5></center>",
             restaurar:"start2_1_3()",
             ejercicio:"2-1-3"

        }          
        );
        return false;
    };


    function start2_1_4(){

     
        $("#ventana").load('../exercises/2-1-4/', 
        {

           
            next: "PageTipo2_1_5()", 
            procesar:"result_tipo_2_1_4()",
            titulo:" <center><h5><span class='ftitulo'>Observa</span> el diagrama y<span class='ftitulo'> Completa</span> las oraciones </h5></center>",
            restaurar:"start2_1_4()",
            ejercicio:"2-1-4"


        }
            
        );
        return false;
    };

    function start2_1_5(){

     
        
        $("#ventana").load('../exercises/2-1-5/', 
        {

            
            next: "PageTipo2_1_6()", 
            procesar:"result_tipo_2_1_5()",
            titulo:"<center><h5> <span class='ftitulo'>Observa</span> los elementos de cada conjunto y <span class='ftitulo'>completa</span> segun el orden que aparecen.</h5></center>",
            restaurar:"start2_1_5()",
            ejercicio:"2-1-5"


        }
            
        );
        return false;
    };

    function start2_1_6(){

   
        
        $("#ventana").load('../exercises/2-1-6/', 
        {

            next: "PageTipo2_1_7()", 
            procesar:"result_tipo_2_1_6()",
            titulo:"<center><h5><span class='ftitulo'>Observa</span> el diagrama y<span class='ftitulo'> señala</span> la respuesta correcta.</h5></center>",
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

    function start2_2_1(){

        $("#ventana").load('../exercises/2-2-1/', 
        {
            intentos: 3, 
            next: "PageTipo2_2_2()", 
            procesar:"result_tipo_2_2_1()",
            titulo:"<center><h5><span class='ftitulo'>Observa</span> los signos y arrastra los números correspondientes</h5></center>",
            restaurar:"start2_2_1()",
            ejercicio:"2-2-1",
        }
        );
        return false;        
        };


    function start2_2_2(){


        $("#ventana").load('../exercises/2-2-2/', 
        {
            intentos: 3, 
            next: "PageTipo2_2_2()", 
            procesar:"result_tipo_2_2_2()",
            titulo:"<center><h5><span class='ftitulo'>6. Agrupa</span> los siguientes elementos segun sus caracteristicas </h5></center>",
            restaurar:"start2_2_2()",
            ejercicio:"2-2-2",
            
        }

        );

        return false;
    };
    function start2_2_3(){


        $("#ventana").load('tipo-2-2-3.php', 
        {
            intentos: 3, 
            next: "PageTipo2_2_4()", 
            procesar:"result_tipo_2_1_1()",
            titulo:"<center><h5><span class='ftitulo'>6. Agrupa</span> los siguientes elementos segun sus caracteristicas </h5></center>",
            restaurar:"start2_2_3()",
            ejercicio:"2-2-3",
        }

        );

        return false;
        
    };
          function resultado(){
        $("#ventana").load('../exercises/resultado/resultado.php');
        return false;
    };
</script>