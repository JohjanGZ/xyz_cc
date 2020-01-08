<script type="text/javascript">
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
var cant = 5;
var cal = cant / cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_18() {
    $("#ventana").load(ruta + '1-2-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_1_2_18()",
        titulo: "<center><h5><span>Completa</span> la familia de operaciones.</h5></center>",     
        restaurar: "start_18()",
        dir: ruta,
        cod: "1-2-18",
        nota: cal
    });
    return false;
};
function start_19() {
    $("#ventana").load(ruta + '1-2-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_1_2_19()",
        titulo: "<center><h5><span>Selecciona</span> los números que corresponden a los términos de las siguientes sustracciones.</h5></center>",     
        restaurar: "start_19()",
        dir: ruta,
        cod: "1-2-19",
        nota: cal
    });
    return false;
};
function start_20() {
    $("#ventana").load(ruta + '1-2-20/index.php', {
        next: "Page_21()",
        procesar: "result_tipo_1_2_20()",
        titulo: "<center><h5><span>Completa</span> y <span>verifica</span> los elementos de las siguientes sustracciones:</h5></center>",     
        restaurar: "start_20()",
        dir: ruta,
        cod: "1-2-20",
        nota: cal
    });
    return false;
};
function start_21() {
    $("#ventana").load(ruta + '1-2-21/index.php', {
        next: "Page_22()",
        procesar: "result_tipo_1_2_21()",
        titulo: "<center><h5><span>Resuelve</span> las siguientes sustracciones:</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "1-2-21",
        nota: cal
    });
    return false;
};
function start_22() {
    $("#ventana").load(ruta + '1-2-22/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_2_22()",
        titulo: "<center><h5><span>Completa</span> y <span>verifica</span> las siguientes restas.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "1-2-22",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>