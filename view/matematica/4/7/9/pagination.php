|<script type="text/javascript">
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

var cant = 2;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_17() {
    $("#ventana").load(ruta + '4-7-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_4_7_17()",
        titulo: "<center><h5>Lee el enunciado y las preguntas. Luego, <span>selecciona</span> las respuestas según corresponda.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "4-7-17",
        nota: cal
    });
    return false;
};

function start_18() {
    $("#ventana").load(ruta + '4-7-18/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_7_18()",
        titulo: "<center><h5>Lee el enunciado y las preguntas. Luego, <span>selecciona</span> las respuestas según corresponda.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "4-7-18",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>