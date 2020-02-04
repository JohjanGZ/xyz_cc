<script type="text/javascript">
    

    function Page_14() {
        start_14();
        inicio();
        count = 3;
    }
    function Page_15() {
        start_15();
        inicio();
        count = 3;
    }


    var cant = 2;
    var cal = 20 / 20;
    var ruta = "../../../../exercises/comunicacion/";
    ////////////// 2do 
    // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    

    function start_14() {
        $("#ventana").load(ruta + '6-2-14/index.php', {
            next: "Page_15()",
            procesar: "result_tipo_6_2_14()",
            titulo: "<center><h5><span>Selecciona</span> la palabra que completa la idea. La forma más sencilla y habitual de contar una narración es presentar los acontecimientos en el orden en el que han sucedido en el tiempo. Cuando esto es así, se dice que la narración sigue un orden…</h5></center>",
            restaurar: "start_14()",
            dir: ruta,
            cod: "6-2-14",
            nota: cal
        });
        return false;
    };

    function start_15() {
        $("#ventana").load(ruta + '6-2-15/index.php', {
            next: "resultado()",
            procesar: "result_tipo_6_2_15()",
            titulo: "<center><h5><span>Identifica</span> las partes del siguiente mapa conceptual.</h5></center>",
            restaurar: "start_15()",
            dir: ruta,
            cod: "6-2-15",
            nota: cal
        });
        return false;
    };

    function resultado() {
        $("#ventana").load('../../../../exercises/resultado/resultado.php');
        return false;
    };
</script>