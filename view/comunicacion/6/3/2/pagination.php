<script type="text/javascript">
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

function Page_6() {
    start_6();
    inicio();
    count = 3;
}

var cant = 3;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_4() {
    $("#ventana").load(ruta + '5-3-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_5_3_4()",
        titulo: "<center><h5><span>Completa</span> el siguiente enunciado con la alternativa adecuada.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "5-3-4",
        nota: cal
    });
    return false;
};

function start_5() {
    $("#ventana").load(ruta + '5-3-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_5_3_5()",
        titulo: "<center><h5><span>Relaciona</span> con líneas la información según corresponda.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "5-3-5",
        nota: cal
    });
    return false;
};

function start_6() {
    $("#ventana").load(ruta + '5-3-6/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_3_6()",
        titulo: "<center><h5><span>Selecciona</span> la afirmación correcta acerca del cuadro resumen.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "5-3-6",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>