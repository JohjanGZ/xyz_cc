<script type="text/javascript">
function Page_9() {
    start_9();
    inicio();
    count = 3;
}
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

var cant = 3;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
function start_9() {
    $("#ventana").load(ruta + '3-2-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_3_2_9()",
        titulo: "<center><h5><span>Arrastra</span> el número antecesor y sucesor de los siguientes números.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "3-2-9",
        nota: cal
    });
    return false;
};
function start_10() {
    $("#ventana").load(ruta + '3-2-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_3_2_10()",
        titulo: "<center><h5><span>Arrastra</span> el número antecesor y sucesor de los siguientes números.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "3-2-10",
        nota: cal
    });
    return false;
};
function start_11() {
    $("#ventana").load(ruta + '3-2-11/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_2_11()",
        titulo: "<center><h5><span>Arrastra</span> el número antecesor y sucesor de los siguientes números.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "3-2-11",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>