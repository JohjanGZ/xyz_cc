<script type="text/javascript">


function Page_10() {
    start_10();
    inicio();
    count = 3;
}
function Page_11() {
    start_11();
    inicio();
    count = 3;
}
function Page_12() {
    start_12();
    inicio();
    count = 3;
}
function Page_13() {
    start_13();
    inicio();
    count = 3;
}
var cant = 4;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 

function start_10() {
    $("#ventana").load(ruta + '3-4-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_3_4_10()",
        titulo: "<center><h5><span>Observa</span> atentamente los gráficos y luego <span>compara</span> las fracciones usando los signos <span> ></span>, <span><</span> o <span>=</span>. </h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "3-4-10",
        nota: cal
    });
    return false;
};
function start_11() {
    $("#ventana").load(ruta + '3-4-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_3_4_11()",
        titulo: "<center><h5><span>Observa</span> atentamente los gráficos y luego <span>compara</span> las fracciones usando los signos <span> ></span>, <span><</span> o <span>=</span>. </h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "3-4-11",
        nota: cal
    });
    return false;
};
function start_12() {
    $("#ventana").load(ruta + '3-4-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_3_4_12()",
        titulo: "<center><h5><span>Selecciona</span> la fracción menor.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "3-4-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '3-4-13/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_4_13()",
        titulo: "<center><h5><span>Selecciona</span> la fracción mayor.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "3-4-13",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>