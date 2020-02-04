<script type="text/javascript">
    function Page_lectura_6_3_1_1() {
        start_lectura_6_3_1_1();
        inicio();
        count = 0;
    }

    function Page_6() {
        start_6();
        inicio();
        count = 3;
    }

    function Page_7() {
        start_7();
        inicio();
        count = 3;
    }
    var cant = 2;
    var cal = 20 / 20;
    var ruta = "../../../../exercises/comunicacion/";
    ////////////// 2do 
    // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
    function start_lectura_6_3_1_1() {
        $("#ventana").load(ruta + 'lectura6-3-1-1/index.php', {
            next: "Page_6()",
            procesar: "lectura6-3-1-1()",
            titulo: "<center><h5><span>Lee</span> atentamente y contesta las preguntas.</h5></center>",
            restaurar: "start_lectura_6_3_1_1()",
            dir: ruta,
            cod: "lectura6-3-1-1",
            nota: cal
        });
        return false;
    };

    function start_6() {
        $("#ventana").load(ruta + '6-3-6/index.php', {
            next: "Page_7()",
            procesar: "result_tipo_6_3_6()",
            titulo: "<center><h5><span>Arrastra</span> las siguientes palabras en donde corresponda para completar el sentido de cada frase.</h5></center>",
            restaurar: "start_6()",
            dir: ruta,
            cod: "6-3-6",
            nota: cal
        });
        return false;
    };

    function start_7() {
        $("#ventana").load(ruta + '6-3-7/index.php', {
            next: "resultado()",
            procesar: "result_tipo_6_3_7()",
            titulo: "<center><h5>Según el texto, <span>selecciona</span> la opción correcta.</h5></center>",
            restaurar: "start_7()",
            dir: ruta,
            cod: "6-3-7",
            nota: cal
        });
        return false;
    };


    function resultado() {
        $("#ventana").load('../../../../exercises/resultado/resultado.php');
        return false;
    };
</script>