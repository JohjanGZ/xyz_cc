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
var cant = 3;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 

function start_14() {
    $("#ventana").load(ruta + '3-4-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_3_4_14()",
        titulo: "<center><h5><span>Resuelve</span> los siguientes problemas y <span>selecciona</span> la respuesta correcta.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "3-4-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '3-4-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_3_4_15()",
        titulo: "<center><h5><span>Completa</span> la tabla.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "3-4-15",
        nota: cal
    });
    return false;
};
function start_16() {
    $("#ventana").load(ruta + '3-4-16/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_4_16()",
        titulo: "<center><h5><span>Relaciona</span> cada expresión con el valor correspondiente.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "3-4-16",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>