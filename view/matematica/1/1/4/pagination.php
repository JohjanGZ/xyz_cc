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

function Page_14() {
    start_14();
    inicio();
    count = 3;
}

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_9() {
    $("#ventana").load(ruta + '1-1-9/index.php', {
        next: "Page_10()",
        procesar: "result_tipo_1_1_9()",
        titulo: "<center><h5> <span class='ftitulo'>Cuenta</span> y <span class='ftitulo'>arrastra</span> la cantidad de elementos donde corresponda.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "1-1-9",
        nota: cal
    });
    return false;
};

function start_10() {
    $("#ventana").load(ruta + '1-1-10/index.php', {
        next: "Page_11()",
        procesar: "result_tipo_1_1_10()",
        titulo: "<center><h5> <span class='ftitulo'>Cuenta</span> los pétalos de cada flor y <span class='ftitulo'>unela</span> con su número.</h5></center>",
        restaurar: "start_10()",
        dir: ruta,
        cod: "1-1-10",
        nota: cal
    });
    return false;
};

function start_11() {
    $("#ventana").load(ruta + '1-1-11/index.php', {
        next: "Page_12()",
        procesar: "result_tipo_1_1_11()",
        titulo: "<center><h5> <span class='ftitulo'>Cuenta</span> los dedos de cada mano y <span class='ftitulo'>unela</span> con su número.</h5></center>",
        restaurar: "start_11()",
        dir: ruta,
        cod: "1-1-11",
        nota: cal
    });
    return false;
};

function start_12() {
    $("#ventana").load(ruta + '1-1-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_1_1_12()",
        titulo: "<center><h5><span class='ftitulo'>Escribe</span> el número de elementos.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "1-1-12",
        nota: cal
    });
    return false;
};

function start_13() {
    $("#ventana").load(ruta + '1-1-13/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_1_13()",
        titulo: "<center><h5><span class='ftitulo'>Cuenta</span> las patitas de los escarabajos y <span class='ftitulo'>escribe</span> el número en el recuadro.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "1-1-13",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>