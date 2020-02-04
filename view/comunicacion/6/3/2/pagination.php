<script type="text/javascript">
    function Page_3() {
        start_3();
        inicio();
        count = 3;
    }

    function Page_4() {
        start_4();
        inicio();
        count = 3;
    }

    function Page_5() {
        start_5();
        inicio();
        count = 3;
    }
    var cant = 3;
    var cal = 20 / 20;
    var ruta = "../../../../exercises/comunicacion/";
    ////////////// 2do 
    // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    function start_3() {
        $("#ventana").load(ruta + '6-3-3/index.php', {
            next: "Page_4()",
            procesar: "result_tipo_6_3_3()",
            titulo: "<center><h5><span>Cuenta</span> las sílabas métricas del siguiente poema y <span>selecciona</span> si se trata de arte mayor o arte menor.</h5></center>",
            restaurar: "start_3()",
            dir: ruta,
            cod: "6-3-3",
            nota: cal
        });
        return false;
    };

    function start_4() {
        $("#ventana").load(ruta + '6-3-4/index.php', {
            next: "Page_5()",
            procesar: "result_tipo_6_3_4()",
            titulo: "<center><h5><span>Selecciona</span>. ¿Qué tipo de poema, según su métrica y rima, es el anterior?</h5></center>",
            restaurar: "start_4()",
            dir: ruta,
            cod: "6-3-4",
            nota: cal
        });
        return false;
    };

    function start_5() {
        $("#ventana").load(ruta + '6-3-5/index.php', {
            next: "resultado()",
            procesar: "result_tipo_6_3_5()",
            titulo: "<center><h5><span>Selecciona</span>. En el verso «un archivo de mar para el verano», ¿qué tipo de licencia métrica se observa?</h5></center>",
            restaurar: "start_5()",
            dir: ruta,
            cod: "6-3-5",
            nota: cal
        });
        return false;
    };


    function resultado() {
        $("#ventana").load('../../../../exercises/resultado/resultado.php');
        return false;
    };
</script>