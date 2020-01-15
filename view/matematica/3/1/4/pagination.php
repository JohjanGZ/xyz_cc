<script type="text/javascript">
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

function Page_24() {
    start_24();
    inicio();
    count = 3;
}


var cant = 5;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_20() {
    $("#ventana").load(ruta + '3-1-20/index.php', {
        next: "Page_21()",
        procesar: "result_tipo_3_1_20()",
        titulo: "<center><h5> <span>Comprueba</span> las siguientes divisiones.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "3-1-20",
        nota: cal
    });
    return false;
};

function start_21() {
    $("#ventana").load(ruta + '3-1-21/index.php', {
        next: "Page_22()",
        procesar: "result_tipo_3_1_21()",
        titulo: "<center><h5> <span>Resuelve</span> las divisiones y <span>realiza</span> su comprobación.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "3-1-21",
        nota: cal
    });
    return false;
};

function start_22() {
    $("#ventana").load(ruta + '3-1-22/index.php', {
        next: "Page_23()",
        procesar: "result_tipo_3_1_22()",
        titulo: "<center><h5> <span>Completa</span> la tabla.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "3-1-22",
        nota: cal
    });
    return false;
};

function start_23() {
    $("#ventana").load(ruta + '3-1-23/index.php', {
        next: "Page_24()",
        procesar: "result_tipo_3_1_23()",
        titulo: "<center><h5> <span>Completa</span> la tabla.</h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "3-1-23",
        nota: cal
    });
    return false;
};

function start_24() {
    $("#ventana").load(ruta + '3-1-24/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_1_24()",
        titulo: "<center><h5><span>Resuelve</span> los siguientes problemas y  <span>selecciona</span> la alternativa correcta.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "3-1-24",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>