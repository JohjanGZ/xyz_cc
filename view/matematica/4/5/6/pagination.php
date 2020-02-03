<script type="text/javascript">
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
function Page_9() {
    start_9();
    inicio();
    count = 3;
}

var cant = 4;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 5do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_6() {
    $("#ventana").load(ruta + '4-5-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_4_5_6()",
        titulo: "<center><h5> <span>Halla</span> el área del triángulo y cuadrado. Luego, <span>selecciona</span> de la lista los valores según corresponda. </h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "4-5-6",
        nota: cal
    });
    return false;
};
function start_7() {
    $("#ventana").load(ruta + '4-5-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_4_5_7()",
        titulo: "<center><h5> <span>Halla</span> el área del rectángulo y paralelogramo. Luego, <span>selecciona</span> de la lista los valores según corresponda. </h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "4-5-7",
        nota: cal
    });
    return false;
};
function start_8() {
    $("#ventana").load(ruta + '4-5-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_4_5_8()",
        titulo: "<center><h5> <span>Halla</span> el área del rombo. Luego, <span>selecciona</span> de la lista los valores según corresponda. </h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "4-5-8",
        nota: cal
    });
    return false;
};
function start_9() {
    $("#ventana").load(ruta + '4-5-9/index.php', {
        next: "resultado()",
        procesar: "result_tipo_4_5_9()",
        titulo: "<center><h5> <span>Halla</span> el área del rombo. Luego, <span>selecciona</span> de la lista los valores según corresponda.</h5></center>",
        restaurar: "start_9()",
        dir: ruta,
        cod: "4-5-9",
        nota: cal
    });
    return false;
};


function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>