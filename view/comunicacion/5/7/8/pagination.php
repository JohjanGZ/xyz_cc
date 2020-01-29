<script type="text/javascript">
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
var cant = 3;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_22() {
    $("#ventana").load(ruta + '5-6-22/index.php', {
        next: "Page_23()",
        procesar: "result_tipo_5_6_22()",
        titulo: "<center><h5><span>Selecciona</span> la definición correcta de un tríptico.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "5-6-22",
        nota: cal
    });
    return false;
};

function start_23() {
    $("#ventana").load(ruta + '5-6-23/index.php', {
        next: "Page_24()",
        procesar: "result_tipo_5_6_23()",
        titulo: "<center><h5><span>Selecciona</span> la imagen que representa un tríptico.</h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "5-6-23",
        nota: cal
    });
    return false;
};

function start_24() {
    $("#ventana").load(ruta + '5-6-24/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_6_24()",
        titulo: "<center><h5><span>Selecciona</span> el propósito adecuado de un tríptico.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "5-6-24",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>