<script type="text/javascript">
    function Page_10() {
        start_10();
        inicio();
        count = 3;
    }

    function Page_11() {
        start_11();
        inicio();
        count = 3;
    }

    function Page_12() {
        start_12();
        inicio();
        count = 3;
    }



    var cant = 3;
    var cal = 20 / 20;
    var ruta = "../../../../exercises/comunicacion/";
    ////////////// 2do 
    // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


    function start_10() {
        $("#ventana").load(ruta + '6-3-10/index.php', {
            next: "resultado()",
            procesar: "result_tipo_6_3_10()",
            titulo: "<center><h5><span>Selecciona</span> (V) si los enunciados son verdaderos y (F) si son falsos.</h5></center>",
            restaurar: "start_10()",
            dir: ruta,
            cod: "6-3-10",
            nota: cal
        });
        return false;
    };

    function start_11() {
        $("#ventana").load(ruta + '6-3-11/index.php', {
            next: "Page_12()",
            procesar: "result_tipo_6_3_11()",
            titulo: "<center><h5><span>Selecciona</span> la opción que defina correctamente qué es un argumento.</h5></center>",
            restaurar: "start_11()",
            dir: ruta,
            cod: "6-3-11",
            nota: cal
        });
        return false;
    };

    function start_12() {
        $("#ventana").load(ruta + '6-3-12/index.php', {
            next: "Page_13()",
            procesar: "result_tipo_6_3_12()",
            titulo: "<center><h5><span>Arrastra</span> los términos de manera que completen la definición de la argumentación.</center>",
            restaurar: "start_12()",
            dir: ruta,
            cod: "6-3-12",
            nota: cal
        });
        return false;
    };



    function resultado() {
        $("#ventana").load('../../../../exercises/resultado/resultado.php');
        return false;
    };
</script>