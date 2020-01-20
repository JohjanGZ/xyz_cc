<script type="text/javascript">


function Page_20() {
    start_20();
    inicio();
    count = 3;
}
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

var cant = 4;
var cal = cant/cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_20() {
    $("#ventana").load(ruta + '2-3-20/index.php', {
        next: "Page_21()",
        procesar: "result_tipo_2_3_20()",
        titulo: "<center><h5><span>Registra</span> con palotes la cantidad de generos favoritos de películas para los niños.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "2-3-20",
        nota: cal
    });
    return false;
};

function start_21() {
    $("#ventana").load(ruta + '2-3-21/index.php', {
        next: "Page_22()",
        procesar: "result_tipo_2_3_21()",
        titulo: "<center><h5>Se preguntó a los padres de 2° grado qué país les gustaría visitar con sus familias. <span>has</span> el conteo de sus respuestas.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "2-3-21",
        nota: cal
    });
    return false;
};

function start_22() {
    $("#ventana").load(ruta + '2-3-22/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_3_22()",
        titulo: "<center><h5><span>Observa</span> el gráfico y <span>responde</span> las preguntas.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "2-3-22",
        nota: cal
    });
    return false;
};
function start_23() {
    $("#ventana").load(ruta + '2-3-23/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_3_23()",
        titulo: " <center><h5><span>Observa</span> la imagen y <span>completa</span> la tabla de datos.</h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "2-3-23",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>