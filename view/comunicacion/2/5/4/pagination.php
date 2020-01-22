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

var cant = 3;
var cal = 20 / 20;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_14() {
    $("#ventana").load(ruta + '2-5-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_2_5_14()",
        titulo: "<center><h5><span>Selecciona</span> y <span>arrastra</span> las palabras al recuadro que corresponda.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "2-5-14",
        nota: cal
    });
    return false;
};

function start_15() {
    $("#ventana").load(ruta + '2-5-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_2_5_15()",
        titulo: "<center><h5><span>Une</span> las siguientes palabras para formar oraciones.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "2-5-15",
        nota: cal
    });
    return false;
};

function start_16() {
    $("#ventana").load(ruta + '2-5-16/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_5_16()",
        titulo: "<center><h5><span>Completa</span> las oraciones <span>arrastrando</span> un pronombre personal.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "2-5-16",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>