<script type="text/javascript">

function Page_17() {
    start_17();
    inicio();
    count = 3;
}

function Page_18() {
    start_18();
    inicio();
    count = 3;
}

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
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_17() {
    $("#ventana").load(ruta + '2-0-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_2_0_17()",
        titulo: "<center><h5><span>Observa</span> el pictograma y <span>completa</span> la tabla siguiendo el ejemplo.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "2-0-17",
        nota: cal
    });
    return false;
};

function start_18() {
    $("#ventana").load(ruta + '2-0-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_2_0_18()",
        titulo: "<center><h5><span>Observa</span> el pictograma y <span>completa</span> la tabla siguiendo el ejemplo.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "2-0-18",
        nota: cal
    });
    return false;
};

function start_19() {
    $("#ventana").load(ruta + '2-0-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_2_0_19()",
        titulo: "<center><h5><span>Completa</span> tabla.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "2-0-19",
        nota: cal
    });
    return false;
};

function start_20() {
    $("#ventana").load(ruta + '2-0-20/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_0_20()",
        titulo: "<center><h5><span>Observa</span> el pictograma y <span>completa</span> la tabla siguiendo el ejemplo.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "2-0-20",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>