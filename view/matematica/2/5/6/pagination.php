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

var cant = 2;
var cal = cant/cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------



function start_9() {
    $("#ventana").load(ruta + '2-5-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_2_5_9()",
        titulo: "<center><h5><span>Arrastra</span> los números y <span>resuelve</span> las siguientes tablas de divisiones.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "2-5-9",
        nota: cal
    });
    return false;
};
function start_10() {
    $("#ventana").load(ruta + '2-5-10/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_5_10()",
        titulo: "<center><h5><span>Observa</span> el ejemplo y <span>completa</span>.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "2-5-10",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>