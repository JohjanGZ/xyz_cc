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

var cant = 4;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
function start_17() {
    $("#ventana").load(ruta + '3-4-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_3_4_17()",
        titulo: "<center><h5><span>Relaciona</span> las imágenes con los números decimales.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "3-4-17",
        nota: cal
    });
    return false;
};
function start_18() {
    $("#ventana").load(ruta + '3-4-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_3_4_18()",
        titulo: "<center><h5><span>Relaciona</span> según corresponda.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "3-4-18",
        nota: cal
    });
    return false;
};
function start_19() {
    $("#ventana").load(ruta + '3-4-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_3_4_19()",
        titulo: "<center><h5><span>Coloca</span> el decimal según corresponda.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "3-4-19",
        nota: cal
    });
    return false;
};
function start_20() {
    $("#ventana").load(ruta + '3-4-20/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_4_20()",
        titulo: "<center><h5><span>Coloca</span> el decimal según corresponda.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "3-4-20",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>