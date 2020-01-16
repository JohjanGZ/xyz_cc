<script type="text/javascript">
function Page_1() {
    start_1();
    inicio();
    count = 3;
}
function Page_2() {
    start_2();
    inicio();
    count = 3;
}
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

var cant = 7;
var cal = cant / cant;
console.log(cant);
var ruta = "../../../../exercises/matematica/";
////////////// 2do 
// ----------  para iniciar y reiniciar ejercicios sin que afecte el cronometro -----------------------
function start_1() {
    $("#ventana").load(ruta + '3-7-1/index.php', {
        next: "Page_2()",
        procesar: "result_tipo_3_7_1()",
        titulo: "<center><h5><span>Relaciona</span> el enunciado verbal que corresponde a cada ecuación</h5></center>",
        restaurar: "start_1()",
        dir: ruta,
        cod: "3-7-1",
        nota: cal
    });
    return false;
};
function start_2() {
    $("#ventana").load(ruta + '3-7-2/index.php', {
        next: "Page_3()",
        procesar: "result_tipo_3_7_2()",
        titulo: "<center><h5><span>Completa</span> los esquemas y <span>halla</span> el valor en cada caso.</h5></center>",
        restaurar: "start_2()",
        dir: ruta,
        cod: "3-7-2",
        nota: cal
    });
    return false;
};
function start_3() {
    $("#ventana").load(ruta + '3-7-3/index.php', {
        next: "Page_4()",
        procesar: "result_tipo_3_7_3()",
        titulo: "<center><h5><span>Completa</span> los esquemas y <span>halla</span> el valor en cada caso.</h5></center>",
        restaurar: "start_3()",
        dir: ruta,
        cod: "3-7-3",
        nota: cal
    });
    return false;
};
function start_4() {
    $("#ventana").load(ruta + '3-7-4/index.php', {
        next: "Page_5()",
        procesar: "result_tipo_3_7_4()",
        titulo: "<center><h5><span>Resuelve</span> las ecuaciones.</h5></center>",
        restaurar: "start_4()",
        dir: ruta,
        cod: "3-7-4",
        nota: cal
    });
    return false;
};

function start_5() {
    $("#ventana").load(ruta + '3-7-5/index.php', {
        next: "Page_6()",
        procesar: "result_tipo_3_7_5()",
        titulo: "<center><h5><span>Resuelve</span> los siguientes problemas aplicando los cuatro pasos correspondientes</h5></center>", 
        restaurar: "start_5()",
        dir: ruta,
        cod: "3-7-5",
        nota: cal
    });
    return false;
};
function start_6() {
    $("#ventana").load(ruta + '3-7-6/index.php', {
        next: "Page_7()",
        procesar: "result_tipo_3_7_6()",
        titulo: "<center><h5><span>Resuelve</span> los siguientes problemas aplicando los cuatro pasos correspondientes</h5></center>", 
        restaurar: "start_6()",
        dir: ruta,
        cod: "3-7-6",
        nota: cal
    });
    return false;
};
function start_7() {
    $("#ventana").load(ruta + '3-7-7/index.php', {
        next: "resultado()",
        procesar: "result_tipo_3_7_7()",
        titulo: "<center><h5><span>Resuelve</span> los siguientes problemas aplicando los cuatro pasos correspondientes</h5></center>", 
        restaurar: "start_7()",
        dir: ruta,
        cod: "3-7-7",
        nota: cal
    });
    return false;
};
function resultado() {
    $("#ventana").load('../../../../exercises/resultado/resultado.php');
    return false;
};
</script>