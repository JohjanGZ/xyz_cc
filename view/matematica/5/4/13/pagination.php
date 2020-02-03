<script type="text/javascript">

function Page_24() {
    start_24();
    inicio();
    count = 3;
}

function Page_25() {
    start_25();
    inicio();
    count = 3;
}

var cant = 2;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_24() {
    $("#ventana").load(ruta + '4-4-24/index.php', {
        next: "Page_25()",
        procesar: "result_tipo_4_4_24()",
        titulo: "<center><h5><span>Interpreta</span> el gráfico lineal. Luego <span>selecciona</span> de la lista el número de computadoras vendidas en una semana según corresponda.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "4-4-24",
        nota: cal
    });
    return false;
};
function start_25() {
    $("#ventana").load(ruta + '4-4-25/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_4_25()",
        titulo: "<center><h5><span>Interpreta</span> el siguiente pictograma. Luego, <span>selecciona</span> de la lista las respuestas según corresponda.</h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "4-4-25",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>