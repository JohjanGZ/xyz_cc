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

function Page_13() {
    start_13();
    inicio();
    count = 3;
}

var cant = 5;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_10() {
    $("#ventana").load(ruta + '4-0-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_4_0_10()",
        titulo: "<center><h5><span>Marca</span> Verdadero si la sílaba resaltada es tónica y Falso si no lo es.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "4-0-10",
        nota: cal
    });
    return false;
};

function start_11() {
    $("#ventana").load(ruta + '4-0-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_4_0_11()",
        titulo: "<center><h5><span>Rellena</span> los recuerdos con la palabra correctamente silabeada de cada grupo.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "4-0-11",
        nota: cal
    });
    return false;
};

function start_12() {
    $("#ventana").load(ruta + '4-0-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_4_0_12()",
        titulo: "<center><h5><span>Selecciona</span> la sílaba tónica de cada palabra.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "4-0-12",
        nota: cal
    });
    return false;
};

function start_13() {
    $("#ventana").load(ruta + '4-0-13/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_0_13()",
        titulo: "<center><h5><span>Selecciona</span> la sílaba átonas de cada palabra.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "4-0-13",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>