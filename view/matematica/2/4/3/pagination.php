<script type="text/javascript">
function Page_5() {
    count = 3;
    start_5();
    inicio();
}

function Page_6() {
    count = 3;
    start_6();
    inicio();
}

var cant = 2;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_5() {
    $("#ventana").load(ruta + '2-4-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_2_4_5()",
        titulo: "<center><h5><span>Selecciona</span> las figuras geométricas que tienen 3 vértices.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "2-4-5",
        nota: cal
    });
    return false;
};

function start_6() {
    $("#ventana").load(ruta + '2-4-6/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_4_6()",
        titulo: "<center><h5><span>Selecciona</span> las figuras geométricas que no tienen vértices.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "2-4-6",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>