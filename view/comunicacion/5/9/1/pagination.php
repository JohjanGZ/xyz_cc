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
    $("#ventana").load(ruta + '5-9-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_5_9_1()",
        titulo: "<center><h5><span>Selecciona</span> la afirmación incorrecta de acuerdo al “Manual de uso de una licuadora” ubicado en la página 152 del Texto escolar.</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "5-9-1",
        nota: cal
    });
    return false;
};

function start_2() {
    $("#ventana").load(ruta + '5-9-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_5_9_2()",
        titulo: "<center><h5><span>Organiza</span> las partes de la licuadora y selecciona la alternativa correcta.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "5-9-2",
        nota: cal
    });
    return false;
};

function start_3() {
    $("#ventana").load(ruta + '5-9-3/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_9_3()",
        titulo: "<center><h5><span>Selecciona</span> la alternativa que descartarías como parte del manual de instrucción.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "5-9-3",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>