<script type="text/javascript">
function Page_lectura_2_3_4_1() {
    start_lectura_2_3_4_1();
    inicio();
    count = 0;
}

function Page_8() {
    start_8();
    inicio();
    count = 3;
}

function Page_9() {
    start_9();
    inicio();
    count = 3;
}

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

var cant = 4;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_lectura_2_3_4_1() {
    $("#ventana").load(ruta + 'lectura2-3-4-1/index.php', {
        next: "Page_8()",
        procesar: "lectura2-3-4-1()",
        titulo: "<center><h5><span class='ftitulo'>Lee</span> atentamente y contesta las preguntas.</h5></center>",
        restaurar: "start_lectura_2_3_4_1()",
        dir: ruta,
        cod: "lectura2-3-4-1",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '2-3-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_2_3_8()",
        titulo: "<center><h5><span>Marca</span> la respuesta correcta.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "2-3-8",
        nota: cal
    });
    return false;
};

function start_9() {
    $("#ventana").load(ruta + '2-3-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_2_3_9()",
        titulo: "<center><h5><span>Relaciona</span> la palabra resaltada con su respectivo sinónimo.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "2-3-9",
        nota: cal
    });
    return false;
};

function start_10() {
    $("#ventana").load(ruta + '2-3-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_2_3_10()",
        titulo: "<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "2-3-10",
        nota: cal
    });
    return false;
};

function start_11() {
    $("#ventana").load(ruta + '2-3-11/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_3_11()",
        titulo: "<center><h5><span>Arrastra</span> las características de los personajes donde correspondan.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "2-3-11",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>