<script type="text/javascript">
function Page_7() {
    count = 3;
    start_7();
    inicio();
}

function Page_8() {
    count = 3;
    start_8();
    inicio();
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
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_7() {
    $("#ventana").load(ruta + '2-4-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_2_4_7()",
        titulo: "<center><h5><span>Halla</span> el perímetro de la puerta.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "2-4-7",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '2-4-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_2_4_8()",
        titulo: "<center><h5><span>Halla</span> el perímetro de la casa.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "2-4-8",
        nota: cal
    });
    return false;
};

function start_9() {
    $("#ventana").load(ruta + '2-4-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_2_4_9()",
        titulo: "<center><h5><span>Halla</span> el perímetro de las figuras, teniendo en cuenta que el lado de cada cuadradito mide 2cm.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "2-4-9",
        nota: cal
    });
    return false;
};

function start_10() {
    $("#ventana").load(ruta + '2-4-10/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_4_10()",
        titulo: "<center><h5><span>Halla</span> el área de las figuras, teniendo en cuenta que el área de cada cuadradito es igual a 1 cm2.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "2-4-10",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>