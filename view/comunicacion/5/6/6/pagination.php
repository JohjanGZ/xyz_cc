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
var cant = 3;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_16() {
    $("#ventana").load(ruta + '5-6-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_5_6_16()",
        titulo: "<center><h5><span>Selecciona</span> la característica principal del texto expositivo.</center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "5-6-16",
        nota: cal
    });
    return false;
};

function start_17() {
    $("#ventana").load(ruta + '5-6-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_5_6_17()",
        titulo: "<center><h5><span>Selecciona</span> la imagen que representa el texto expositivo de tipo divulgativo.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "5-6-17",
        nota: cal
    });
    return false;
};

function start_18() {
    $("#ventana").load(ruta + '5-6-18/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_6_18()",
        titulo: "<center><h5><span>Selecciona</span> los elementos y <span>completa</span> la tabla según corresponda.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "5-6-18",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>