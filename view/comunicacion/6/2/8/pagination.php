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

var cant = 9;
var cal = 23 / 23;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_22() {
    $("#ventana").load(ruta + '5-2-22/index.php', {
        next: "Page_23()",
        procesar: "result_tipo_5_2_22()",
        titulo: "<center><h5><span>Selecciona</span> quiénes son los responsables de elaborar un folleto.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "5-2-22",
        nota: cal
    });
    return false;
};

function start_23() {
    $("#ventana").load(ruta + '5-2-23/index.php', {
        next: "Page_24()",
        procesar: "result_tipo_5_2_23()",
        titulo: "<center><h5><span>Selecciona</span> qué materiales son los que se emplearán para elaborar un folleto.</h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "5-2-23",
        nota: cal
    });
    return false;
};

function start_24() {
    $("#ventana").load(ruta + '5-2-24/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_2_24()",
        titulo: "<center><h5><span>Selecciona</span> la afirmación correcta al narrador.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "5-2-24",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>