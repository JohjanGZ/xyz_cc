<script type="text/javascript">
function Page_1() {
    start_1();
    inicio();
    count = 3;
}

function Page_2() {
    start_2();
    inicio();
    count = 3;
}

function Page_3() {
    start_3();
    inicio();
    count = 3;
}

var cant = 3;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '5-2-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_5_2_1()",
        titulo: "<center><h5><span>Observa</span> las imágenes y coloca su nombre según corresponda de acuerdo a las pp 40-41 del Libro de Texto.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "5-2-1",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '5-2-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_5_2_2()",
        titulo: "<center><h5><span>Identifica</span> y <span>completa</span> la siguiente tabla con los datos requeridos de acuerdo a las pp 40-41 del Libro de Texto.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "5-2-2",
        nota: cal
    });
    return false;
};

function start_3() {
    $("#ventana").load(ruta + '5-2-3/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_2_3()",
        titulo: "<center><h5><span>Selecciona</span> el enunciado más adecuado acerca del folleto.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "5-2-3",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>