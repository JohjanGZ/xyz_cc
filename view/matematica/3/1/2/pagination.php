<script type="text/javascript">
function Page_6() {
    start_6();
    inicio();
    count = 3;
}

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
function start_6() {
    $("#ventana").load(ruta + '3-1-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_3_1_6()",
        titulo: "<center><h5><span class='ftitulo'>Descompón</span> los siguientes números indicando el valor posicional de cada dígito. <br> <span class='ftitulo'>Guíate</span> del ejemplo.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "3-1-6",
        nota: cal
    });
    return false;
};

function start_7() {
    $("#ventana").load(ruta + '3-1-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_3_1_7()",
        titulo: "<center><h5><span class='ftitulo'>Descompón</span> los siguientes números indicando su valor en unidades.<br> <span class='ftitulo'>Guíate</span> del ejemplo.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "3-1-7",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '3-1-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_3_1_8()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> el recuadro que representa S/. 3 724 el cual es el costo del televisor.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "3-1-8",
        nota: cal
    });
    return false;
};

function start_9() {
    $("#ventana").load(ruta + '3-1-9/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_1_9()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> el recuadro que representa S/ 1 927  ¿ cuál es el costo del microondas?.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "3-1-9",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>