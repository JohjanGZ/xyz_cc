<script type="text/javascript">
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

var cant = 2;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_17() {
    $("#ventana").load(ruta + '1-9-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_1_9_17()",
        titulo: "<center><h5><span>Observa</span> las imágenes, luego selecciona el número que corresponde al enunciado.</h5></center>",
         
        restaurar: "start_17()",
        dir: ruta,
        cod: "1-9-17",
        nota: cal
    });
    return false;
};
function start_18() {
    $("#ventana").load(ruta + '1-9-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_1_9_18()",
        titulo: "<center><h5><span>Selecciona</span> la sílaba correcta según el nombre de cada imagen.</h5></center>",
         
        restaurar: "start_18()",
        dir: ruta,
        cod: "1-9-18",
        nota: cal
    });
    return false;
};
function start_19() {
    $("#ventana").load(ruta + '1-9-19/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_9_19()",
        titulo: "<center><h5><span>Selecciona</span> la palabra que nombre a cada dibujo.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "1-9-19",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>