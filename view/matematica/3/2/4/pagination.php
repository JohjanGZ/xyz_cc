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
var cant = 18;
var cal = cant / cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_20() {
    $("#ventana").load(ruta + '3-2-20/index.php', {
        next: "Page_21()",
        procesar: "result_tipo_3_2_20()",
        titulo: "<center><h5><span>Observa</span> las figuras 1 y 2 en el plano, luego <span>escribe</span> los pares ordenados de cada figura y el número con el que se multiplicó cada par ordenado de la figura 1 para ser ampliado en la figura 2.</h5></center>",
        restaurar: "start_20()",
        dir: ruta,
        cod: "3-2-20",
        nota: cal
    });
    return false;
};
function start_21() {
    $("#ventana").load(ruta + '3-2-21/index.php', {
        next: "Page_22()",
        procesar: "result_tipo_3_2_21()",
        titulo: "<center><h5><span>Observa</span> las figuras 1 y 2 en el plano, luego <span>escribe</span> los pares ordenados de cada figura y el número con el que se multiplicó cada par ordenado de la figura 1 para ser ampliado en la figura 2.</h5></center>",
        restaurar: "start_21()",
        dir: ruta,
        cod: "3-2-21",
        nota: cal
    });
    return false;
};
function start_22() {
    $("#ventana").load(ruta + '3-2-22/index.php', {
        next: "Page_23()",
        procesar: "result_tipo_3_2_22()",
        titulo: "<center><h5><span>Observa</span> las figuras 1 y 2 en el plano, luego <span>escribe</span> los pares ordenados de cada figura y el número con el que se multiplicó cada par ordenado de la figura 1 para ser ampliado en la figura 2.</h5></center>",
        restaurar: "start_22()",
        dir: ruta,
        cod: "3-2-22",
        nota: cal
    });
    return false;
};
function start_23() {
    $("#ventana").load(ruta + '3-2-23/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_2_23()",
        titulo: "<center><h5><span>Observa</span> las figuras 1 y 2 en el plano, luego <span>escribe</span> los pares ordenados de cada figura y el número con el que se multiplicó cada par ordenado de la figura 1 para ser ampliado en la figura 2.</h5></center>",
        restaurar: "start_23()",
        dir: ruta,
        cod: "3-2-23",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>