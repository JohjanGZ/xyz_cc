<script type="text/javascript">
    function Page_lectura_6_2_1_1() {
        start_lectura_6_2_1_1();
        inicio();
        count = 0;
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

    function Page_13() {
        start_13();
        inicio();
        count = 3;
    }


    var cant = 3;
    var cal = 20 / 20;
    var ruta = "../../../../exercises/comunicacion/";
    ////////////// 2do 
    // ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

    function start_lectura_6_2_1_1() {
        $("#ventana").load(ruta + 'lectura6-2-1-1/index.php', {
            next: "Page_11()",
            procesar: "lectura6-2-1-1()",
            titulo: "<center><h5><span>Lee</span> atentamente y <span>contesta</span> las preguntas.</h5></center>",
            restaurar: "start_lectura_6_2_1_1()",
            dir: ruta,
            cod: "lectura6-2-1-1",
            nota: cal
        });
        return false;
    };
    function start_11() {
        $("#ventana").load(ruta + '6-2-11/index.php', {
            next: "Page_12()",
            procesar: "result_tipo_6_2_11()",
            titulo: "<center><h5><span>Selecciona</span>. Según el texto, ¿qué hace falta para integrarse totalmente en la sociedad?</h5></center>",
            restaurar: "start_11()",
            dir: ruta,
            cod: "6-2-11",
            nota: cal
        });
        return false;
    };

    function start_12() {
        $("#ventana").load(ruta + '6-2-12/index.php', {
            next: "Page_13()",
            procesar: "result_tipo_6_2_12()",
            titulo: "<center><h5><span>Marca</span> si son verdaderas (V) o falsas (F) las siguientes afirmaciones.</h5></center>",
            restaurar: "start_12()",
            dir: ruta,
            cod: "6-2-12",
            nota: cal
        });
        return false;
    };
    function start_13() {
        $("#ventana").load(ruta + '6-2-13/index.php', {
            next: "resultado()",
            procesar: "result_tipo_6_2_13()",
            titulo: "<center><h5><span>Selecciona</span>. ¿Cuál es el propósito del texto leído?</h5></center>",
            restaurar: "start_13()",
            dir: ruta,
            cod: "6-2-13",
            nota: cal
        });
        return false;
    };

    function resultado() {
        $("#ventana").load('../../../../exercises/resultado/resultado.php');
        return false;
    };
</script>