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
var cant = 4;
var cal = cant / cant;
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_12() {
    $("#ventana").load(ruta + '3-2-12/index.php', {
        next: "Page_13()",
        procesar: "result_tipo_3_2_12()",
        titulo: "<center><h5><span>Compara</span> los números. Luego, <span>coloca</span> el signo >,< o = según corresponda.</h5></center>",
        restaurar: "start_12()",
        dir: ruta,
        cod: "3-2-12",
        nota: cal
    });
    return false;
};
function start_13() {
    $("#ventana").load(ruta + '3-2-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_3_2_13()",
        titulo: "<center><h5><span>Observa</span> los números. Luego, <span>resalta</span> el menor según corresponda.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "3-2-13",
        nota: cal
    });
    return false;
};
function start_14() {
    $("#ventana").load(ruta + '3-2-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_3_2_14()",
        titulo: "<center><h5><span>Observa</span> los números. Luego, <span>resalta</span> el mayor de cada fila.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "3-2-14",
        nota: cal
    });
    return false;
};
function start_15() {
    $("#ventana").load(ruta + '3-2-15/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_2_15()",
        titulo: "<center><h5><span>Observa</span> los números. Luego, <span>resalta</span> el menor de cada fila.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "3-2-15",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>