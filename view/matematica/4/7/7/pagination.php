|<script type="text/javascript">

function Page_12() {
    start_12();
    inicio();
    count = 3;
}
function Page_13() {
    start_13();
    inicio();
    count = 3;
}
function Page_14() {
    start_14();
    inicio();
    count = 3;
}

var cant = 3;
var cal = cant/cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_12() {
    $("#ventana").load(ruta + '4-7-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_4_7_12()",
        titulo: "<center><h5><span>Arrastra</span> los poliedros a su lugar teniendo en cuenta el n.° de caras, vértices y aristas según corresponda.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "4-7-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '4-7-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_4_7_13()",
        titulo: "<center><h5>Observa los siguientes objetos y responde a que solido redondo se asemejan. Para ello <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "4-7-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '4-7-14/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_7_14()",
        titulo: "<center><h5>Observa los siguientes objetos y <span>selecciona</span> los cilindros y prismas.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "4-7-14",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>