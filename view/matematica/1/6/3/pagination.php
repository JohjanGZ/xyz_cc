<script type="text/javascript">
function Page_5() {
    start_5();
    inicio();
    count = 3;
}
function Page_6() {
    start_6();
    inicio();
    count = 3;
}
function Page_7() {
    start_7();
    inicio();
    count = 3;
}

var cant = 18;
var cal = cant / cant;
// console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
function start_5() {
    $("#ventana").load(ruta + '1-6-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_1_6_5()",
        titulo: "<center><h5><span>Cuenta y Selecciona</span> las centenas.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "1-6-5",
        nota: cal
    });
    return false;
};
function start_6() {
    $("#ventana").load(ruta + '1-6-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_1_6_6()",
        titulo: "<center><h5><span>Relaciona</span>.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "1-6-6",
        nota: cal
    });
    return false;
};
function start_7() {
    $("#ventana").load(ruta + '1-6-7/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_6_7()",
        titulo: "<center><h5><span>Selecciona</span> el número que le corresponde a cada representación del ábaco.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "1-6-7",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>