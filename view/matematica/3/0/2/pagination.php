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

function Page_11() {
    start_11();
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
    $("#ventana").load(ruta + '3-0-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_3_0_7()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> el siguiente conjunto y luego <span class='ftitulo'>selecciona</span> la pertenencia o no pertenencia, <br> utilizando los símbolos <img src=../../../../exercises/matematica/3-0-7/img/p.png> y <img src=../../../../exercises/matematica/3-0-7/img/n.png>.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "3-0-7",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '3-0-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_3_0_8()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> el siguiente conjunto y luego <span class='ftitulo'>selecciona</span> la pertenencia o no pertenencia, <br> utilizando los símbolos <img src=../../../../exercises/matematica/3-0-7/img/p.png> y <img src=../../../../exercises/matematica/3-0-7/img/n.png>.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "3-0-8",
        nota: cal
    });
    return false;
};

function start_9() {
    $("#ventana").load(ruta + '3-0-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_3_0_9()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> los siguientes conjuntos y luego <span class='ftitulo'>señala</span> si las afirmaciones son verdaderas o falsas. </h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "3-0-9",
        nota: cal
    });
    return false;
};

function start_10() {
    $("#ventana").load(ruta + '3-0-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_3_0_10()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> los siguientes conjuntos y luego <span class='ftitulo'>señala</span> si las afirmaciones son verdaderas o falsas. </h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "3-0-10",
        nota: cal
    });
    return false;
};

function start_11() {
    $("#ventana").load(ruta + '3-0-11/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_0_11()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> los siguientes conjuntos y luego <span class='ftitulo'>señala</span> si las afirmaciones son verdaderas o falsas. </h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "3-0-11",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>