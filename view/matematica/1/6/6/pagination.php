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

var cant = 18;
var cal = cant / cant;
// console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
function start_17() {
    $("#ventana").load(ruta + '1-6-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_1_6_17()",
        titulo: "<center><h5><span>Selecciona</span> la hora que señala cada reloj.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "1-6-17",
        nota: cal
    });
    return false;
};

function start_18() {
    $("#ventana").load(ruta + '1-6-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_1_6_18()",
        titulo: "<center><h5><span>Observa</span> la hora que señala cada reloj y <span>marca</span> la alternativa correcta.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "1-6-18",
        nota: cal
    });
    return false;
};

function start_19() {
    $("#ventana").load(ruta + '1-6-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_1_6_19()",
        titulo: "<center><h5><span>Observa</span> la hora que señala cada reloj y <span>marca</span> la alternativa correcta.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "1-6-19",
        nota: cal
    });
    return false;
};

function start_20() {
    $("#ventana").load(ruta + '1-6-20/index.php', {
        next: "Page_21()",
        procesar: "result_tipo_1_6_20()",
        titulo: "<center><h5><span>Relaciona</span> la hora con lo que señala cada reloj.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "1-6-20",
        nota: cal
    });
    return false;
};

function start_21() {
    $("#ventana").load(ruta + '1-6-21/index.php', {
        next: "Page_22()",
        procesar: "result_tipo_1_6_21()",
        titulo: "<center><h5><span>Lee</span> los siguientes problemas y <span>señala</span> la alternativa correcta</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "1-6-21",
        nota: cal
    });
    return false;
};

function start_22() {
    $("#ventana").load(ruta + '1-6-22/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_6_22()",
        titulo: "<center><h5><span>Lee</span> los siguientes problemas y <span>señala</span> la alternativa correcta</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "1-6-22",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>