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


// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    function start2_1_1(){


        $("#ventana").load('../../../exercises/matematica/2-1-1/index.php', 
        {           
            next: "PageTipo2_1_2()", 
            procesar:"result_tipo_2_1_1()",
            titulo:"<center><h5><span class='ftitulo'>Agrupa</span> los siguientes elementos segun sus caracteristicas </h5></center>",
            restaurar:"start2_1_1()",
            ejercicio:"mate2-1",
        }
        );
        return false;        
        };

    function start2_1_2(){

        $("#ventana").load('../../../exercises/matematica/2-1-2/index.php', 
        {

           
            next: "PageTipo2_1_3()", 
            procesar:"result_tipo_2_1_2()",
            titulo:"<center><h5><span class='ftitulo'>Lee </span>  y  <span class='ftitulo'>clasifica </span> los elementos en el conjunto correspondiente.</h5></center>",
            restaurar:"start2_1_2()",
            ejercicio:"mate2-2"
        }
        );

        return false;
        };
    function start2_1_3(){
        
        $("#ventana").load('../../../exercises/matematica/2-1-3/index.php', 
        {           
            next: "PageTipo2_1_4()", 
            procesar:"result_tipo_2_1_3()",
            titulo:"<center><h5><span class='ftitulo'>Observa</span> el diagrama y<span class='ftitulo'> coloca</span> verdadero <span style='color:#ffd768'>(</span>V<span style='color:#ffd768'>)</span> o falso <span style='color:#b9659b'>(</span>F<span style='color:#b9659b'>)</span> según corresponda.</h5></center>",
             restaurar:"start2_1_3()",
             ejercicio:"mate2-3"

        }          
        );
        return false;
    };
    function start2_1_4(){
     
        $("#ventana").load('../../../exercises/matematica/2-1-4/index.php', 
        {           
            next: "PageTipo2_1_5()", 
            procesar:"result_tipo_2_1_4()",
            titulo:" <center><h5><span class='ftitulo'>Observa</span> el diagrama y<span class='ftitulo'> Completa</span> las oraciones </h5></center>",
            restaurar:"start2_1_4()",
            ejercicio:"mate2-4"
        }            
        );
        return false;
    };
    function start2_1_5(){
        
        $("#ventana").load('../../../exercises/matematica/2-1-5/index.php', 
        {            
            next: "PageTipo2_1_6()", 
            procesar:"result_tipo_2_1_5()",
            titulo:"<center><h5> <span class='ftitulo'>Observa</span> los elementos de cada conjunto y <span class='ftitulo'>completa</span> segun el orden que aparecen.</h5></center>",
            restaurar:"start2_1_5()",
            ejercicio:"mate2-5"
        }            
        );
        return false;
    };
    function start2_1_6(){
       
        $("#ventana").load('../../../exercises/matematica/2-1-6/index.php', 
        {
            next: "PageTipo2_1_7()", 
            procesar:"result_tipo_2_1_6()",
            titulo:"<center><h5><span class='ftitulo'>Observa</span> el diagrama y<span class='ftitulo'> señala</span> la respuesta correcta.</h5></center>",
            restaurar:"start2_1_6()",
            ejercicio:"mate2-6"
        }           
        );
        return false;
    };
    function start2_1_7(){        
        $("#ventana").load('../../../exercises/matematica/2-1-7/index.php', 
        {            
            next: "PageTipo2_1_8()", 
            procesar:"result_tipo_2_1_7()",
            titulo:"<center><h5><span class='ftitulo'>Observa</span> el diagrama <span class='ftitulo'>Coloca</span> los elementos segun corresponda y<span class='ftitulo'> Completa</span> las oraciones </h5></center>",
            restaurar:"start2_1_7()",
            ejercicio:"mate2-7"
        }            
        );
        return false;
    };
    function start2_1_8(){      
        $("#ventana").load('../../../exercises/matematica/2-1-8/index.php', 
        {            
            next: "PageTipo2_1_9()", 
            procesar:"result_tipo_2_1_8()",
            titulo:"<center><h5><span class='ftitulo'>Observa</span> el diagrama y<span class='ftitulo'> Completa</span> las oraciones </h5></center>",
            restaurar:"start2_1_8()",
            ejercicio:"mate2-8"
        }
            
        );
        return false;
    };
    function start2_1_9(){

        $("#ventana").load('../../../exercises/matematica/2-1-9/index.php', 
        {             
            next: "PageTipo2_1_10()", 
            procesar:"result_tipo_2_1_9()",
            titulo:"<center><h5> <span class='ftitulo'>Observa</span> la imagen y <span class='ftitulo'>Señala</span> verdadero <span style='color:#ffd768'>(</span>V<span style='color:#ffd768'>)</span> o falso <span style='color:#b9659b'>(</span>F<span style='color:#b9659b'>)</span> según corresponda.</h5></center>",
            restaurar:"start2_1_9()",
            ejercicio:"mate2-9"
        }            
        );
        return false;
    };

    function start2_1_10(){        
        $("#ventana").load('../../../exercises/matematica/2-1-10/index.php', 
        {           
            next: "resultado()", 
            procesar:"result_tipo_2_1_10()",
            titulo:"<center><h5><span class='ftitulo'>Relaciona</span> cada diagrama con la expresión que le corresponde.</h5></center>",
            restaurar:"start2_1_10()",
            ejercicio:"mate2-10"
        }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
        );
        return false;
    };
///------  pagina de resultado final
   
    function resultado(){
        $("#ventana").load('../../../exercises/resultado/resultado.php');
        return false;
    };
</script>