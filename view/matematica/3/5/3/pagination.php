<script type="text/javascript">

function Page_3() {
    start_3();
    inicio();
    count = 3;
}

function Page_4() {
    start_4();
    inicio();
    count = 3;
}

function Page_5() {
    start_5();
    inicio();
    count = 3;
}

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

var cant = 18;
var cal = cant / cant;
// console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------

function start_3() {
    $("#ventana").load(ruta + '3-5-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_3_5_3()",
        titulo: "<center><h5><span>Observa</span> el gráfico, <span>completa</span> el cuadro y <span>responde</span>.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "3-5-3",
        nota: cal
    });
    return false;
};

function start_4() {
    $("#ventana").load(ruta + '3-5-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_3_5_4()",
        titulo: "<center><h5><span>Observa</span> el pictograma anterior y <span>responde</span>. </h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "3-5-4",
        nota: cal
    });
    return false;
};

function start_5() {
    $("#ventana").load(ruta + '3-5-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_3_5_5()",
        titulo: "<center><h5><span>Observa</span> el pictograma anterior y <span>responde</span>. </h5></center>",
        restaurar: "start_5()",
        dir: ruta,
        cod: "3-5-5",
        nota: cal
    });
    return false;
};

function start_6() {
    $("#ventana").load(ruta + '3-5-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_3_5_6()",
        titulo: "<center><h5><span>Observa</span> el pictograma que representa los kilogramos de frutas coonsumidas a la hora del almuerzo en los comedores de los distintos colegios. Luego <span>selecciona</span> la respuesta.</h5></center>",
        restaurar: "start_6()",
        dir: ruta,
        cod: "3-5-6",
        nota: cal
    });
    return false;
};

function start_7() {
    $("#ventana").load(ruta + '3-5-7/index.php', {
        next: "Page_8()",
        procesar: "result_tipo_3_5_7()",
        titulo: "<center><h5><span>Observa</span> el pictograma que representa los kilogramos de frutas coonsumidas a la hora del almuerzo en los comedores de los distintos colegios. Luego <span>selecciona</span> la respuesta.</h5></center>",
        restaurar: "start_7()",
        dir: ruta,
        cod: "3-5-7",
        nota: cal
    });
    return false;
};

function start_8() {
    $("#ventana").load(ruta + '3-5-8/index.php', {
        next: "Page_9()",
        procesar: "result_tipo_3_5_8()",
        titulo: "<center><h5><span>Observa</span> el pictograma que representa los kilogramos de frutas coonsumidas a la hora del almuerzo en los comedores de los distintos colegios. Luego <span>selecciona</span> la respuesta.</h5></center>",
        restaurar: "start_8()",
        dir: ruta,
        cod: "3-5-8",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>