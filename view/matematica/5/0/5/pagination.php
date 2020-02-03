<script type="text/javascript">

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

var cant = 2;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_9() {
    $("#ventana").load(ruta + '4-0-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_4_0_9()",
        titulo: "<center><h5><span>Observa</span> el siguiente diagrama de Venn. Luego <span>selecciona</span> de la lista los elementos del conjunto según corresponda.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "4-0-9",
        nota: cal
    });
    return false;
};
function start_10() {
    $("#ventana").load(ruta + '4-0-10/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_0_10()",
        titulo: "<center><h5><span>Selecciona</span> en el diagrama de Venn la operación K <span>∪</span> L.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "4-0-10",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>