<script type="text/javascript">

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
function Page_26() {
    start_26();
    inicio();
    count = 3;
}

var cant = 1;
var cal = cant / cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------


function start_23() {
    $("#ventana").load(ruta + '1-0-23/index.php', {
        next: "Page_24()",
        procesar: "result_tipo_1_0_23()",
        titulo: "<center><h5><span>Observa</span> los conjuntos y <span>selecciona</span><img src="+ruta+"1-0-23/img/pertenece.png> o <img src="+ruta+"1-0-23/img/nopertenece.png> según corresponda.</h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "1-0-23",
        nota: cal
    });
    return false;
};
function start_24() {
    $("#ventana").load(ruta + '1-0-24/index.php', {
        next: "Page_24()",
        procesar: "result_tipo_1_0_24()",
        titulo: "<center><h5><span>Selecciona</span> los simbolos de <img src="+ruta+"1-0-25/img/pertenece.png> o <img src="+ruta+"1-0-24/img/nopertenece.png> en los siguientes enunciados.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "1-0-24",
        nota: cal
    });
    return false;
};
function start_25() {
    $("#ventana").load(ruta + '1-0-25/index.php', {
        next: "Page_26()",
        procesar: "result_tipo_1_0_25()",
        titulo: "<center><h5><span>Observa</span> el siguiente conjunto y <span>selecciona</span> si <img src="+ruta+"1-0-25/img/pertenece.png> o <img src="+ruta+"1-0-25/img/nopertenece.png> al conjunto V.</h5></center>",
        restaurar: "start_25()",
        dir: ruta,
        cod: "1-0-25",
        nota: cal
    });
    return false;
};
function start_26() {
    $("#ventana").load(ruta + '1-0-26/index.php', {
        next: "resultado()",
        procesar: "result_tipo_1_0_26()",
        titulo: "<center><h5><span>Observa</span> los elementos y <span>arrastra</span> aquellos que pertenecen al conjunto  de los astros.</h5></center>",
        restaurar: "start_26()",
        dir: ruta,
        cod: "1-0-26",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>