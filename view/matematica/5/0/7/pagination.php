<script type="text/javascript">

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


var cant = 2;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_13() {
    $("#ventana").load(ruta + '4-0-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_4_0_13()",
        titulo: "<center><h5><span>Observa</span> el diagrama de Venn y resuelve. Luego, <span>selecciona</span> de la lista los elementos y el cardinal según corresponda.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "4-0-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '4-0-14/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_0_14()",
        titulo: "<center><h5><span>Observa</span> el diagrama de Venn y resuelve. Luego, <span>selecciona</span> de la lista los elementos y el cardinal según corresponda.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "4-0-14",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>