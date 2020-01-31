|<script type="text/javascript">

function Page_7() {
    start_7();
    inicio();
    count = 3;
}
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
var cant = 3;
var cal = cant/cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_7() {
    $("#ventana").load(ruta + '4-7-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_4_7_7()",
        titulo: "<center><h5>Resuelve la siguientes inecuaciónes y luego <span>selecciona</span> de la lista el conjunto solución de “x” según corresponda.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "4-7-7",
        nota: cal
    });
    return false;
};
function start_8() {
    $("#ventana").load(ruta + '4-7-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_4_7_8()",
        titulo: "<center><h5><span>Resuelve</span  las siguientes inecuaciones. Luego, <span>selecciona</span> de la lista las respuestas correctas para “m”.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "4-7-8",
        nota: cal
    });
    return false;
};
function start_9() {
    $("#ventana").load(ruta + '4-7-9/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_7_9()",
        titulo: "<center><h5><span>Lee</span> el siguiente enunciado y <span>resuelve</span>. Luego <span>selecciona</span> de la lista la respuesta según corresponda.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "4-7-9",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>