<script type="text/javascript">

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

function Page_17() {
    start_17();
    inicio();
    count = 3;
}


var cant = 3;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 8do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_15() {
    $("#ventana").load(ruta + '4-3-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_4_3_15()",
        titulo: "<center><h5><span>Selecciona</span> de la lista los valores para completar las conversiones según corresponda.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "4-3-15",
        nota: cal
    });
    return false;
};
function start_16() {
    $("#ventana").load(ruta + '4-3-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_4_3_16()",
        titulo: "<center><h5><span>Relaciona</span> con su medida según corresponda.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "4-3-16",
        nota: cal
    });
    return false;
};
function start_17() {
    $("#ventana").load(ruta + '4-3-17/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_3_17()",
        titulo: "<center><h5><span>Ordena</span> de mayor a menor las longitudes de los siguientes objetos.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "4-3-17",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>