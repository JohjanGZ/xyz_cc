<script type="text/javascript">
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
function Page_36() {
    start_36();
    inicio();
    count = 3;
}
function Page_37() {
    start_37();
    inicio();
    count = 3;
}
var cant = 5;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_33() {
    $("#ventana").load(ruta + '1-3-33/index.php', {
        next: "Page_34()",
        procesar: "result_tipo_1_3_33()",
        titulo: "<center><h5><span>Lee</span>, <span>escribe</span> los datos y <span>resuelve</span> la adición en el tablero posicional.</h5></center>",
        restaurar: "start_33()",
        dir: ruta,
        cod: "1-3-33",
        nota: cal
    });
    return false;
};
function start_34() {
    $("#ventana").load(ruta + '1-3-34/index.php', {
        next: "Page_35()",
        procesar: "result_tipo_1_3_34()",
        titulo: "<center><h5><span>Lee</span>, <span>escribe</span> los datos y <span>resuelve</span> la adición en el tablero posicional.</h5></center>",
        restaurar: "start_34()",
        dir: ruta,
        cod: "1-3-34",
        nota: cal
    });
    return false;
};
function start_35() {
    $("#ventana").load(ruta + '1-3-35/index.php', {
        next: "Page_36()",
        procesar: "result_tipo_1_3_35()",
        titulo: "<center><h5><span>Lee</span>, <span>escribe</span> los datos y <span>resuelve</span> la adición en el tablero posicional.</h5></center>",
        restaurar: "start_35()",
        dir: ruta,
        cod: "1-3-35",
        nota: cal
    });
    return false;
};
function start_36() {
    $("#ventana").load(ruta + '1-3-36/index.php', {
        next: "Page_37()",
        procesar: "result_tipo_1_3_36()",
        titulo: "<center><h5><span>Lee</span>, <span>escribe</span> los datos y <span>resuelve</span> la adición en el tablero posicional.</h5></center>",
        restaurar: "start_36()",
        dir: ruta,
        cod: "1-3-36",
        nota: cal
    });
    return false;
};
function start_37() {
    $("#ventana").load(ruta + '1-3-37/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_3_37()",
        titulo: "<center><h5><span>Completa</span> la tabla</h5></center>",
        restaurar: "start_37()",
        dir: ruta,
        cod: "1-3-37",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>