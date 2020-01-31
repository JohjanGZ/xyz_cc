|<script type="text/javascript">
function Page_15() {
    start_15();
    inicio();
    count = 3;
}

function Page_16() {
    start_16();
    inicio();
    count = 3;
}

var cant = 2;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_15() {
    $("#ventana").load(ruta + '4-7-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_4_7_15()",
        titulo: "<center><h5>Observa los siguientes recipientes. Luego, <span>ordénalos</span> de menor a mayor capacidad.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "4-7-15",
        nota: cal
    });
    return false;
};

function start_16() {
    $("#ventana").load(ruta + '4-7-16/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_7_16()",
        titulo: "<center><h5><span>Lee</span> el enunciado y las preguntas. Luego, <span>selecciona</span> las respuestas según corresponda.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "4-7-16",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>