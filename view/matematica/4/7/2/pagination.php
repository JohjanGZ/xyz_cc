<script type="text/javascript">
function Page_2() {
    start_2();
    inicio();
    count = 3;
}

function Page_3() {
    start_3();
    inicio();
    count = 3;
}

function Page_4() {
    start_4();
    inicio();
    count = 3;
}

var cant = 3;
var cal = cant / cant;
// console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_2() {
    $("#ventana").load(ruta + '4-7-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_4_7_2()",
        titulo: "<center><h5>Resuelve las siguientes ecuaciones y luego <span>selecciona</span> de la lista el valor de “x” según corresponda.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "4-7-2",
        nota: cal
    });
    return false;
};

function start_3() {
    $("#ventana").load(ruta + '4-7-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_4_7_3()",
        titulo: "<center><h5>Resuelve las siguientes ecuaciones y luego <span>selecciona</span> de la lista el valor de “y” según corresponda.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "4-7-3",
        nota: cal
    });
    return false;
};

function start_4() {
    $("#ventana").load(ruta + '4-7-4/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_7_4()",
        titulo: "<center><h5>Resuelve las siguientes ecuaciones y luego <span>selecciona</span> de la lista el valor de “m” según corresponda.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "4-7-4",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>