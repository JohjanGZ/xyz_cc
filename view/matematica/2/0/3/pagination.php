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


var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_7() {
    $("#ventana").load(ruta + '2-0-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_2_0_7()",
        titulo: "<center><h5><span>Representa</span> por comprensión los siguientes conjuntos.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "2-0-7",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '2-0-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_2_0_8()",
        titulo: "<center><h5><span>Observa</span> los siguientes conjuntos y <span>represéntalos</span> por extensión, usando el nombre de sus elementos.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "2-0-8",
        nota: cal
    });
    return false;
};

function start_9() {
    $("#ventana").load(ruta + '2-0-9/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_0_9()",
        titulo: "<center><h5><span>Escoge</span> si el conjunto esta determinado por extensión o si esta determinado por comprensión.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "2-0-9",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>