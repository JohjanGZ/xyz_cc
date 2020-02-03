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
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_15() {
    $("#ventana").load(ruta + '4-0-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_4_0_15()",
        titulo: "<center><h5><span>Relaciona</span> cada figura según corresponda.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "4-0-15",
        nota: cal
    });
    return false;
};
function start_16() {
    $("#ventana").load(ruta + '4-0-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_4_0_16()",
        titulo: "<center><h5><span>Observa</span> el plano <span>S</span>. Luego, en la tabla <span>selecciona</span> de la lista la letra <span>V</span> si es verdadero o <span>F</span> si es falso según corresponda.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "4-0-16",
        nota: cal
    });
    return false;
};
function start_17() {
    $("#ventana").load(ruta + '4-0-17/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_0_17()",
        titulo: "<center><h5><span>Observa</span> las siguientes rectas. Luego, <span>selecciona</span> de la lista según corresponda.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "4-0-17",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>