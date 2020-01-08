<script type="text/javascript">

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

var cant = 4;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
function start_14() {
    $("#ventana").load(ruta + '1-5-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_1_5_14()",
        titulo: "<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>", 
        restaurar: "start_14()",
        dir: ruta,
        cod: "1-5-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '1-5-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_1_5_15()",
        titulo: "<center><h5><span>Selecciona</span> la respuesta correcta.</h5></center>", 
        restaurar: "start_15()",
        dir: ruta,
        cod: "1-5-15",
        nota: cal
    });
    return false;
};
function start_16() {
    $("#ventana").load(ruta + '1-5-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_1_5_16()",
        titulo: "<center><h5><span>Señala</span> los meses que tienen 31 días.</h5></center>", 
        restaurar: "start_16()",
        dir: ruta,
        cod: "1-5-16",
        nota: cal
    });
    return false;
};
function start_17() {
    $("#ventana").load(ruta + '1-5-17/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_5_17()",
        titulo: "<center><h5><span>Relaciona</span> cada mes con el orden que le corresponde en el calendario.</h5></center>", 
        restaurar: "start_17()",
        dir: ruta,
        cod: "1-5-17",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>