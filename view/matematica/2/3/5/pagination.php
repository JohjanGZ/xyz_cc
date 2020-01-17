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

var cant = 7;
var cal = cant/cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_13() {
    $("#ventana").load(ruta + '2-3-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_2_3_13()",
        titulo: "<center><h5><span>Selecciona</span> las figuras geométricas que tienen los lados rectos.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "2-3-13",
        nota: cal
    });
    return false;
};

function start_14() {
    $("#ventana").load(ruta + '2-3-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_2_3_14()",
        titulo: "<center><h5>¿Cuál de estos objetos es un círculo?<span> Selecciona</span> la alternativa correcta.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "2-3-14",
        nota: cal
    });
    return false;
};

function start_15() {
    $("#ventana").load(ruta + '2-3-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_2_3_15()",
        titulo: "<center><h5>¿Cuál de estos objetos es una circunferencia?<span> Selecciona</span> la alternativa correcta.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "2-3-15",
        nota: cal
    });
    return false;
};

function start_16() {
    $("#ventana").load(ruta + '2-3-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_2_3_16()",
        titulo: "<center><h5><span> Observa</span> y <span>selecciona</span> las alternativas pertenecientes a la figuras ovaladas.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "2-3-16",
        nota: cal
    });
    return false;
};
function start_17() {
    $("#ventana").load(ruta + '2-3-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_2_3_17()",
        titulo: "<center><h5><span> Slecciona</span> la respuesta correcta en cada caso.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "2-3-17",
        nota: cal
    });
    return false;
};

function start_18() {
    $("#ventana").load(ruta + '2-3-18/index.php', {
        next: "start_19()",
        procesar: "result_tipo_2_3_18()",
        titulo: "<center><h5><span> Reconoce</span> y <span>relaciona</span> según corresponda.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "2-3-18",
        nota: cal
    });
    return false;
};
function start_19() {
    $("#ventana").load(ruta + '2-3-19/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_3_19()",
        titulo: "<center><h5><span> Selecciona</span> las figuras que son círculos.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "2-3-19",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>