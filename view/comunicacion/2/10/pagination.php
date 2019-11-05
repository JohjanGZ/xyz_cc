<script type="text/javascript">
    function Page_38(){
        start_38();
        inicio();
         count = 3;
    }
    function Page_39(){
        start_39();
        inicio();
         count = 3;
    }
    function Page_40(){
        start_40();
        inicio();
         count = 3;
    }
    function Page_41(){
        start_41();
        inicio();
         count = 3;
    }
    function Page_42(){
        start_42();
        inicio();
         count = 3;
    }
    function Page_43(){
        start_43();
        inicio();
         count = 3;
    }
    function Page_44(){
        start_44();
        inicio();
         count = 3;
    }
    function Page_45(){
        start_45();
        inicio();
         count = 3;
    }
    function Page_46(){
        start_46();
        inicio();
         count = 3;
    }

    var cal= 20/20;
    var ruta="../../../exercises/comunicacion/";
    ////////////// 2do 
            // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    
    function start_38(){   
        $("#ventana").load(ruta+'1-2-38/index.php', 
        { 
        next: "Page_39()", 
        procesar:"result_tipo_1_2_38()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra </span>la palabra que corresponde a la imagen.</h5></center>",
        restaurar:"start_38()",
        dir:ruta,
        cod: "1-2-38",
        nota:cal
        }          
        );
        return false;
    };
    function start_39(){   
        $("#ventana").load(ruta+'1-2-39/index.php', 
        { 
        next: "Page_40()", 
        procesar:"result_tipo_1_2_39()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra </span>la palabra que corresponde a la imagen.</h5></center>",
        restaurar:"start_39()",
        dir:ruta,
        cod: "1-2-39",
        nota:cal
        }          
        );
        return false;
    };
    function start_40(){   
        $("#ventana").load(ruta+'1-2-40/index.php', 
        { 
        next: "Page_41()", 
        procesar:"result_tipo_1_2_40()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra </span>la palabra que corresponde a la imagen.</h5></center>",
        restaurar:"start_40()",
        dir:ruta,
        cod: "1-2-40",
        nota:cal
        }          
        );
        return false;
    };
    function start_41(){   
        $("#ventana").load(ruta+'1-2-41/index.php', 
        { 
        next: "Page_42()", 
        procesar:"result_tipo_1_2_41()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra </span>la palabra que corresponde a la imagen.</h5></center>",
        restaurar:"start_41()",
        dir:ruta,
        cod: "1-2-41",
        nota:cal
        }          
        );
        return false;
    };
    function start_42(){   
        $("#ventana").load(ruta+'1-2-42/index.php', 
        { 
        next: "Page_43()", 
        procesar:"result_tipo_1_2_42()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra </span>un sustantivo común y uno propio según sea el caso. <span>Guíate</span> del ejemplo.</h5></center>",
        restaurar:"start_42()",
        dir:ruta,
        cod: "1-2-42",
        nota:cal
        }          
        );
        return false;
    };
    function start_43(){   
        $("#ventana").load(ruta+'1-2-43/index.php', 
        { 
        next: "Page_44()", 
        procesar:"result_tipo_1_2_43()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra </span>un sustantivo común y uno propio según sea el caso. <span>Guíate</span> del ejemplo.</h5></center>",
        restaurar:"start_43()",
        dir:ruta,
        cod: "1-2-43",
        nota:cal
        }          
        );
        return false;
    };
    function start_44(){   
        $("#ventana").load(ruta+'1-2-44/index.php', 
        { 
        next: "Page_45()", 
        procesar:"result_tipo_1_2_44()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra </span>un sustantivo común y uno propio según sea el caso. <span>Guíate</span> del ejemplo.</h5></center>",
        restaurar:"start_44()",
        dir:ruta,
        cod: "1-2-44",
        nota:cal
        }          
        );
        return false;
    };
    function start_45(){   
        $("#ventana").load(ruta+'1-2-45/index.php', 
        { 
        next: "Page_46()", 
        procesar:"result_tipo_1_2_45()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra </span>un sustantivo común y uno propio según sea el caso. <span>Guíate</span> del ejemplo.</h5></center>",
        restaurar:"start_45()",
        dir:ruta,
        cod: "1-2-45",
        nota:cal
        }          
        );
        return false;
    };
    function start_46(){   
        $("#ventana").load(ruta+'1-2-46/index.php', 
        { 
        next: "resultado()", 
        procesar:"result_tipo_1_2_46()",
        titulo:"<center><h5><span class='ftitulo'>Arrastra </span>un sustantivo común y uno propio según sea el caso. <span>Guíate</span> del ejemplo.</h5></center>",
        restaurar:"start_46()",
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