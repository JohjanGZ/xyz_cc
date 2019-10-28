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
   function Page_7(){
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

    var cal= 20/20;
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_1(){
        $("#ventana").load('../../../exercises/comunicacion/1-1-1/index.php', 
        {
        next: "Page_2()", 
        procesar:"result_tipo_2_1_1()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la imagen que falta en la secuencia.</h5></center>",
        restaurar:"start_1()",
       
        nota:cal
        }
        );
        return false;  
    };
    function start_2(){
        $("#ventana").load('../../../exercises/comunicacion/1-1-2/index.php', 
        { 
        next: "Page_3()", 
        procesar:"result_tipo_2_1_2()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la imagen que falta en la secuencia.</h5></center>",
        restaurar:"start_2()",
        
        nota:cal
        }
        );
        return false;
    };
    function start_3(){   
        $("#ventana").load('../../../exercises/comunicacion/1-1-3/index.php', 
        { 
        next: "Page_4()", 
        procesar:"result_tipo_2_1_3()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la imagen que falta en la secuencia.</h5></center>",
         restaurar:"start_3()",
          nota:cal
        }          
        );
        return false;
    };
    function start_4(){
        $("#ventana").load('../../../exercises/comunicacion/1-1-4/index.php', 
        {
            next: "Page_5()", 
            procesar:"result_tipo_2_1_4()",
            titulo:" <center><h5><span class='ftitulo'>Selecciona</span> la imagen que falta en la secuencia.</h5></center>",
            restaurar:"start_4()",
             nota:cal
        }
        );
        return false;
    };
    function start_5(){  
        $("#ventana").load('../../../exercises/comunicacion/1-1-5/index.php', 
        {   
        next: "Page_6()", 
        procesar:"result_tipo_2_1_5()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> la imagen que falta en la secuencia.</h5></center>",
        restaurar:"start_5()",
         nota:cal
        }
        );
        return false;
    };
    function start_6(){  
        $("#ventana").load('../../../exercises/comunicacion/1-1-6/index.php', 
        {
        next: "Page_7()", 
        procesar:"result_tipo_2_1_6()",
        titulo:"<center><h5><span class='ftitulo'>Selecciona</span> los dibujos cuyos nombres empiecen con:</h5></center>",
        restaurar:"start_6()",
         nota:cal
        }
        );
        return false;
    };
    function start_7(){  
        $("#ventana").load('../../../exercises/comunicacion/1-1-7/index.php', 
        {
        next: "Page_8()", 
        procesar:"result_tipo_2_1_7()",
        titulo:"<center><h5><span class='ftitulo'>Observa</span> los dibujos y <span class='ftitulo'>une</span> cada dibujo con su vocal inicial</h5></center>",
        restaurar:"start_7()",
         nota:cal
        }
        );
        return false;
    };
    function start_8(){  
        $("#ventana").load('../../../exercises/comunicacion/1-1-8/index.php', 
        {
        next: "Page_9()", 
        procesar:"result_tipo_2_1_8()",
        titulo:"<center><h5><span class='ftitulo'>Observa</span> el diagrama y<span class='ftitulo'> Completa</span> las oraciones </h5></center>",
        restaurar:"start_8()",
         nota:cal
        }
        );
        return false;
    };
    function start_9(){  
        $("#ventana").load('../../../exercises/comunicacion/1-1-9/index.php', 
        {
        next: "Page_10()", 
        procesar:"result_tipo_2_1_9()",
        titulo:"<center><h5> <span class='ftitulo'>Selecciona</span> las palabras que contengan la vocal <span>(</span>U<span>)</span>.</h5></center>",
        restaurar:"start_9()",
         nota:cal
        }
        );
        return false;
    };
    function start_10(){  
        $("#ventana").load('../../../exercises/comunicacion/1-1-10/index.php', 
        { 
         next: "Page_11()",  
        procesar:"result_tipo_2_1_10()",
        titulo:"<center><h5> <span class='ftitulo'>Selecciona</span> la letra <span>(</span>U<span>) en cada nombre.</span>.</h5></center>",
        restaurar:"start_10()",
         nota:cal
        }                    
        );
        return false;
    };
        function start_11(){  
        $("#ventana").load('../../../exercises/comunicacion/1-1-11/index.php', 
        { 
        next: "Page_12()",  
        procesar:"result_tipo_1_1_11()",
        titulo:"<center><h5><span class='ftitulo'>Relaciona</span> cada diagrama con la expresión que le corresponde.</h5></center>",
        restaurar:"start_11()",
        nota:cal
        }                    
        );
        return false;
    };
        function start_12(){  
        $("#ventana").load('../../../exercises/comunicacion/1-1-12/index.php', 
        { 
        next: "Page_13()", 
        procesar:"result_tipo_1_1_12()",
        titulo:"<center><h5><span class='ftitulo'>Relaciona</span> cada diagrama con la expresión que le corresponde.</h5></center>",
        restaurar:"start_12()",
        nota:cal
        }                    
        );
        return false;
    };
        function start_13(){  
        $("#ventana").load('../../../exercises/comunicacion/1-1-13/index.php', 
        { 
       next: "Page_14()",  
        procesar:"result_tipo_2_1_13()",
        titulo:"<center><h5><span class='ftitulo'>Relaciona</span> cada diagrama con la expresión que le corresponde.</h5></center>",
        restaurar:"start_13()",
        nota:cal
        }                    
        );
        return false;
    };
        function start_14(){  
        $("#ventana").load('../../../exercises/comunicacion/1-1-14/index.php', 
        { 
        next: "Page_15()", 
        procesar:"result_tipo_2_1_14()",
        titulo:"<center><h5><span class='ftitulo'>Relaciona</span> cada diagrama con la expresión que le corresponde.</h5></center>",
        restaurar:"start_14()",
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