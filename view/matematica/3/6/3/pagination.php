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

var cant = 22;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
function start_21() {
    $("#ventana").load(ruta + '3-6-21/index.php', {
        next: "Page_22()",
        procesar: "result_tipo_3_6_21()",
        titulo: "<center><h5><span>Observa</span> atentamente el gráfico de barras que muestra la inasistencia de los alumnos de una escuela primaria durante una semana. Luego <span>completa</span> el cuadro de frecuencias y <span>responde</span> las preguntas.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "3-6-21",
        nota: cal
    });
    return false;
};

function start_22() {
    $("#ventana").load(ruta + '3-6-22/index.php', {
        next: "Page_23()",
        procesar: "result_tipo_3_6_22()",
        titulo: "<center><h5><span>Relaciona</span> cada imagen con la medida que representa.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "3-6-22",
        nota: cal
    });
    return false;
};

function start_23() {
    $("#ventana").load(ruta + '3-6-23/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_6_23()",
        titulo: "<center><h5><span>Relaciona</span> la medida de los siguientes ángulos:</h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "3-6-23",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>