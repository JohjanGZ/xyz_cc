<script type="text/javascript">
function Page_21() {
    start_21();
    inicio();
    count = 3;
}
function Page_22() {
    start_22();
    inicio();
    count = 3;
}
function Page_23() {
    start_23();
    inicio();
    count = 3;
}
function Page_24() {
    start_24();
    inicio();
    count = 3;
}
function Page_25() {
    start_25();
    inicio();
    count = 3;
}
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_23() {
    $("#ventana").load(ruta + '3-1-23/index.php', {
        next: "Page_24()",
        procesar: "result_tipo_3_1_23()",
        titulo: "<center><h5><span class='ftitulo'>Descubre</span> la regla de formación de las siguientes sucesiones y <span class='ftitulo'>selecciona</span> correctamente.</></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "3-1-23",
        nota: cal
    });
    return false;
};

function start_24() {
    $("#ventana").load(ruta + '3-1-24/index.php', {
        next: "Page_25()",
        procesar: "result_tipo_3_1_24()",
        titulo: "<center><h5> <span class='ftitulo'>Selecciona</span> la regla de formación de las siguientes sucesiones:</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "3-1-24",
        nota: cal
    });
    return false;
};

function start_25() {
    $("#ventana").load(ruta + '3-1-25/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_1_25()",
        titulo: "<center><h5> <span class='ftitulo'>Selecciona</span> la regla de formación de las siguientes sucesiones:</h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "3-1-25",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>