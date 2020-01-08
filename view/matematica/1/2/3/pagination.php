<script type="text/javascript">

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
var cant = 5;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
function start_11() {
    $("#ventana").load(ruta + '1-2-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_1_2_11()",
        titulo: "<center><h5><span>Resuelve</span> las siguientes adiciones.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "1-2-11",
        nota: cal
    });
    return false;
};
function start_12() {
    $("#ventana").load(ruta + '1-2-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_1_2_12()",
        titulo: "<center><h5><span>Selecciona</span> los sumandos correspondientes en los recuadros y <span>resuelve</span> la operación.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "1-2-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '1-2-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_1_2_13()",
        titulo: "<center><h5><span>Resuelve</span> las siguientes sumas.</h5></center>", 
        restaurar: "start_13()",
        dir: ruta,
        cod: "1-2-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '1-2-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_1_2_14()",
        titulo: "<center><h5><span>Completa</span> los recuadros según el número de objetos y <span>realiza la suma.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "1-2-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '1-2-15/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_2_15()",
        titulo: "<center><h5><span>Verifica</span> la suma de los siguientes elementos y <span>completa</span> las operaciones.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "1-2-15",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>