<script type="text/javascript">


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

function Page_12() {
    start_12();
    inicio();
    count = 3;
}


var cant = 3;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_10() {
    $("#ventana").load(ruta + '6-1-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_6_1_10()",
        titulo: "<center><h5><span>Arrastra</span> los términos que completen los siguientes enunciados con respecto al sustantivo.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "6-1-10",
        nota: cal
    });
    return false;
};

function start_11() {
    $("#ventana").load(ruta + '6-1-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_6_1_11()",
        titulo: "<center><h5><span>Ubica</span> las siguientes palabras en la columna correspondiente según su clasificación.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "6-1-11",
        nota: cal
    });
    return false;
};

function start_12() {
    $("#ventana").load(ruta + '6-1-12/index.php', {
        next: "resultado()",
        procesar: "result_tipo_6_1_12()",
        titulo: "<center><h5><span>Completa</span> el plural de los siguientes sustantivos.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "6-1-12",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>