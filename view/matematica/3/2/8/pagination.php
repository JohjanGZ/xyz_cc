<script type="text/javascript">
function Page_28() {
    start_28();
    inicio();
    count = 3;
}
function Page_29() {
    start_29();
    inicio();
    count = 3;
}
function Page_30() {
    start_30();
    inicio();
    count = 3;
}
function Page_31() {
    start_31();
    inicio();
    count = 3;
}
function Page_32() {
    start_32();
    inicio();
    count = 3;
}
function Page_33() {
    start_33();
    inicio();
    count = 3;
}
function Page_34() {
    start_34();
    inicio();
    count = 3;
}
function Page_35() {
    start_35();
    inicio();
    count = 3;
}

var cant = 8;
var cal = cant / cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_28() {
    $("#ventana").load(ruta + '3-2-28/index.php', {
        next: "Page_29()",
        procesar: "result_tipo_3_2_28()",
        titulo: "<center><h5><span>Relaciona</span> las divisiones con su respectivo resultado.</h5></center>",
        restaurar: "start_28()",
        dir: ruta,
        cod: "3-2-28",
        nota: cal
    });
    return false;
};
function start_29() {
    $("#ventana").load(ruta + '3-2-29/index.php', {
        next: "Page_30()",
        procesar: "result_tipo_3_2_29()",
        titulo: "<center><h5><span>Resuelve</span> las siguientes divisiones.</h5></center>",
        restaurar: "start_29()",
        dir: ruta,
        cod: "3-2-29",
        nota: cal
    });
    return false;
};
function start_30() {
    $("#ventana").load(ruta + '3-2-30/index.php', {
        next: "Page_31()",
        procesar: "result_tipo_3_2_30()",
        titulo: "<center><h5><span>Resuelve</span> las siguientes divisiones.</h5></center>",
        restaurar: "start_30()",
        dir: ruta,
        cod: "3-2-30",
        nota: cal
    });
    return false;
};
function start_31() {
    $("#ventana").load(ruta + '3-2-31/index.php', {
        next: "Page_32()",
        procesar: "result_tipo_3_2_31()",
        titulo: "<center><h5><span>Selecciona</span> verdadero o falso según corresponda.</h5></center>",
        restaurar: "start_31()",
        dir: ruta,
        cod: "3-2-31",
        nota: cal
    });
    return false;
};
function start_32() {
    $("#ventana").load(ruta + '3-2-32/index.php', {
        next: "Page_33()",
        procesar: "result_tipo_3_2_32()",
        titulo: "<center><h5><span>Relaciona</span> según corresponda.</h5></center>",
        restaurar: "start_32()",
        dir: ruta,
        cod: "3-2-32",
        nota: cal
    });
    return false;
};
function start_33() {
    $("#ventana").load(ruta + '3-2-33/index.php', {
        next: "Page_34()",
        procesar: "result_tipo_3_2_33()",
        titulo: "<center><h5><span>Completa</span> las tablas.</h5></center>",
        restaurar: "start_33()",
        dir: ruta,
        cod: "3-2-33",
        nota: cal
    });
    return false;
};
function start_34() {
    $("#ventana").load(ruta + '3-2-34/index.php', {
        next: "Page_35()",
        procesar: "result_tipo_3_2_34()",
        titulo: "<center><h5><span>Completa</span> las tablas.</h5></center>",
        restaurar: "start_34()",
        dir: ruta,
        cod: "3-2-34",
        nota: cal
    });
    return false;
};
function start_35() {
    $("#ventana").load(ruta + '3-2-35/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_2_35()",
        titulo: "<center><h5><span>Relaciona</span> cada división con su resultado correcto.</h5></center>",
        restaurar: "start_35()",
        dir: ruta,
        cod: "3-2-35",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>