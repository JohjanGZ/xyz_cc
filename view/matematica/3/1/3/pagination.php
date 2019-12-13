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

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_10() {
    $("#ventana").load(ruta + '3-1-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_3_1_10()",
        titulo: "<center><h5> <span class='ftitulo'>Selecciona</span> el número mayor en cada caso.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "3-1-10",
        nota: cal
    });
    return false;
};

function start_11() {
    $("#ventana").load(ruta + '3-1-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_3_1_11()",
        titulo: "<center><h5> <span class='ftitulo'>Selecciona</span> el número menor en cada caso.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "3-1-11",
        nota: cal
    });
    return false;
};

function start_12() {
    $("#ventana").load(ruta + '3-1-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_3_1_12()",
        titulo: "<center><h5><span class='ftitulo'>Completa</span> los espacios en blanco utilizando los símbolos <, > o =.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "3-1-12",
        nota: cal
    });
    return false;
};

function start_13() {
    $("#ventana").load(ruta + '3-1-13/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_1_13()",
        titulo: "<center><h5><span class='ftitulo'>Señala</span> el número menor al que se muestra.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "3-1-13",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>