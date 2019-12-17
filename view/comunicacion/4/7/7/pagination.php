<script type="text/javascript">
function Page_lectura_3_7_7_1() {
    start_lectura_3_7_7_1();
    inicio();
    count = 0;
}

function Page_lectura_3_7_7_2() {
    start_lectura_3_7_7_2();
    inicio();
    count = 0;
}

function Page_19() {
    start_19();
    inicio();
    count = 3;
}

function Page_20() {
    start_20();
    inicio();
    count = 3;
}

function Page_21() {
    start_21();
    inicio();
    count = 3;
}

function Page_22() {
    start_22();
    inicio();
    count = 3;
}

function Page_23() {
    start_23();
    inicio();
    count = 3;
}

function Page_24() {
    start_24();
    inicio();
    count = 3;
}

function Page_25() {
    start_25();
    inicio();
    count = 3;
}
var cant = 7;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_lectura_3_7_7_1() {
    $("#ventana").load(ruta + 'lectura3-7-7-1/index.php', {
        next: "Page_lectura_3_7_7_2()",
        procesar: "lectura3-7-7-1()",
        titulo: "<center><h5><span>Lee</span> atentamente y <span>responde</span> las preguntas.</h5></center>",
        restaurar: "start_lectura_3_7_7_1()",
        dir: ruta,
        cod: "lectura3-7-7-1",
        nota: cal
    });
    return false;
};

function start_lectura_3_7_7_2() {
    $("#ventana").load(ruta + 'lectura3-7-7-2/index.php', {
        next: "Page_19()",
        procesar: "lectura3-7-7-2()",
        titulo: "<center><h5><span>Lee</span> atentamente y <span>responde</span> las preguntas.</h5></center>",
        restaurar: "start_lectura_3_7_7_2()",
        dir: ruta,
        cod: "lectura3-7-7-2",
        nota: cal
    });
    return false;
};

function start_19() {
    $("#ventana").load(ruta + '3-7-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_3_7_19()",
        titulo: "<center><h5><span>Selecciona</span> las respuestas correctas.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "3-7-19",
        nota: cal
    });
    return false;
};

function start_20() {
    $("#ventana").load(ruta + '3-7-20/index.php', {
        next: "Page_21()",
        procesar: "result_tipo_3_7_20()",
        titulo: "<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "3-7-20",
        nota: cal
    });
    return false;
};

function start_21() {
    $("#ventana").load(ruta + '3-7-21/index.php', {
        next: "Page_22()",
        procesar: "result_tipo_3_7_21()",
        titulo: "<center><h5><span>Ordena</span> las imágenes según la secuencia de la historia.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "3-7-21",
        nota: cal
    });
    return false;
};

function start_22() {
    $("#ventana").load(ruta + '3-7-22/index.php', {
        next: "Page_23()",
        procesar: "result_tipo_3_7_22()",
        titulo: "<center><h5><span>Arrastra</span> las palabras para completar las oraciones.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "3-7-22",
        nota: cal
    });
    return false;
};

function start_23() {
    $("#ventana").load(ruta + '3-7-23/index.php', {
        next: "Page_24()",
        procesar: "result_tipo_3_7_23()",
        titulo: "<center><h5><span>Selecciona</span> las características de Juan.</h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "3-7-23",
        nota: cal
    });
    return false;
};

function start_24() {
    $("#ventana").load(ruta + '3-7-24/index.php', {
        next: "Page_25()",
        procesar: "result_tipo_3_7_24()",
        titulo: "<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "3-7-24",
        nota: cal
    });
    return false;
};

function start_25() {
    $("#ventana").load(ruta + '3-7-25/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_7_25()",
        titulo: "<center><h5><span>Selecciona</span> las respuestas correctas.</h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "3-7-25",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>