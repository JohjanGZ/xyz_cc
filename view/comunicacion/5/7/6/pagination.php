<script type="text/javascript">
function Page_lectura_4_7_6_1() {
    start_lectura_4_7_6_1();
    inicio();
    count = 0;
}
function Page_15() {
    start_15();
    inicio();
    count = 3;
}
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

var cant = 7;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_lectura_4_7_6_1() {
    $("#ventana").load(ruta + 'lectura4-7-6-1/index.php', {
        next: "Page_15()",
        procesar: "lectura1-1-1-1()",
        titulo: "<center><h5><span>Lee</span> atentamente y <span>contesta</span> las preguntas.</h5></center>",
        restaurar: "start_lectura_4_7_6_1()",
        dir: ruta,
        cod: "lectura4-7-6-1",
        nota: cal
    });
    return false;
};

function start_15() {
    $("#ventana").load(ruta + '4-7-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_4_7_15()",
        titulo: "<center><h5><span>Selecciona</span> si el enunciado es verdadero o si es falso.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "4-7-15",
        nota: cal
    });
    return false;
};

function start_16() {
    $("#ventana").load(ruta + '4-7-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_4_7_16()",
        titulo: "<center><h5><span>Lee</span> cada enunciado y <span>enuméralos</span> del 1 al 3 según el orden en el que sucedieron en la lectura.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "4-7-16",
        nota: cal
    });
    return false;
};
function start_17() {
    $("#ventana").load(ruta + '4-7-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_4_7_17()",
        titulo: "<center><h5><span>Selecciona</span> las respuestas correctas.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "4-7-17",
        nota: cal
    });
    return false;
};
function start_18() {
    $("#ventana").load(ruta + '4-7-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_4_7_18()",
        titulo: "<center><h5><span>Selecciona</span> los 4 nombres que la reina le menciona al hombrecillo antes de dar con el correcto.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "4-7-18",
        nota: cal
    });
    return false;
};
function start_19() {
    $("#ventana").load(ruta + '4-7-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_4_7_19()",
        titulo: "<center><h5><span>Observa</span> la imagen y <span>selecciona</span> sus características.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "4-7-19",
        nota: cal
    });
    return false;
};
function start_20() {
    $("#ventana").load(ruta + '4-7-20/index.php', {
        next: "Page_21()",
        procesar: "result_tipo_4_7_20()",
        titulo: "<center><h5><span>Observa</span> la imagen y <span>selecciona</span> sus características.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "4-7-20",
        nota: cal
    });
    return false;
};

function start_21() {
    $("#ventana").load(ruta + '4-7-21/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_7_21()",
        titulo: "<center><h5><span>Selecciona</span> el significado del siguiente texto.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "4-7-21",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>