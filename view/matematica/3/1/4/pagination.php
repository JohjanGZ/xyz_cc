<script type="text/javascript">
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

function Page_17() {
    start_17();
    inicio();
    count = 3;
}

var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_14() {
    $("#ventana").load(ruta + '3-1-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_3_1_14()",
        titulo: "<center><h5><span class='ftitulo'>Escribe</span> las decenas vecinas de los siguientes números. <br><span class='ftitulo'>Guíate</span> del ejemplo.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "3-1-14",
        nota: cal
    });
    return false;
};

function start_15() {
    $("#ventana").load(ruta + '3-1-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_3_1_15()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> la decena más próxima a los siguientes números.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "3-1-15",
        nota: cal
    });
    return false;
};

function start_16() {
    $("#ventana").load(ruta + '3-1-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_3_1_16()",
        titulo: "<center><h5><span class='ftitulo'>Escribe</span> las centenas vecinas de los siguientes números. <br><span class='ftitulo'>Guíate</span> del ejemplo.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "3-1-16",
        nota: cal
    });
    return false;
};

function start_17() {
    $("#ventana").load(ruta + '3-1-17/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_1_17()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> la centena más próxima a los siguientes números:</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "3-1-17",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>