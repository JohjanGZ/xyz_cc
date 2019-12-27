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
function Page_20() {
    start_20();
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
    $("#ventana").load(ruta + '3-3-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_3_3_16()",
        titulo: "<center><h5><span>1. Observa</span> las figuras 1 y 2 en el plano, luego <span>escribe</span> los pares ordenados de cada figura y si se redujo a la mitad, tercera o cuarta parte. </h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "3-3-16",
        nota: cal
    });
    return false;
};
function start_17() {
    $("#ventana").load(ruta + '3-3-17/index.php', {
        next: "Page_18()",
        procesar: "result_tipo_3_3_17()",
        titulo: "<center><h5><span>1. Observa</span> las figuras 1 y 2 en el plano, luego <span>escribe</span> los pares ordenados de cada figura y si se redujo a la mitad, tercera o cuarta parte. </h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "3-3-17",
        nota: cal
    });
    return false;
};
function start_18() {
    $("#ventana").load(ruta + '3-3-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_3_3_18()",
        titulo: "<center><h5><span class='ftitulo'>Selecciona</span> el trencito que cuesta 37 soles.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "3-3-18",
        nota: cal
    });
    return false;
};
function start_19() {
    $("#ventana").load(ruta + '3-3-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_3_3_19()",
        titulo: "<center><h5><span class='ftitulo'>Escribe</span> el número que ha sido representado en el ábaco.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "3-3-19",
        nota: cal
    });
    return false;
};
function start_20() {
    $("#ventana").load(ruta + '3-3-20/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_3_20()",
        titulo: "<center><h5><span class='ftitulo'>Escribe</span> el número que ha sido representado en el ábaco.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "3-3-20",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>