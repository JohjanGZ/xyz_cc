<script type="text/javascript">
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
function Page_18() {
    start_18();
    inicio();
    count = 3;
}
function Page_19() {
    start_19();
    inicio();
    count = 3;
}
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_16() {
    $("#ventana").load(ruta + '1-2-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_1_2_16()",
        titulo: "<center><h5> <span class='ftitulo'>Cuenta</span> cada figura geométrica y <span class='ftitulo'>completa</span> el cuadro.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "1-2-16",
        nota: cal
    });
    return false;
};
function start_17() {
    $("#ventana").load(ruta + '1-2-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_1_2_17()",
        titulo: "<center><h5> <span class='ftitulo'>Selecciona</span> las figuras que se usaron para dibujar la casita y el barquito.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "1-2-17",
        nota: cal
    });
    return false;
};
function start_18() {
    $("#ventana").load(ruta + '1-2-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_1_2_18()",
        titulo: "<center><h5> <span class='ftitulo'>Encuentra</span> las figuras y <span class='ftitulo'>escribe</span> la cantidad que hay de cada una.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "1-2-18",
        nota: cal
    });
    return false;
};
function start_19() {
    $("#ventana").load(ruta + '1-2-19/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_2_19()",
        titulo: "<center><h5> <span class='ftitulo'>Observa</span> las figuras y <span class='ftitulo'>únelas</span>  con sus respectivas partes.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "1-2-19",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>