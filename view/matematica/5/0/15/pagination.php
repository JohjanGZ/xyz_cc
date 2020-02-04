<script type="text/javascript">

function Page_22() {
    start_22();
    inicio();
    count = 3;
}
function Page_23() {
    start_23();
    inicio();
    count = 3;
}
var cant = 2;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 22do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_22() {
    $("#ventana").load(ruta + '5-0-22/index.php', {
        next: "Page_23()",
        procesar: "result_tipo_5_0_22()",
        titulo: "<center><h5><span>Completa</span> las siguientes equivalencias. Para ello <span>selecciona</span> de la lista los valores correspondientes.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "5-0-22",
        nota: cal
    });
    return false;
};
function start_23() {
    $("#ventana").load(ruta + '5-0-23/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_0_23()",
        titulo: "<center><h5><span>Completa</span> las siguientes equivalencias. Para ello <span>selecciona</span> de la lista los valores correspondientes.</h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "5-0-23",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>