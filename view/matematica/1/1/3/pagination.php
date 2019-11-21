<script type="text/javascript">
function Page_5() {
    start_5();
    inicio();
    count = 3;
}

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
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
function start_5() {
    $("#ventana").load(ruta + '1-1-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_1_1_5()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> los conjuntos y <span class='ftitulo'>selecciona </span><img src="+ruta+"1-1-5/img/pertenece.png> o <img src="+ruta+"1-1-5/img/nopertenece.png> según corresponda.</h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "1-1-5",
        nota: cal
    });
    return false;
};

function start_6() {
    $("#ventana").load(ruta + '1-1-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_1_1_6()",
        titulo: "<center><h5><span class='ftitulo'>selecciona</span> los símbolos de <img src="+ruta+"1-1-6/img/pertenece.png> o <img src="+ruta+"1-1-6/img/nopertenece.png> en los siguientes enunciados.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "1-1-6",
        nota: cal
    });
    return false;
};

function start_7() {
    $("#ventana").load(ruta + '1-1-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_1_1_7()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> el siguiente conjunto y <span class='ftitulo'>Selecciona</span> si <img src="+ruta+"1-1-7/img/pertenece.png> o <img src="+ruta+"1-1-7/img/nopertenece.png> al conjunto V.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "1-1-7",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '1-1-8/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_1_8()",
        titulo: "<center><h5><span class='ftitulo'>Observa</span> los elementos y <span class='ftitulo'>arrastra</span> aquellos que pertenecen al conjunto de los astros.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "1-1-8",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>