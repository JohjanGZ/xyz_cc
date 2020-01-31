<script type="text/javascript">

function Page_19() {
    start_19();
    inicio();
    count = 3;
}
function Page_20() {
    start_20();
    inicio();
    count = 3;
}
function Page_21() {
    start_21();
    inicio();
    count = 3;
}
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

var cant = 5;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_19() {
    $("#ventana").load(ruta + '4-4-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_4_4_19()",
        titulo: "<center><h5>En los siguientes polígonos <span>selecciona</span> de la lista el perímetro según corresponda.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "4-4-19",
        nota: cal
    });
    return false;
};
function start_20() {
    $("#ventana").load(ruta + '4-4-20/index.php', {
        next: "Page_21()",
        procesar: "result_tipo_4_4_20()",
        titulo: "<center><h5><span>Resuelve</span> el siguiente problema. Luego, <span>selecciona</span> de la lista la respuesta según corresponda.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "4-4-20",
        nota: cal
    });
    return false;
};
function start_21() {
    $("#ventana").load(ruta + '4-4-21/index.php', {
        next: "Page_22()",
        procesar: "result_tipo_4_4_21()",
        titulo: "<center><h5><span>Lee</span> el enunciado del problema. Luego, <span>selecciona</span> de la lista la respuesta según corresponda.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "4-4-21",
        nota: cal
    });
    return false;
};
function start_22() {
    $("#ventana").load(ruta + '4-4-22/index.php', {
        next: "Page_23()",
        procesar: "result_tipo_4_4_22()",
        titulo: "<center><h5><span>Resuelve</span> el siguiente problema. Luego, <span>selecciona</span> de la lista la respuesta según corresponda.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "4-4-22",
        nota: cal
    });
    return false;
};
function start_23() {
    $("#ventana").load(ruta + '4-4-23/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_4_23()",
        titulo: "<center><h5><span>Lee</span> el enunciado del problema. Luego, <span>selecciona</span> de la lista la respuesta según corresponda.</h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "4-4-23",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>