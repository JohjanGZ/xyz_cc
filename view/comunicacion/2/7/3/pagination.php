<script type="text/javascript">
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

var cant = 6;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_12() {
    $("#ventana").load(ruta + '2-7-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_2_7_12()",
        titulo: "<center><h5><span>Arrastra</span> 'g' o 'j'  y <span>completa</span> la palabra.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "2-7-12",
        nota: cal
    });
    return false;
};

function start_13() {
    $("#ventana").load(ruta + '2-7-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_2_7_13()",
        titulo: "<center><h5><span>Arrastra</span> el nombre de cada imagen.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "2-7-13",
        nota: cal
    });
    return false;
};

function start_14() {
    $("#ventana").load(ruta + '2-7-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_2_7_14()",
        titulo: "<center><h5><span>Arrastra</span> y <span>clasifica</span> las palabras en su fila correspondiente.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "2-7-14",
        nota: cal
    });
    return false;
};

function start_15() {
    $("#ventana").load(ruta + '2-7-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_2_7_15()",
        titulo: "<center><h5><span>Arrastra</span> las palabras en el lu.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "2-7-15",
        nota: cal
    });
    return false;
};

function start_16() {
    $("#ventana").load(ruta + '2-7-16/index.php', {
        next: "Page_17()",
        procesar: "result_tipo_2_7_16()",
        titulo: "<center><h5><span>Ordena</span> las palabras de modo que formen oraciones.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "2-7-16",
        nota: cal
    });
    return false;
};

function start_17() {
    $("#ventana").load(ruta + '2-7-17/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_7_17()",
        titulo: "<center><h5><span>Lee</span> atentamente el diálogo, luego <span>completa</span> el enunciado.</h5></center>",
        restaurar: "start_17()",
        dir: ruta,
        cod: "2-7-17",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>