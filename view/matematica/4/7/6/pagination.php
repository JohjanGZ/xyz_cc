|<script type="text/javascript">

function Page_10() {
    start_10();
    inicio();
    count = 3;
}
function Page_11() {
    start_11();
    inicio();
    count = 3;
}
var cant = 2;
var cal = cant/cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_10() {
    $("#ventana").load(ruta + '4-7-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_4_7_10()",
        titulo: "<center><h5>Calcula los valores naturales que cumplan con las siguientes desigualdades no estrictas. Luego <span>selecciona</span> de la lista los valores según corresponda.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "4-7-10",
        nota: cal
    });
    return false;
};
function start_11() {
    $("#ventana").load(ruta + '4-7-11/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_7_11()",
        titulo: "<center><h5>Resuelve las siguientes desigualdades no estrictas y luego <span>selecciona</span> de la lista el conjunto solución de “x” según corresponda.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "4-7-11",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>