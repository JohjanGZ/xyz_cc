<script type="text/javascript">
    function Page_13() {
        start_13();
        inicio();
        count = 3;
    }

    function Page_14() {
        start_14();
        inicio();
        count = 3;
    }



    var cant = 2;
    var cal = 20 / 20;
    var ruta = "../../../../exercises/comunicacion/";
    ////////////// 2do 
    // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    function start_13() {
        $("#ventana").load(ruta + '6-1-13/index.php', {
            next: "Page_14()",
            procesar: "result_tipo_6_1_13()",
            titulo: "<center><h5><span>Lee</span> el siguiente artículo de divulgación científica y <span>arrastra</span> cada parte de la estructura a donde corresponda.</h5></center>",
            restaurar: "start_13()",
            dir: ruta,
            cod: "6-1-13",
            nota: cal
        });
        return false;
    };

    function start_14() {
        $("#ventana").load(ruta + '6-1-14/index.php', {
            next: "resultado()",
            procesar: "result_tipo_6_1_14()",
            titulo: "<center><h5><span>Selecciona</span> la respuesta correcta. ¿Cuál es la característica principal de un artículo de divulgación científica?</h5></center>",
            restaurar: "start_14()",
            dir: ruta,
            cod: "6-1-14",
            nota: cal
        });
        return false;
    };


    function resultado() {
        $("#ventana").load('../../../../exercises/resultado/resultado.php');
        return false;
    };
</script>