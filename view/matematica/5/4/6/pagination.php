<script type="text/javascript">

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

var cant = 3;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_8() {
    $("#ventana").load(ruta + '4-4-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_4_4_8()",
        titulo: "<center><h5><span>Resuelve</span> las operaciones de adición y sustracción. Luego, <span>selecciona</span> de la lista la respuesta según corresponda.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "4-4-8",
        nota: cal
    });
    return false;
};
function start_9() {
    $("#ventana").load(ruta + '4-4-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_4_4_9()",
        titulo: "<center><h5><span>Resuelve</span> las operaciones de multiplicación. Luego, <span>selecciona</span> de la lista la respuesta según corresponda.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "4-4-9",
        nota: cal
    });
    return false;
};
function start_10() {
    $("#ventana").load(ruta + '4-4-10/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_4_10()",
        titulo: "<center><h5><span>Resuelve</span> las operaciones de división. Luego, <span>selecciona</span> de la lista la respuesta según corresponda.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "4-4-10",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>