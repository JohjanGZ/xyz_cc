<script type="text/javascript">
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

var cant = 22;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
function start_18() {
    $("#ventana").load(ruta + '3-6-18/index.php', {
        next: "Page_19()",
        procesar: "result_tipo_3_6_18()",
        titulo: "<center><h5><span>Escribe</span> qué clases de ángulos son los siguientes y luego <span>definelos</span> brevemente.</h5></center>",
        restaurar: "start_18()",
        dir: ruta,
        cod: "3-6-18",
        nota: cal
    });
    return false;
};

function start_19() {
    $("#ventana").load(ruta + '3-6-19/index.php', {
        next: "Page_20()",
        procesar: "result_tipo_3_6_19()",
        titulo: "<center><h5><span>Relaciona</span> cada imagen con la medida que representa.</h5></center>",
        restaurar: "start_19()",
        dir: ruta,
        cod: "3-6-19",
        nota: cal
    });
    return false;
};

function start_20() {
    $("#ventana").load(ruta + '3-6-20/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_6_20()",
        titulo: "<center><h5><span>Relaciona</span> la medida de los siguientes ángulos:</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "3-6-20",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>