<script type="text/javascript">
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

var cant = 3;
var cal = 23 / 23;
var ruta = "../../../../exercises/comunicacion/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_22() {
    $("#ventana").load(ruta + '5-9-22/index.php', {
        next: "Page_23()",
        procesar: "result_tipo_5_9_22()",
        titulo: "<center><h5><span>Selecciona</span> los elementos que completan la tabla de manera adecuada.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "5-9-22",
        nota: cal
    });
    return false;
};

function start_23() {
    $("#ventana").load(ruta + '5-9-23/index.php', {
        next: "Page_24()",
        procesar: "result_tipo_5_9_23()",
        titulo: "<center><h5><span>Relaciona</span> los elementos complementarios del teatro con sus definiciones</h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "5-9-23",
        nota: cal
    });
    return false;
};

function start_24() {
    $("#ventana").load(ruta + '5-9-24/index.php', {
        next: "resultado()",
        procesar: "result_tipo_5_9_24()",
        titulo: "<center><h5><span>Observa</span> las imágenes y selecciona la que no representa un elemento del teatro.</h5></center>",
        restaurar: "start_24()",
        dir: ruta,
        cod: "5-9-24",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>