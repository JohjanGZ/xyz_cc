<script type="text/javascript">

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
var cant = 18;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_13() {
    $("#ventana").load(ruta + '2-0-13/index.php', {
        next: "Page_14()",
        procesar: "result_tipo_2_0_13()",
        titulo: "<center><h5><span>Realiza</span> los desplazamientos indicados para que cada animalito llegue a su alimento.</h5></center>",
        restaurar: "start_13()",
        dir: ruta,
        cod: "2-0-13",
        nota: cal
    });
    return false;
};

function start_14() {
    $("#ventana").load(ruta + '2-0-14/index.php', {
        next: "Page_15()",
        procesar: "result_tipo_2_0_14()",
        titulo: "<center><h5><span>Realiza</span> los desplazamientos indicados para que cada animalito llegue a su alimento.</h5></center>",
        restaurar: "start_14()",
        dir: ruta,
        cod: "2-0-14",
        nota: cal
    });
    return false;
};

function start_15() {
    $("#ventana").load(ruta + '2-0-15/index.php', {
        next: "Page_16()",
        procesar: "result_tipo_2_0_15()",
        titulo: "<center><h5><span>Selecciona</span> el recorrido que realizó David, mediante las flechas, para llegar a su auto.</h5></center>",
        restaurar: "start_15()",
        dir: ruta,
        cod: "2-0-15",
        nota: cal
    });
    return false;
};

function start_16() {
    $("#ventana").load(ruta + '2-0-16/index.php', {
        next: "resultado()",
        procesar: "result_tipo_2_0_16()",
        titulo: "<center><h5><span>Toma</span> como punto de inicio la estrella y <span>traza</span> el camino según el codigo de flechas.</h5></center>",
        restaurar: "start_16()",
        dir: ruta,
        cod: "2-0-16",
        nota: cal
    });
    return false;
};

function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>