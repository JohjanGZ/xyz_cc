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

var cant = 4;
var cal = cant/cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_7() {
    $("#ventana").load(ruta + '2-7-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_2_7_7()",
        titulo: "<center><h5><span>Relaciona</span> cada representación con la cifra que le corresponde.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "2-7-7",
        nota: cal
    });
    return false;
};
function start_8() {
    $("#ventana").load(ruta + '2-7-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_2_7_8()",
        titulo: "<center><h5><span>Ubica</span> los números en el tablero posicional.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "2-7-8",
        nota: cal
    });
    return false;
};
function start_9() {
    $("#ventana").load(ruta + '2-7-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_2_7_9()",
        titulo: "<center><h5><span>Observa</span> y <span>selecciona</span> los números en el tablero posicional.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "2-7-9",
        nota: cal
    });
    return false;
};
function start_10() {
    $("#ventana").load(ruta + '2-7-10/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_7_10()",
        titulo: "<center><h5><span>Observa</span> los recuadros <span>selecciona</span> el número que corresponde.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "2-7-10",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>