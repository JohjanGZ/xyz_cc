<script type="text/javascript">


function Page_7() {
    start_7();
    inicio();
    count = 3;
}
function Page_8() {
    start_8();
    inicio();
    count = 3;
}

var cant = 2;
var cal = cant/cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_7() {
    $("#ventana").load(ruta + '2-5-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_2_5_7()",
        titulo: "<center><h5><span>Observa</span> atentamente la siguiente imagen y luego <span>responde</span>.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "2-5-7",
        nota: cal
    });
    return false;
};
function start_8() {
    $("#ventana").load(ruta + '2-5-8/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_5_8()",
        titulo: "<center><h5><span>Reconoce</span> cuántas figuras hay en total y <span>realiza</span> las divisiones correspondientes.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "2-5-8",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>