<script type="text/javascript">
function Page_lectura_3_4_7_1() {
    start_lectura_3_4_7_1();
    inicio();
    count = 0;
}

function Page_17() {
    start_17();
    inicio();
    count = 3;
}

function Page_lectura_3_4_7_2() {
    start_lectura_3_4_7_2();
    inicio();
    count = 0;
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
function start_lectura_3_4_7_1() {
    $("#ventana").load(ruta + 'lectura3-4-7-1/index.php', {
        next: "Page_17()",
        procesar: "lectura3-4-7-1()",
        titulo: "<center><h5><span>Observa</span> la imagen atentamente y completa el cuadro.</h5></center>",
        restaurar: "start_lectura_3_4_7_1()",
        dir: ruta,
        cod: "lectura3-4-7-1",
        nota: cal
    });
    return false;
};

function start_17() {
    $("#ventana").load(ruta + '3-4-17/index.php', {
        next: "Page_lectura_3_4_7_2()",
        procesar: "result_tipo_3_4_17()",
        titulo: "<center><h5><span>Arrastra</span> las palabras para completar el mapa semántico tomando en cuenta la imagen anterior.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "3-4-17",
        nota: cal
    });
    return false;
};

function start_lectura_3_4_7_2() {
    $("#ventana").load(ruta + 'lectura3-4-7-2/index.php', {
        next: "Page_18()",
        procesar: "lectura3-4-7-2()",
        titulo: "<center><h5><span>Observa</span> la imagen atentamente y completa el cuadro.</h5></center>",
        restaurar: "start_lectura_3_4_7_2()",
        dir: ruta,
        cod: "lectura3-4-7-2",
        nota: cal
    });
    return false;
};

function start_18() {
    $("#ventana").load(ruta + '3-4-18/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_4_18()",
        titulo: "<center><h5><span>Arrastra</span> las palabras para completar el mapa semántico tomando en cuenta la imagen anterior.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "3-4-18",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>