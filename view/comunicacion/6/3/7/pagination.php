<script type="text/javascript">
    
    function Page_16() {
        start_16();
        inicio();
        count = 3;
    }
    function Page_17() {
        start_17();
        inicio();
        count = 3;
    }
    function Page_18() {
        start_18();
        inicio();
        count = 3;
    }

    var cant = 2;
    var cal = 20 / 20;
    var ruta = "../../../../exercises/comunicacion/";
    ////////////// 2do 
    // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    function start_16() {
        $("#ventana").load(ruta + '6-2-16/index.php', {
            next: "Page_17()",
            procesar: "result_tipo_6_2_16()",
            titulo: "<center><h5><span>Selecciona</span> la palabra que muestre una tildación adecuada.</h5></center>",
            restaurar: "start_16()",
            dir: ruta,
            cod: "6-2-16",
            nota: cal
        });
        return false;
    };
    function start_17() {
        $("#ventana").load(ruta + '6-2-17/index.php', {
            next: "Page_18()",
            procesar: "result_tipo_6_2_17()",
            titulo: "<center><h5>Separa en sílabas correctamente las siguientes palabras.</h5></center>",
            restaurar: "start_17()",
            dir: ruta,
            cod: "6-2-17",
            nota: cal
        });
        return false;
    };

    function start_18() {
        $("#ventana").load(ruta + '6-2-18/index.php', {
            next: "resultado()",
            procesar: "result_tipo_6_2_18()",
            titulo: "<center><h5><span>Selecciona</span> la opción correcta. ¿Los monosílabos se tildan?</h5></center>",
            restaurar: "start_18()",
            dir: ruta,
            cod: "6-2-18",
            nota: cal
        });
        return false;
    };

    function resultado() {
        $("#ventana").load('../../../../exercises/resultado/resultado.php');
        return false;
    };
</script>