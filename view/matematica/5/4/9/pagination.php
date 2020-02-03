<script type="text/javascript">

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
function Page_16() {
    start_16();
    inicio();
    count = 3;
}

var cant = 4;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_13() {
    $("#ventana").load(ruta + '4-4-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_4_4_13()",
        titulo: "<center><h5><span>Completa</span> los sumandos en los recuadros y <span>resuelve</span> las sumas; para ello <span>utiliza</span> el teclado numérico de la pantalla.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "4-4-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '4-4-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_4_4_14()",
        titulo: "<center><h5><span>Observa</span> la tabla y <span>completa</span> las sustracciones.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "4-4-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '4-4-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_4_4_15()",
        titulo: "<center><h5><span>Resuelve</span> las operaciones de multiplicación luego <span>relaciona</span> con la respuesta correcta.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "4-4-15",
        nota: cal
    });
    return false;
};
function start_16() {
    $("#ventana").load(ruta + '4-4-16/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_4_16()",
        titulo: "<center><h5><span>Resuelve</span> las operaciones de multiplicación luego <span>relaciona</span> con la respuesta correcta.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "4-4-16",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>